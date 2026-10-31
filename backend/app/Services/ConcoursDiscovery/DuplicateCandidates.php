<?php

namespace App\Services\ConcoursDiscovery;

use App\Models\ConcoursAnnouncementSource;
use App\Models\ConcoursDiscovery;
use App\Models\User;
use App\Services\ConcoursDiscoveryService;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class DuplicateCandidates
{
    // One existing registry row is a transaction mutex for review/group decisions.
    // Capture still locks its own source. Always take this lock before discovery locks.
    public function lockReviews(): void
    {
        ConcoursAnnouncementSource::orderBy('id')->lockForUpdate()->firstOrFail();
    }

    public function fingerprint(ConcoursDiscovery $record): string
    {
        return hash('sha256', json_encode([$record->metadata_hash, $record->verified_url_hash,
            $record->official_identifier, $record->verified_identity, $record->candidate_category, $record->candidate_type], JSON_THROW_ON_ERROR));
    }

    public function identityHash(array $identity): ?string
    {
        $values = [];
        foreach (['institution', 'round', 'grade', 'specialty', 'session_year'] as $field) {
            if (! isset($identity[$field]) || trim((string) $identity[$field]) === '') {
                return null;
            }
            $values[$field] = mb_strtolower(preg_replace('/\s+/u', ' ', trim((string) $identity[$field])));
        }

        return hash('sha256', json_encode($values, JSON_THROW_ON_ERROR | JSON_UNESCAPED_UNICODE));
    }

    public function reason(ConcoursDiscovery $a, ConcoursDiscovery $b): ?string
    {
        if ($a->source_id === $b->source_id || ! $a->official_verified_at || ! $b->official_verified_at) {
            return null;
        }
        foreach (['candidate_type', 'candidate_category'] as $field) {
            if ($a->$field !== 'unknown' && $b->$field !== 'unknown' && $a->$field !== $b->$field) {
                return null;
            }
        }
        foreach (['institution', 'round', 'grade', 'specialty', 'session_year', 'deadline'] as $field) {
            $left = $a->verified_identity[$field] ?? null;
            $right = $b->verified_identity[$field] ?? null;
            if ($left !== null && $right !== null && mb_strtolower(trim((string) $left)) !== mb_strtolower(trim((string) $right))) {
                return null;
            }
        }
        if ($a->official_identifier && $b->official_identifier && $a->official_identifier !== $b->official_identifier) {
            return null;
        }
        if ($a->application_deadline && $b->application_deadline && ! $a->application_deadline->equalTo($b->application_deadline)) {
            return null;
        }
        if ($a->verified_url_hash && $a->verified_url_hash === $b->verified_url_hash) {
            return 'verified_official_url';
        }
        if ($a->official_identifier && $a->official_identifier === $b->official_identifier &&
            parse_url($a->official_url, PHP_URL_HOST) === parse_url($b->official_url, PHP_URL_HOST)) {
            return 'verified_identifier';
        }
        if ($a->verified_identity_hash && $a->verified_identity_hash === $b->verified_identity_hash) {
            return 'explicit_verified_identity';
        }

        return null;
    }

    public function decision(ConcoursDiscovery $a, ConcoursDiscovery $b): ?object
    {
        [$left, $right] = $a->id < $b->id ? [$a, $b] : [$b, $a];

        return DB::table('concours_discovery_matches')->where('left_id', $left->id)->where('right_id', $right->id)
            ->where('left_fingerprint', $this->fingerprint($left))->where('right_fingerprint', $this->fingerprint($right))
            ->orderByDesc('id')->first();
    }

    public function suggestions(ConcoursDiscovery $record): array
    {
        if (! $record->official_verified_at) {
            return [];
        }
        $query = ConcoursDiscovery::with('source')->where('source_id', '!=', $record->source_id)->whereNotNull('official_verified_at')
            ->where(function ($q) use ($record) {
                $q->where('verified_url_hash', $record->verified_url_hash);
                if ($record->official_identifier) {
                    $q->orWhere('official_identifier', $record->official_identifier);
                }
                if ($record->verified_identity_hash) {
                    $q->orWhere('verified_identity_hash', $record->verified_identity_hash);
                }
            });
        $items = [];
        $possible = $query->orderBy('id')->limit(101)->get();
        abort_if($possible->count() > 100, 422, 'Too many overlapping official identities. Refine the verified round/grade/session before review.');
        foreach ($possible as $other) {
            if ($reason = $this->reason($record, $other)) {
                $decision = $this->decision($record, $other);
                $items[] = ['discovery' => $other, 'reason' => $reason, 'decision' => $decision?->decision,
                    'note' => $decision?->note, 'actor_id' => $decision?->actor_id, 'decided_at' => $decision?->created_at];
            }
        }

        return $items;
    }

    public function decide(int $id, array $data, User $actor): void
    {
        DB::transaction(function () use ($id, $data, $actor) {
            $this->lockReviews();
            $records = ConcoursDiscovery::whereIn('id', [$id, $data['other_id']])->orderBy('id')->lockForUpdate()->get()->keyBy('id');
            $a = $records->get($id);
            $b = $records->get($data['other_id']);
            abort_unless($a && $b && $a->id !== $b->id, 422, 'Choose another discovery.');
            abort_if($a->version !== $data['version'] || $b->version !== $data['other_version'], 409, 'A discovery changed. Reload both records.');
            $reason = $this->reason($a, $b);
            abort_unless($reason, 422, 'Verify matching official evidence before deciding a duplicate.');
            $leftGroup = $this->component($a);
            $component = $leftGroup->merge($this->component($b))->unique('id');
            if ($data['decision'] === 'rejected' && $leftGroup->has($b->id)) {
                throw ValidationException::withMessages(['decision' => 'These discoveries already belong to a confirmed group, possibly through another source. Reconcile the group and official evidence first; a pair-only rejection cannot silently separate it.']);
            }
            if ($data['decision'] === 'confirmed') {
                abort_if($component->pluck('source_id')->unique()->count() !== $component->count(), 422, 'Distinct records from the same source may identify separate rounds; keep them separate.');
                foreach ($component as $member) {
                    foreach ($component as $other) {
                        if ($member->id !== $other->id) {
                            abort_unless($this->reason($member, $other), 422, 'Verified group facts conflict. Keep these rounds/notices separate.');
                            abort_if($this->decision($member, $other)?->decision === 'rejected' &&
                                ! (in_array($member->id, [$a->id, $b->id], true) && in_array($other->id, [$a->id, $b->id], true)), 422, 'A previous separation decision conflicts with this grouping. Review it first.');
                        }
                    }
                }
            }
            if ($data['decision'] === 'confirmed' && $component->pluck('announcement_id')->filter()->unique()->count() > 1) {
                throw ValidationException::withMessages(['decision' => 'These records already link different announcements. Reconcile them explicitly in the announcement editor; no automatic replacement is allowed.']);
            }
            [$left, $right] = $a->id < $b->id ? [$a, $b] : [$b, $a];
            DB::table('concours_discovery_matches')->insert(['left_id' => $left->id, 'right_id' => $right->id,
                'left_fingerprint' => $this->fingerprint($left), 'right_fingerprint' => $this->fingerprint($right),
                'decision' => $data['decision'], 'reason' => $reason, 'note' => $data['note'], 'actor_id' => $actor->id, 'created_at' => now()]);
            // Optimistic review versions include duplicate decisions without rewriting source metadata.
            foreach ([$a, $b] as $record) {
                $record->increment('version');
                app(ConcoursDiscoveryService::class)->revision($record->fresh(), 'duplicate_'.$data['decision'], $actor);
            }
        }, 3);
    }

    public function component(ConcoursDiscovery $record): Collection
    {
        $records = collect([$record->id => $record]);
        $pending = [$record->id];
        while ($pending) {
            $current = $records->get(array_shift($pending));
            $fingerprint = $this->fingerprint($current);
            $edges = DB::table('concours_discovery_matches as m')->where(fn ($q) => $q
                ->where(fn ($left) => $left->where('left_id', $current->id)->where('left_fingerprint', $fingerprint))
                ->orWhere(fn ($right) => $right->where('right_id', $current->id)->where('right_fingerprint', $fingerprint)))
                ->whereNotExists(fn ($newer) => $newer->selectRaw('1')->from('concours_discovery_matches as newer')
                    ->whereColumn('newer.left_id', 'm.left_id')->whereColumn('newer.right_id', 'm.right_id')
                    ->whereColumn('newer.left_fingerprint', 'm.left_fingerprint')->whereColumn('newer.right_fingerprint', 'm.right_fingerprint')->whereColumn('newer.id', '>', 'm.id'))
                ->orderBy('m.id')->limit(101)->get();
            abort_if($edges->count() > 100, 422, 'Duplicate group limit reached; refine the official identity.');
            foreach ($edges as $edge) {
                $otherId = $edge->left_id === $current->id ? $edge->right_id : $edge->left_id;
                if ($records->has($otherId)) {
                    continue;
                }
                $other = ConcoursDiscovery::findOrFail($otherId);
                if ($this->reason($current, $other) && $this->decision($current, $other)?->decision === 'confirmed') {
                    abort_if($records->count() >= 100, 422, 'Duplicate group limit reached; review these records separately.');
                    $records->put($otherId, $other);
                    $pending[] = $otherId;
                }
            }
        }

        return $records;
    }
}
