<?php

// Local operational correction and preservation proof. No migrations or source HTTP.
use App\Models\ConcoursAnnouncementSource;
use App\Services\ConcoursDiscovery\AuthorizedFeedClient;
use Illuminate\Contracts\Console\Kernel;
use Illuminate\Support\Facades\DB;

require __DIR__.'/../../vendor/autoload.php';
$app = require __DIR__.'/../../bootstrap/app.php';
$app->make(Kernel::class)->bootstrap();

$directory = __DIR__.'/../../artifacts/concours-phase5b';
$baselinePath = $directory.'/before.json';
$mode = $argv[1] ?? '--inspect';
if (! in_array($mode, ['--inspect', '--baseline', '--apply', '--verify'], true)) {
    throw new RuntimeException('Use --inspect, --baseline, --apply or --verify.');
}
if (! app()->environment('local') || DB::getDriverName() !== 'pgsql' || DB::getDatabaseName() !== 'quizatlas') {
    throw new RuntimeException('Restricted to the existing local quizatlas PostgreSQL application.');
}
$snapshot = function (): array {
    $tables = [];
    foreach (DB::table('pg_tables')->where('schemaname', 'public')->orderBy('tablename')->pluck('tablename') as $table) {
        $columns = DB::table('information_schema.columns')->where('table_schema', 'public')->where('table_name', $table)
            ->orderBy('ordinal_position')->get(['column_name', 'data_type', 'udt_name', 'is_nullable', 'column_default', 'character_maximum_length', 'numeric_precision', 'numeric_scale']);
        $hash = hash_init('sha256');
        $count = 0;
        // Source rows are compared individually; every other table includes every column.
        foreach (DB::table('public.'.$table.' as t')->selectRaw('to_jsonb(t)::text as row')->orderByRaw('to_jsonb(t)::text')->cursor() as $record) {
            hash_update($hash, $record->row."\n");
            $count++;
        }
        $tables[$table] = ['rows' => $count, 'schema_sha256' => hash('sha256', $columns->toJson()), 'data_sha256' => hash_final($hash)];
    }
    $files = [];
    $root = storage_path('app');
    foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($root, FilesystemIterator::SKIP_DOTS)) as $file) {
        if ($file->isFile()) {
            $files[substr($file->getPathname(), strlen($root) + 1)] = hash_file('sha256', $file->getPathname());
        }
    }
    ksort($files);

    return [
        'database' => DB::getDatabaseName(),
        'gates' => ['discovery' => config('concours_discovery.automation_enabled'),
            'notifications' => config('concours_notifications.enabled'), 'push' => config('concours_notifications.push_enabled'),
            'authorized_feed_urls' => config('concours_discovery.authorized_feed_urls')],
        'tables' => $tables, 'stored_files' => $files,
        'sources' => DB::table('concours_announcement_sources')->orderBy('id')->get()->map(fn ($row) => (array) $row)->all(),
    ];
};
$write = function (string $path, array $data): void {
    if (file_put_contents($path, json_encode($data, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR | JSON_UNESCAPED_UNICODE)."\n") === false) {
        throw new RuntimeException('Unable to save preservation evidence.');
    }
};
$verify = function (array $before, array $after): array {
    if ($before['database'] !== $after['database'] || $before['gates'] !== $after['gates'] ||
        $before['stored_files'] !== $after['stored_files'] || count($before['sources']) !== count($after['sources'])) {
        throw new RuntimeException('Database identity, gates, files or source row count changed.');
    }
    $tables = $after['tables'];
    $tables['concours_announcement_sources']['data_sha256'] = $before['tables']['concours_announcement_sources']['data_sha256'];
    if ($tables !== $before['tables']) {
        throw new RuntimeException('Unexpected application data or schema change.');
    }
    $changed = [];
    foreach ($before['sources'] as $index => $source) {
        $actual = $after['sources'][$index];
        $expected = $source;
        if ($source['key'] === 'emploi-public') {
            $expected = array_replace($source, ['enabled' => false, 'collection_method' => 'manual',
                'permission_status' => 'unknown', 'version' => $source['version'] + 1, 'updated_at' => $actual['updated_at']]);
            $changed = array_keys(array_diff_assoc($actual, $source));
        }
        if ($actual !== $expected) {
            throw new RuntimeException('Unexpected source change: '.$source['key']);
        }
    }

    return ['unchanged_tables' => count($tables) - 1, 'source_table_schema_and_row_count_unchanged' => true,
        'other_source_rows_unchanged' => count($before['sources']) - 1, 'source_columns_changed' => $changed,
        'stored_files_unchanged' => count($after['stored_files']), 'gates_unchanged' => true];
};

try {
    DB::beginTransaction();
    DB::statement('SET TRANSACTION ISOLATION LEVEL REPEATABLE READ'.($mode === '--apply' ? '' : ', READ ONLY'));
    $current = $snapshot();
    if ($current['gates'] !== ['discovery' => false, 'notifications' => false, 'push' => false, 'authorized_feed_urls' => []]) {
        throw new RuntimeException('Automation gates must remain disabled and the feed allowlist empty.');
    }
    $result = $current;
    if ($mode === '--baseline') {
        if (file_exists($baselinePath)) {
            throw new RuntimeException('Refusing to overwrite the original baseline.');
        }
        $write($baselinePath, $current);
    } elseif (in_array($mode, ['--apply', '--verify'], true)) {
        $before = json_decode(file_get_contents($baselinePath), true, 512, JSON_THROW_ON_ERROR);
        if ($mode === '--apply') {
            if ($current !== $before) {
                throw new RuntimeException('The application changed since the baseline; refusing the correction.');
            }
            $source = DB::table('concours_announcement_sources')->where('key', 'emploi-public')->lockForUpdate()->first();
            if (! $source || ! $source->enabled || $source->permission_status !== 'allowed' ||
                $source->collection_method !== 'rss_atom' || $source->permission_evidence !== 'public' ||
                $source->listing_url !== 'https://www.emploi-public.ma/fr/') {
                throw new RuntimeException('This is not the reviewed unsupported source configuration.');
            }
            DB::table('concours_announcement_sources')->where('id', $source->id)->where('version', $source->version)->update([
                'enabled' => false, 'collection_method' => 'manual', 'permission_status' => 'unknown',
                'version' => $source->version + 1, 'updated_at' => now(),
            ]);
            $current = $snapshot();
        }
        $proof = $verify($before, $current);
        $source = ConcoursAnnouncementSource::where('key', 'emploi-public')->firstOrFail();
        if (app(AuthorizedFeedClient::class)->eligible($source)) {
            throw new RuntimeException('Corrected source must be ineligible for automatic collection.');
        }
        $result = ['source' => $source->toArray(), 'preservation' => $proof, 'gates' => $current['gates']];
        $write($directory.($mode === '--apply' ? '/correction.json' : '/preservation-after.json'), $result);
    }
    DB::commit();
    echo json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR | JSON_UNESCAPED_UNICODE)."\n";
} catch (Throwable $error) {
    if (DB::transactionLevel()) {
        DB::rollBack();
    }
    fwrite(STDERR, $error->getMessage()."\n");
    exit(1);
}
