<?php

namespace App\Services\ContentUsage;

use App\Models\{ContentUsageItem, ContentUsageOperation, Fact, Question};
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

final class Registry
{
    public const KINDS = ['posts-json', 'posts-confirm', 'quiz-json', 'revision-json', 'quiz-video', 'facts-short', 'facts-long', 'revision-media'];

    public function reserve(int $actor, string $id, string $kind, string $requestHash, array $sources, array $parents = []): ContentUsageOperation
    {
        abort_unless(in_array($kind, self::KINDS, true) && count($sources) > 0, 422, 'Unsupported or empty content operation.');
        return DB::transaction(function () use ($actor, $id, $kind, $requestHash, $sources, $parents) {
            $created = DB::table('content_usage_operations')->insertOrIgnore([
                'id' => $id, 'actor_id' => $actor, 'kind' => $kind, 'request_hash' => $requestHash,
                'status' => 'reserved', 'attempt' => 1, 'parents' => json_encode(array_values($parents)),
                'reserved_at' => now(), 'expires_at' => now()->addSeconds($this->lease()), 'created_at' => now(), 'updated_at' => now(),
            ]);
            $op = ContentUsageOperation::whereKey($id)->lockForUpdate()->firstOrFail();
            abort_unless($op->actor_id === $actor, 403, 'This operation belongs to another administrator.');
            abort_unless($op->kind === $kind && hash_equals($op->request_hash, $requestHash), 409, 'An operation ID cannot be reused for different content.');
            if (! $created) {
                if ($op->status === 'reserved') {
                    abort_if($op->expires_at->lessThanOrEqualTo(now()), 409, 'This reservation expired; recover it before retrying.');
                    $op->update(['expires_at' => now()->addSeconds($this->lease())]);
                }
                return $op; // Includes terminal retries: never silently start a second operation.
            }
            $this->claim($op, $sources);
            return $op->refresh();
        }, 5);
    }

    private function claim(ContentUsageOperation $op, array $sources): void
    {
        $seen = [];
        // Stable ordering reduces deadlocks; PostgreSQL deadlocks retry the whole transaction.
        usort($sources, fn ($a, $b) => strcmp(implode('|', $a['identity_keys']), implode('|', $b['identity_keys'])));
        foreach ($sources as $source) {
            foreach ($source['identity_keys'] as $key) {
                abort_if(isset($seen[$key]), 409, 'The selection contains duplicate source content.');
                $seen[$key] = true;
            }
            $conflicts = DB::table('content_usage_claims')->whereIn('identity_key', $source['identity_keys'])->get();
            $parentId = null;
            $ownUsed = false;
            if ($conflicts->isNotEmpty()) {
                $owners = $conflicts->pluck('operation_id')->unique();
                if ($owners->count() === 1 && $owners->first() === $op->id) {
                    $own = ContentUsageItem::find($conflicts->first()->item_id);
                    $ownUsed = $own?->status === 'used' && $own->source_hash === $source['source_hash'];
                }
                if ($owners->count() === 1 && in_array($owners->first(), $op->parents, true)) {
                    $parent = ContentUsageOperation::find($owners->first());
                    $allowed = match ($op->kind) {
                        'revision-media' => ['revision-json', 'revision-media'],
                        'quiz-video' => ['quiz-json'],
                        default => [],
                    };
                    $rootItem = ContentUsageItem::find($conflicts->first()->item_id);
                    if ($parent?->actor_id === $op->actor_id && $rootItem?->status === 'used'
                        && in_array($parent->kind, $allowed, true) && $rootItem?->source_hash === $source['source_hash']
                        && $rootItem->source_type === $source['source_type'] && $rootItem->source_id === $source['source_id']) {
                        $parentId = $parent->id;
                    }
                }
                abort_unless($parentId || $ownUsed, 409, 'Content is reserved or already used by another operation. Refresh availability.');
            }
            $item = ContentUsageItem::updateOrCreate(
                ['operation_id' => $op->id, 'source_type' => $source['source_type'], 'source_id' => $source['source_id']],
                array_intersect_key($source, array_flip(['fingerprint', 'source_hash', 'identity_keys', 'label'])) + ['parent_operation_id' => $parentId, 'status' => $ownUsed ? 'used' : 'reserved']
            );
            if ($parentId || $ownUsed) continue; // Derived formats and successful partial retries consume once.
            $keys = $source['identity_keys']; sort($keys);
            foreach ($keys as $key) {
                $inserted = DB::table('content_usage_claims')->insertOrIgnore(['identity_key' => $key, 'item_id' => $item->id, 'operation_id' => $op->id]);
                abort_unless($inserted, 409, 'Another operation reserved the same content. Nothing was allocated.');
            }
        }
    }

    public function credentials(ContentUsageOperation $op): array
    {
        return ['operation_id' => $op->id, 'attempt' => $op->attempt,
            'token' => $this->token($op, $op->attempt), 'lease_seconds' => $this->lease(), 'status' => $op->status,
            'roots' => array_values(array_unique(array_merge([$op->id], $op->items()->whereNotNull('parent_operation_id')->pluck('parent_operation_id')->all())))];
    }

    private function token(ContentUsageOperation $op, int $attempt): string
    {
        abort_unless(strlen((string) config('app.key')) >= 32, 503, 'Usage reporting requires a configured application key.');
        return hash_hmac('sha256', 'content-usage-v1:'.$op->id.':'.$op->actor_id.':'.$attempt, (string) config('app.key'));
    }
    private function lease(): int { return (int) config('content_usage.lease_seconds', 900); }

    public function report(string $id, string $token, int $attempt, string $event, array $output = []): ContentUsageOperation
    {
        return DB::transaction(function () use ($id, $token, $attempt, $event, $output) {
            $op = ContentUsageOperation::whereKey($id)->lockForUpdate()->firstOrFail();
            abort_unless(hash_equals($this->token($op, $attempt), $token), 403, 'Invalid usage capability.');
            abort_unless(\App\Models\User::find($op->actor_id)?->isAdmin(), 403, 'The authorizing administrator is unavailable.');
            if ($event === 'retry') {
                // A lost retry response can be replayed once with the previous capability.
                if ($op->attempt === $attempt + 1 && $op->status === 'reserved') {
                    abort_if($op->expires_at->lessThanOrEqualTo(now()), 409, 'This retried reservation expired.');
                    return $op;
                }
                abort_unless($op->attempt === $attempt && in_array($op->status, ['failed', 'released'], true), 409, 'This operation cannot be retried.');
                $sources = $op->items->map(function ($item) {
                    $model = $item->source_type === 'question' ? Question::find($item->source_id) : Fact::find($item->source_id);
                    abort_unless($model, 409, 'A retry source no longer exists.');
                    $current = Fingerprint::source($model);
                    abort_unless(hash_equals($item->source_hash, $current['source_hash']), 409, 'A retry source changed. Start a new reviewed operation.');
                    return $current;
                })->all();
                $this->claim($op, $sources);
                $op->update(['status' => 'reserved', 'attempt' => $op->attempt + 1, 'reserved_at' => now(),
                    'expires_at' => now()->addSeconds($this->lease()), 'released_at' => null, 'output' => null]);
                return $op->refresh();
            }
            abort_unless($op->attempt === $attempt, 409, 'Stale generation capability.');
            if ($op->status === 'used') {
                abort_unless($event === 'complete', 409, 'Completed usage cannot be released.');
                return $op; // Lost acknowledgements never add usage or rewards twice.
            }
            if (in_array($op->status, ['failed', 'released'], true)) {
                abort_unless(in_array($event, ['fail', 'cancel'], true), 409, 'This reservation was released.');
                return $op;
            }
            abort_if($op->expires_at->lessThanOrEqualTo(now()), 409, 'This reservation expired. Recovery must fence it before another operation.');
            if ($event === 'heartbeat') $op->update(['expires_at' => now()->addSeconds($this->lease())]);
            elseif (in_array($event, ['complete', 'progress'], true)) {
                abort_unless(count($output) > 0, 422, 'A verified output receipt is required.');
                $expected = $op->kind === 'revision-media' ? 'revision' : (in_array($op->kind, ['quiz-video', 'facts-short', 'facts-long'], true) ? 'video' : null);
                abort_unless($expected && collect($output)->every(fn ($item) => $item['kind'] === $expected), 422, 'The output does not match this generation type.');
                if ($event === 'progress') {
                    abort_unless($op->kind === 'revision-media', 422);
                    $this->partial($op, $output);
                    $op->update(['output' => $output, 'expires_at' => now()->addSeconds($this->lease())]);
                } else {
                    if ($op->kind === 'revision-media') {
                        $this->partial($op, $output);
                        abort_if($op->items()->where('status', '!=', 'used')->exists(), 422, 'The completed outputs do not cover every selected source.');
                    }
                    $op->items()->update(['status' => 'used', 'completed_at' => now()]);
                    $op->update(['status' => 'used', 'completed_at' => now(), 'output' => $output]);
                }
            } else {
                abort_unless(in_array($event, ['fail', 'cancel'], true), 422);
                if ($output) {
                    abort_unless($op->kind === 'revision-media', 422);
                    $this->partial($op, $output);
                    $op->update(['output' => $output]);
                }
                $this->release($op, $event === 'cancel' ? 'released' : 'failed');
            }
            return $op->refresh();
        }, 5);
    }

    public function release(ContentUsageOperation $op, string $status): void
    {
        // Call only while holding this operation's row lock in a transaction.
        abort_unless($op->status === 'reserved', 409);
        DB::table('content_usage_claims')->where('operation_id', $op->id)
            ->whereIn('item_id', $op->items()->where('status', 'reserved')->select('id'))->delete();
        $op->items()->where('status', 'reserved')->update(['status' => $status]);
        $op->update(['status' => $status, 'released_at' => now()]);
    }

    public function recover(): int
    {
        $count = 0;
        ContentUsageOperation::where('status', 'reserved')->where('expires_at', '<=', now())->select('id')->chunkById(100, function ($ops) use (&$count) {
            foreach ($ops as $candidate) $count += DB::transaction(function () use ($candidate) {
                $op = ContentUsageOperation::whereKey($candidate->id)->lockForUpdate()->first();
                if ($op?->status === 'reserved' && $op->expires_at->lessThanOrEqualTo(now())) { $this->release($op, 'failed'); return 1; }
                return 0;
            }, 5);
        });
        return $count;
    }

    private function partial(ContentUsageOperation $op, array $output): void
    {
        abort_unless(collect($output)->every(fn ($v) => $v['kind'] === 'revision'), 422);
        $ids = collect($output)->flatMap(fn ($v) => $v['source_ids'] ?? [])->unique()->values()->all();
        abort_unless($ids && $op->items()->where('source_type', 'question')->whereIn('source_id', $ids)->count() === count($ids), 422, 'A partial output contains unassigned sources.');
        $op->items()->where('source_type', 'question')->whereIn('source_id', $ids)->update(['status' => 'used', 'completed_at' => now()]);
    }

    public function blockers(array $sources): array
    {
        $keys = array_values(array_unique(array_merge(...array_map(fn ($s) => $s['identity_keys'], $sources ?: [['identity_keys' => []]]))));
        $result = [];
        foreach (array_chunk($keys, 500) as $chunk) {
            foreach (DB::table('content_usage_claims')->join('content_usage_operations as o', 'o.id', '=', 'content_usage_claims.operation_id')
                ->join('content_usage_items as i', 'i.id', '=', 'content_usage_claims.item_id')
                ->whereIn('identity_key', $chunk)->select('identity_key', 'o.id', 'o.kind', 'i.status', 'o.expires_at', 'i.completed_at', 'o.output')->get() as $row) $result[$row->identity_key] = $row;
        }
        return $result;
    }

    public function available(Collection $models): Collection
    {
        if ($models->isEmpty()) return $models;
        $models->loadMissing($models->first() instanceof Question ? ['choices', 'quiz.subject.major'] : ['subject.major']);
        $models = $models->filter(fn ($m) => $m instanceof Question ? trim((string) $m->question) !== '' : collect([$m->text_fr, $m->text_ar, $m->text_en])->contains(fn ($text) => trim((string) $text) !== ''));
        $sources = $models->map(fn ($m) => Fingerprint::source($m))->all();
        $blockers = $this->blockers($sources);
        return $models->filter(function ($m, $key) use ($sources, $blockers) {
            return ! array_filter($sources[$key]['identity_keys'], fn ($key) => isset($blockers[$key]));
        })->values();
    }
}
