<?php

namespace App\Services\ContentUsage;

use App\Models\{ContentUsageOperation, Fact};
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use RuntimeException;

/** Explicit, local-only reclassification of evidenced legacy Fact-video usage. */
final class FactVideoUsageScopeRepair
{
    public function run(array $evidence, bool $apply, ?string $expectedDatabase, string $backupDirectory): array
    {
        $db = DB::connection();
        if (!app()->environment(['local', 'testing']) || !(
            ($db->getDriverName() === 'pgsql' && in_array($db->getConfig('host'), ['postgres', 'localhost', '127.0.0.1', '::1'], true))
            || (app()->environment('testing') && $db->getDriverName() === 'sqlite' && $db->getDatabaseName() === ':memory:')
        )) throw new RuntimeException('Fact scope repair is restricted to the local development database.');
        if ($apply && $expectedDatabase !== $db->getDatabaseName()) throw new RuntimeException('Apply requires the exact --expect-database name.');
        if (($evidence['format'] ?? null) !== 'maroquiz-fact-video-scope-evidence-v1' || !is_array($evidence['operations'] ?? null)) throw new RuntimeException('Invalid evidence file.');
        $entries = collect($evidence['operations']);
        if ($entries->pluck('operation_id')->unique()->count() !== $entries->count()) throw new RuntimeException('Duplicate evidence operation.');

        return DB::transaction(function () use ($db, $entries, $evidence, $apply, $backupDirectory) {
            if ($db->getDriverName() === 'pgsql') {
                if ($apply) DB::statement("SET LOCAL lock_timeout = '5s'");
                else DB::statement('SET TRANSACTION ISOLATION LEVEL REPEATABLE READ, READ ONLY');
            }
            $query = ContentUsageOperation::whereIn('id', $entries->pluck('operation_id'))->orderBy('id');
            $operations = ($apply ? $query->lockForUpdate() : $query)->get()->keyBy('id');
            $plans = []; $skipped = []; $already = 0;
            foreach ($entries as $entry) {
                $id = $entry['operation_id']; $op = $operations->get($id);
                if (!$op || !in_array($op->kind, Fingerprint::FACT_VIDEO_TYPES, true)) { $skipped[$id] = 'Not a Fact-video operation.'; continue; }
                if ($op->status === 'reserved') { $skipped[$id] = 'Reserved operation left untouched; finish or stop its render first.'; continue; }
                try {
                    $docs = $entry['documents'] ?? [];
                    if (!$docs || !is_array($docs) || count($docs) > 60) throw new RuntimeException('Missing approved input evidence.');
                    $language = $docs[0]['language'] ?? '';
                    $sources = [];
                    foreach ($docs as $doc) {
                        if (($doc['type'] ?? null) !== $op->kind || ($doc['language'] ?? null) !== $language) throw new RuntimeException('Mixed or mismatched language/format evidence.');
                        $sources = array_merge($sources, app(Sources::class)->render($doc)['sources']);
                    }
                    $sources = collect($sources)->keyBy('source_id'); $items = $op->items;
                    if ($items->contains(fn ($item) => $item->source_type !== 'fact') || $sources->count() !== $items->count()
                        || $items->pluck('source_id')->sort()->values()->all() !== $sources->keys()->sort()->values()->all()) throw new RuntimeException('Evidence does not cover exactly the assigned facts.');
                    if (Fingerprint::requestHash($entry['receipts'] ?? []) !== Fingerprint::requestHash($op->output ?? [])) throw new RuntimeException('Verified receipts do not match the recorded output references.');
                    $scoped = $items->filter(fn ($item) => Fingerprint::factVideoScope($item->identity_keys) === ['language' => $language, 'video_type' => $op->kind]);
                    if ($scoped->count() === $items->count()) { $already++; continue; }
                    if ($scoped->isNotEmpty()) throw new RuntimeException('Partly scoped operation requires review.');
                    foreach ($items as $item) {
                        $fact = Fact::findOrFail($item->source_id);
                        if ($item->source_hash !== Fingerprint::source($fact)['source_hash']) throw new RuntimeException('Legacy source changed; classification is ambiguous.');
                        $claims = DB::table('content_usage_claims')->where('item_id', $item->id)->get();
                        if ($claims->contains(fn ($claim) => $claim->operation_id !== $op->id)
                            || ($item->status === 'used' && $claims->isEmpty())) throw new RuntimeException('Inconsistent legacy claim ownership.');
                        if (DB::table('content_usage_claims')->whereIn('identity_key', $sources[$item->source_id]['identity_keys'])->where('operation_id', '!=', $op->id)->exists()) throw new RuntimeException('A scoped claim already belongs to another operation.');
                    }
                    $plans[$op->id] = ['operation' => $op, 'items' => $items, 'sources' => $sources];
                } catch (\Throwable $error) { $skipped[$id] = $error->getMessage(); }
            }
            $ids = array_keys($plans);
            $claims = DB::table('content_usage_claims')->whereIn('operation_id', $ids)->orderBy('identity_key')->get();
            $report = ['database' => $db->getDatabaseName(), 'operations' => count($plans), 'items' => collect($plans)->sum(fn ($p) => $p['items']->count()),
                'old_claims' => $claims->count(), 'scoped_claims' => collect($plans)->sum(fn ($p) => $p['items']->where('status', 'used')->count() * 2),
                'already_scoped' => $already, 'skipped' => $skipped,
                'without_evidence' => ContentUsageOperation::whereIn('kind', Fingerprint::FACT_VIDEO_TYPES)->whereNotIn('id', $entries->pluck('operation_id'))->count(), 'applied' => false];
            if (!$apply || !$plans) return $report;
            $records = ['operations' => $operations->only($ids)->values()->map->getAttributes()->all(),
                'items' => collect($plans)->flatMap(fn ($p) => $p['items']->map->getAttributes())->values()->all(), 'claims' => $claims->all()];
            $backup = $this->backup($backupDirectory, ['format' => 'maroquiz-fact-video-scope-backup-v1', 'at' => now()->toIso8601String(), 'report' => $report, 'evidence' => $evidence, 'records' => $records]);
            foreach ($plans as $id => $plan) foreach ($plan['items'] as $item) {
                $source = $plan['sources'][$item->source_id];
                DB::table('content_usage_claims')->where('operation_id', $id)->where('item_id', $item->id)->delete();
                $item->update(array_intersect_key($source, array_flip(['fingerprint', 'source_hash', 'identity_keys', 'label'])));
                if ($item->status === 'used') foreach ($source['identity_keys'] as $key) DB::table('content_usage_claims')->insert(['identity_key' => $key, 'item_id' => $item->id, 'operation_id' => $id]);
            }
            return array_replace($report, ['applied' => true, 'backup' => $backup]);
        }, 1);
    }

    private function backup(string $directory, array $snapshot): array
    {
        if (!str_starts_with($directory, DIRECTORY_SEPARATOR) || str_contains($directory, '..') || is_link($directory)
            || str_starts_with($directory.'/', public_path().'/') || str_starts_with($directory.'/', storage_path('app/public').'/')) throw new RuntimeException('Use an absolute private backup directory.');
        if (!is_dir($directory) && !mkdir($directory, 0700, true)) throw new RuntimeException('Cannot create backup directory.');
        if (!chmod($directory, 0700)) throw new RuntimeException('Cannot restrict backup permissions.');
        $file = $directory.'/fact-video-scope-'.Str::uuid().'.json';
        $handle = fopen($file, 'x');
        if (!$handle) throw new RuntimeException('Cannot create the private backup.');
        try {
            if (!chmod($file, 0600)) throw new RuntimeException('Cannot restrict backup permissions.');
            $json = json_encode($snapshot, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR);
            if (fwrite($handle, $json) !== strlen($json) || !fflush($handle) || !fsync($handle)) throw new RuntimeException('Backup is incomplete.');
        } finally { fclose($handle); }
        $hash = hash('sha256', $json);
        if (hash_file('sha256', $file) !== $hash) throw new RuntimeException('Backup checksum failed.');
        return ['path' => $file, 'sha256' => $hash];
    }
}
