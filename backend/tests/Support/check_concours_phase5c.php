<?php

// Guarded local additive setup. Original columns/rows/files are compared transactionally.
use Illuminate\Contracts\Console\Kernel;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

require __DIR__.'/../../vendor/autoload.php';
$app = require __DIR__.'/../../bootstrap/app.php';
$app->make(Kernel::class)->bootstrap();
if (! app()->environment('local') || DB::getDriverName() !== 'pgsql' || DB::getDatabaseName() !== 'quizatlas') {
    throw new RuntimeException('Restricted to the existing local quizatlas database.');
}
$mode = $argv[1] ?? '--verify';
if (! in_array($mode, ['--baseline', '--apply', '--verify'], true)) {
    throw new RuntimeException('Use --baseline, --apply or --verify.');
}
$path = __DIR__.'/../../artifacts/concours-phase5c';
$baselinePath = $path.'/before.json';
$write = fn ($name, $value) => file_put_contents($path.'/'.$name, json_encode($value, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR)."\n");
$files = function (): array {
    $result = [];
    $root = storage_path('app');
    foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($root, FilesystemIterator::SKIP_DOTS)) as $file) {
        if ($file->isFile()) {
            $result[substr($file->getPathname(), strlen($root) + 1)] = hash_file('sha256', $file->getPathname());
        }
    }
    ksort($result);

    return $result;
};
$snapshot = function (?array $original = null) use ($files): array {
    $result = ['tables' => [], 'stored_files' => $files(), 'gates' => [
        'discovery' => config('concours_discovery.automation_enabled'), 'notifications' => config('concours_notifications.enabled'),
        'push' => config('concours_notifications.push_enabled'), 'feed_urls' => config('concours_discovery.authorized_feed_urls')]];
    $tables = $original ? array_keys($original['tables']) : DB::table('pg_tables')->where('schemaname', 'public')->orderBy('tablename')->pluck('tablename');
    foreach ($tables as $table) {
        $columns = $original['tables'][$table]['columns'] ?? DB::table('information_schema.columns')->where('table_schema', 'public')
            ->where('table_name', $table)->orderBy('ordinal_position')->pluck('column_name')->all();
        $query = DB::table('public.'.$table)->select($columns);
        if ($original && in_array($table, ['migrations', 'concours_announcement_sources'], true)) {
            $query->whereIn('id', $original[$table.'_ids']);
        }
        $hash = hash_init('sha256');
        $count = 0;
        foreach (DB::query()->fromSub($query, 't')->selectRaw('to_jsonb(t)::text as row')->orderByRaw('to_jsonb(t)::text')->cursor() as $record) {
            hash_update($hash, $record->row."\n");
            $count++;
        }
        $result['tables'][$table] = ['columns' => $columns, 'rows' => $count, 'sha256' => hash_final($hash)];
    }
    foreach (['migrations', 'concours_announcement_sources'] as $table) {
        $result[$table.'_ids'] = $original[$table.'_ids'] ?? DB::table($table)->orderBy('id')->pluck('id')->all();
    }

    return $result;
};
try {
    DB::beginTransaction();
    DB::statement('SET TRANSACTION ISOLATION LEVEL REPEATABLE READ'.($mode === '--apply' ? '' : ', READ ONLY'));
    if ($mode === '--baseline') {
        if (file_exists($baselinePath)) {
            throw new RuntimeException('Refusing to overwrite original evidence.');
        }
        $before = $snapshot();
        $write('before.json', $before);
        $result = ['original_tables' => count($before['tables']), 'original_files' => count($before['stored_files'])];
    } else {
        $before = json_decode(file_get_contents($baselinePath), true, 512, JSON_THROW_ON_ERROR);
        if ($snapshot($before) !== $before) {
            throw new RuntimeException('Pre-existing rows, columns or files differ from the baseline.');
        }
        if ($before['gates'] !== ['discovery' => false, 'notifications' => false, 'push' => false, 'feed_urls' => []]) {
            throw new RuntimeException('Automation gates must remain off and the allowlist empty.');
        }
        if ($mode === '--apply') {
            if (DB::table('migrations')->where('migration', '2026_11_03_000000_extend_concours_multi_source_discovery')->exists()) {
                throw new RuntimeException('Already installed; use --verify.');
            }
            $status = Artisan::call('migrate', ['--path' => 'database/migrations/2026_11_03_000000_extend_concours_multi_source_discovery.php']);
            if ($status !== 0) {
                throw new RuntimeException('Additive migration failed.');
            }
            Artisan::call('concours:register-sources');
        }
        if ($snapshot($before) !== $before || DB::table('concours_discovery_matches')->count() !== 0) {
            throw new RuntimeException('Preservation failed.');
        }
        $new = DB::table('concours_announcement_sources')->whereNotIn('id', $before['concours_announcement_sources_ids'])->orderBy('key')->get();
        if ($new->pluck('key')->all() !== ['alwadifa-maroc', 'dreamjob', 'orientation-chabab']) {
            throw new RuntimeException('Unexpected source additions.');
        }
        foreach ($new as $source) {
            if ($source->enabled || $source->permission_status !== 'unknown' || $source->source_kind !== 'third_party' ||
                $source->collection_method !== 'rss_atom' || $source->last_attempt_at !== null || $source->last_success_at !== null) {
                throw new RuntimeException('Candidate source activation or attempts detected.');
            }
        }
        if (DB::table('migrations')->count() !== count($before['migrations_ids']) + 1) {
            throw new RuntimeException('Unexpected migration records.');
        }
        $result = ['original_tables_preserved' => count($before['tables']), 'original_stored_files_preserved' => count($before['stored_files']),
            'original_source_rows_preserved' => count($before['concours_announcement_sources_ids']), 'added_sources' => $new,
            'added_match_rows' => 0, 'gates' => $before['gates']];
        $write($mode === '--apply' ? 'local-setup.json' : 'preservation-after.json', $result);
    }
    DB::commit();
    echo json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR)."\n";
} catch (Throwable $error) {
    if (DB::transactionLevel()) {
        DB::rollBack();
    }
    fwrite(STDERR, $error->getMessage()."\n");
    exit(1);
}
