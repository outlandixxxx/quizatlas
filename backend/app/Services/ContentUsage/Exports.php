<?php

namespace App\Services\ContentUsage;

use App\Models\ContentUsageOperation;
use Illuminate\Support\Facades\{DB, Storage};

final class Exports
{
    public function __construct(private Registry $registry, private Sources $sources) {}
    public static function path(string $id): string { return 'content-exports/'.$id.'.json'; }

    public function create(int $actor, string $id, string $kind, array $document): array
    {
        $hash = Fingerprint::requestHash([$kind, $document]);
        $existing = ContentUsageOperation::find($id);
        if ($existing) {
            abort_unless($existing->actor_id === $actor, 403);
            abort_unless($existing->kind === $kind && hash_equals($existing->request_hash, $hash), 409, 'This export ID already represents different content.');
            if ($existing->status === 'used') return $this->read($existing);
            abort_unless($existing->status === 'reserved', 409, 'This export failed. Use a new operation after reviewing availability.');
        }
        $op = $this->registry->reserve($actor, $id, $kind, $hash, $this->sources->export($kind, $document));
        try {
            return DB::transaction(function () use ($op, $document) {
                $op = ContentUsageOperation::whereKey($op->id)->lockForUpdate()->firstOrFail();
                if ($op->status === 'used') return $this->read($op);
                abort_unless($op->status === 'reserved' && $op->expires_at->isFuture(), 409, 'This export reservation expired.');
                $content = json_encode($document, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR);
                $disk = Storage::disk('local');
                abort_unless($disk->put(self::path($op->id), $content), 503, 'The export could not be saved. No content was consumed.');
                abort_unless(hash_equals(hash('sha256', $content), hash('sha256', $disk->get(self::path($op->id)))), 503, 'Export integrity verification failed.');
                $op->update(['status' => 'used', 'completed_at' => now(), 'output' => [[
                    'kind' => 'json', 'name' => 'maroquiz-'.$op->kind.'-'.$op->id.'.json',
                    'sha256' => hash('sha256', $content), 'bytes' => strlen($content),
                ]]]);
                $op->items()->update(['status' => 'used', 'completed_at' => now()]);
                return ['operation' => $op->refresh(), 'content' => $content];
            }, 5);
        } catch (\Throwable $e) {
            DB::transaction(function () use ($op) {
                $locked = ContentUsageOperation::whereKey($op->id)->lockForUpdate()->first();
                if ($locked?->status === 'reserved') $this->registry->release($locked, 'failed');
            });
            throw $e;
        }
    }
    public function read(ContentUsageOperation $op): array
    {
        abort_unless($op->status === 'used' && in_array($op->kind, ['posts-json', 'quiz-json', 'revision-json'], true), 404);
        $disk = Storage::disk('local');
        abort_unless($disk->exists(self::path($op->id)), 503, 'The retained export is unavailable. Restore it from backup; it will not be generated twice.');
        $content = $disk->get(self::path($op->id));
        abort_unless(hash_equals($op->output[0]['sha256'], hash('sha256', $content)), 503, 'The retained export failed its integrity check.');
        return ['operation' => $op, 'content' => $content];
    }
}
