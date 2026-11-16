<?php

namespace App\Services\ContentUsage;

use App\Models\{ContentUsageOperation, VideoSetQuestion};
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use RuntimeException;

/** Reclassify historical usage, never reset consumption or approved content. */
final class QuizVideoScopeRepair
{
    public function run(array $evidence, bool $apply, ?string $expectedDatabase, string $backupDirectory): array
    {
        $db = DB::connection();
        if (!app()->environment(['local', 'testing']) || !(
            ($db->getDriverName() === 'pgsql' && in_array($db->getConfig('host'), ['postgres', 'localhost', '127.0.0.1', '::1'], true))
            || (app()->environment('testing') && $db->getDriverName() === 'sqlite' && $db->getDatabaseName() === ':memory:')
        )) throw new RuntimeException('Quiz video scope repair is restricted to the local development database.');
        if ($apply && $expectedDatabase !== $db->getDatabaseName()) throw new RuntimeException('Apply requires the exact --expect-database name.');
        if (($evidence['format'] ?? null) !== 'maroquiz-quiz-video-scope-v1' || !is_array($evidence['operations'] ?? null)) throw new RuntimeException('Invalid scope evidence.');
        $entries = collect($evidence['operations']);
        if ($entries->pluck('operation_id')->unique()->count() !== $entries->count()) throw new RuntimeException('Duplicate evidence operation.');

        return DB::transaction(function () use ($db, $entries, $apply, $backupDirectory) {
            if ($db->getDriverName() === 'pgsql') {
                if ($apply) {
                    DB::statement("SET LOCAL lock_timeout = '5s'");
                    DB::statement('LOCK TABLE content_usage_operations, content_usage_items, content_usage_claims, video_set_questions IN SHARE ROW EXCLUSIVE MODE');
                } else DB::statement('SET TRANSACTION ISOLATION LEVEL REPEATABLE READ, READ ONLY');
            }
            if ($apply && ContentUsageOperation::where('kind', 'quiz-video')->where('status', 'reserved')->exists()) throw new RuntimeException('Finish or reconcile reserved quiz video jobs before reclassifying history.');
            $operations = ContentUsageOperation::whereIn('id', $entries->pluck('operation_id'))->with('items')->get()->keyBy('id');
            $plans = []; $skipped = []; $already = 0; $assignments = collect(); $templates = [];
            foreach ($entries as $entry) {
                $id = $entry['operation_id']; $op = $operations->get($id);
                if (!$op || $op->kind !== 'quiz-video' || QuizVideoUsageReset::retired($op->output ?? [])) continue;
                if ($op->status === 'reserved') { $skipped[$id] = 'Reserved job left untouched.'; continue; }
                try {
                    $doc = $this->authorizedDocument($op, $entry['document'] ?? null);
                    $selection = app(Sources::class)->render($doc);
                    if ($selection['kind'] !== 'quiz-video') throw new RuntimeException('Not a quiz video snapshot.');
                    $sources = collect($selection['sources'])->keyBy('source_id');
                    if ($op->items->contains(fn ($item) => $item->source_type !== 'question')
                        || $sources->count() !== $op->items->count()
                        || $sources->keys()->sort()->values()->all() !== $op->items->pluck('source_id')->sort()->values()->all()) throw new RuntimeException('Snapshot does not cover the exact operation sources.');
                    $scope = Fingerprint::quizVideoTemplate($selection['sources'][0]['identity_keys']);
                    if ($op->items->every(fn ($item) => $item->identity_keys === $sources[$item->source_id]['identity_keys'])) { $already++; continue; }
                    foreach ($op->items as $item) {
                        $source = $sources[$item->source_id];
                        if ($item->source_hash !== $source['source_hash'] || Fingerprint::quizVideoTemplate($item->identity_keys) !== null) throw new RuntimeException('Changed source or partly scoped history requires review.');
                        $claims = DB::table('content_usage_claims')->where('item_id', $item->id)->get();
                        if ($claims->contains(fn ($c) => $c->operation_id !== $op->id)
                            || ($item->status === 'used' && $claims->isEmpty()) || $item->parent_operation_id !== null) throw new RuntimeException('Inconsistent or derived legacy claim ownership requires review.');
                        if ($claims->isNotEmpty() && $claims->pluck('identity_key')->sort()->values()->all() !== collect($item->identity_keys)->sort()->values()->all()) throw new RuntimeException('Incomplete legacy identities require review.');
                        if (DB::table('content_usage_claims')->whereIn('identity_key', $source['identity_keys'])->where('operation_id', '!=', $op->id)->exists()) throw new RuntimeException('Another operation already owns this template-specific source.');
                    }
                    $plans[$id] = ['op' => $op, 'sources' => $sources];
                    $templates[$scope] = ($templates[$scope] ?? 0) + $op->items->count();
                    foreach (($doc['type'] ?? '') === 'quiz-batch' ? $doc['videos'] : [$doc] as $video) {
                        $rows = VideoSetQuestion::restrictsVideoReuse()->where('video_set_id', $video['video']['id'])->whereIn('question_id', array_column($video['questions'], 'id'))->get();
                        foreach ($rows as $row) {
                            if (!$assignments->has($row->id)) $assignments[$row->id] = ['model' => $row, 'templates' => $row->selection_metadata['quiz_video_usage_templates'] ?? []];
                            $value = $assignments[$row->id]; $value['templates'][] = $scope; $assignments[$row->id] = $value;
                        }
                    }
                } catch (\Throwable $error) { $skipped[$id] = $error->getMessage(); }
            }
            $claims = DB::table('content_usage_claims')->whereIn('operation_id', array_keys($plans))->orderBy('identity_key')->get();
            $report = ['database' => $db->getDatabaseName(), 'operations' => count($plans),
                'items' => collect($plans)->sum(fn ($p) => $p['op']->items->count()), 'claims' => $claims->count(),
                'assignments' => $assignments->count(), 'by_template' => $templates, 'already_scoped' => $already, 'skipped' => $skipped,
                'without_evidence' => ContentUsageOperation::where('kind', 'quiz-video')->whereNotIn('id', $entries->pluck('operation_id'))->count(), 'applied' => false];
            if (!$apply || !$plans) return $report;
            $records = ['operations' => collect($plans)->map(fn ($p) => $p['op']->getAttributes())->values()->all(),
                'items' => collect($plans)->flatMap(fn ($p) => $p['op']->items->map->getAttributes())->values()->all(),
                'claims' => $claims->all(), 'assignments' => $assignments->map(fn ($p) => $p['model']->getAttributes())->values()->all()];
            $backup = $this->backup($backupDirectory, ['format' => 'maroquiz-quiz-video-scope-backup-v1', 'at' => now()->toIso8601String(), 'report' => $report, 'records' => $records]);
            foreach ($plans as $id => $plan) foreach ($plan['op']->items as $item) {
                $hadClaims = $claims->contains('item_id', $item->id);
                DB::table('content_usage_claims')->where('operation_id', $id)->where('item_id', $item->id)->delete();
                $item->update(array_intersect_key($plan['sources'][$item->source_id], array_flip(['fingerprint', 'source_hash', 'identity_keys', 'label'])));
                if ($hadClaims) foreach ($item->identity_keys as $key) DB::table('content_usage_claims')->insert(['identity_key' => $key, 'item_id' => $item->id, 'operation_id' => $id]);
            }
            foreach ($assignments as $plan) {
                $metadata = $plan['model']->selection_metadata ?? [];
                $metadata['quiz_video_usage_templates'] = array_values(array_unique($plan['templates']));
                $plan['model']->update(['selection_metadata' => $metadata]);
            }
            return array_replace($report, ['applied' => true, 'backup' => $backup]);
        }, 1);
    }

    private function authorizedDocument(ContentUsageOperation $op, mixed $doc): array
    {
        if (!is_array($doc)) throw new RuntimeException('Missing originally authorized snapshot.');
        $matches = fn ($value) => hash_equals($op->request_hash, Fingerprint::requestHash(['quiz-video', $value, $op->parents ?? []]));
        if ($matches($doc)) return $doc;
        // The single-quiz runner historically removed worker profile/fps before
        // saving input.json. Recover ONLY those bounded presentation options and
        // accept them ONLY when the original authorization hash matches exactly.
        // Never infer a template, change a question or relax the hash check.
        if (($doc['type'] ?? 'quiz') === 'quiz' && ($doc['video']['template'] ?? null) !== 'niveau-concours') {
            foreach (['draft', 'final'] as $profile) foreach ([null, ...range(15, 60)] as $fps) {
                $candidate = $doc;
                $candidate['render_options'] = array_replace($doc['render_options'] ?? [], ['profile' => $profile]);
                if ($fps !== null) $candidate['render_options']['fps'] = $fps;
                if ($matches($candidate)) return $candidate;
            }
        }
        throw new RuntimeException('The input does not match the originally authorized snapshot.');
    }

    private function backup(string $directory, array $snapshot): array
    {
        if (!str_starts_with($directory, DIRECTORY_SEPARATOR) || str_contains($directory, '..') || is_link($directory)
            || str_starts_with($directory.'/', public_path().'/') || str_starts_with($directory.'/', storage_path('app/public').'/')) throw new RuntimeException('Use an absolute private backup directory.');
        if (!is_dir($directory) && !mkdir($directory, 0700, true)) throw new RuntimeException('Cannot create backup directory.');
        if (!chmod($directory, 0700)) throw new RuntimeException('Cannot restrict backup permissions.');
        $file = $directory.'/quiz-video-scope-'.Str::uuid().'.json';
        $handle = fopen($file, 'x');
        if (!$handle) throw new RuntimeException('Cannot create backup.');
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
