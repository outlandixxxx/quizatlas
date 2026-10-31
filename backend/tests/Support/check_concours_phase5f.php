<?php

// Local, explicit one-shot collection only. No migration, publication, scheduler or notification dispatch.
use App\Models\ConcoursAnnouncementSource;
use App\Models\ConcoursDiscovery;
use App\Models\User;
use App\Services\ConcoursDiscovery\WadifaInfoNormalizer;
use App\Services\ConcoursDiscoveryService;
use Illuminate\Contracts\Console\Kernel;
use Illuminate\Database\Connection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

require __DIR__.'/../../vendor/autoload.php';
$app = require __DIR__.'/../../bootstrap/app.php';
$app->make(Kernel::class)->bootstrap();
set_exception_handler(function (Throwable $error) {
    fwrite(STDERR, $error->getMessage().PHP_EOL);
    exit(1);
});
if (! app()->environment('local') || DB::getDriverName() !== 'pgsql' || DB::getDatabaseName() !== 'quizatlas') {
    throw new RuntimeException('Local quizatlas PostgreSQL only.');
}
$path = base_path('artifacts/concours-phase5f');
if (! is_dir($path)) {
    mkdir($path, 0755, true);
}
$write = function ($name, $data) use ($path) {
    file_put_contents($path.'/'.$name, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR)."\n");
};
$mode = $argv[1] ?? '--verify';
if (! in_array($mode, ['--baseline', '--verify', '--collect', '--api', '--session'], true)) {
    throw new RuntimeException('Unsupported mode.');
}
if ($mode !== '--collect') {
    Http::preventStrayRequests();
}
$mutable = ['concours_announcement_sources', 'concours_discoveries', 'concours_discovery_revisions'];
$snapshot = function (Connection $db) use ($mutable): array {
    $db->beginTransaction();
    $db->statement('SET TRANSACTION ISOLATION LEVEL REPEATABLE READ, READ ONLY');
    try {
        $tables = [];
        $original = [];
        foreach ($db->table('pg_tables')->where('schemaname', 'public')->orderBy('tablename')->pluck('tablename') as $table) {
            $columns = $db->table('information_schema.columns')->where('table_schema', 'public')->where('table_name', $table)->orderBy('ordinal_position')
                ->get(['column_name', 'data_type', 'udt_name', 'is_nullable', 'column_default', 'character_maximum_length', 'numeric_precision', 'numeric_scale']);
            $hash = hash_init('sha256');
            $count = 0;
            foreach ($db->table('public.'.$table.' as t')->selectRaw('to_jsonb(t)::text as row')->orderByRaw('to_jsonb(t)::text')->cursor() as $row) {
                hash_update($hash, $row->row."\n");
                $count++;
                if (in_array($table, $mutable, true)) {
                    $id = json_decode($row->row, true, 32, JSON_THROW_ON_ERROR)['id'];
                    $original[$table][$id] = hash('sha256', $row->row);
                }
            }
            if (isset($original[$table])) {
                ksort($original[$table]);
            }
            $tables[$table] = ['rows' => $count, 'schema_sha256' => hash('sha256', $columns->toJson()), 'sha256' => hash_final($hash)];
        }
    } finally {
        $db->rollBack();
    }
    $files = [];
    foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator(storage_path('app'), FilesystemIterator::SKIP_DOTS)) as $file) {
        if ($file->isFile()) {
            $files[substr($file->getPathname(), strlen(storage_path('app')) + 1)] = hash_file('sha256', $file->getPathname());
        }
    }
    ksort($files);

    return ['tables' => $tables, 'original_rows' => $original, 'stored_files' => $files];
};
$gates = ['discovery' => config('concours_discovery.automation_enabled'), 'feeds' => config('concours_discovery.authorized_feed_urls'),
    'notifications' => config('concours_notifications.enabled'), 'push' => config('concours_notifications.push_enabled')];
if ($gates !== ['discovery' => false, 'feeds' => [], 'notifications' => false, 'push' => false]) {
    throw new RuntimeException('Persistent automation gates must remain disabled.');
}
$current = $snapshot(DB::connection());
if ($mode === '--baseline') {
    if (file_exists($path.'/before.json')) {
        throw new RuntimeException('Refusing to replace baseline.');
    }
    $settings = config('database.connections.'.config('database.default'));
    $settings['database'] = 'maroquiz_phase5f_restore_check';
    $settings['url'] = null;
    config(['database.connections.phase5f_restore' => $settings]);
    if ($snapshot(DB::connection('phase5f_restore')) !== $current) {
        throw new RuntimeException('Fresh restored backup differs from application.');
    }
    $write('before.json', $current);
    $write('backup-verified.json', ['separate_restored_database' => 'maroquiz_phase5f_restore_check', 'all_tables_match' => count($current['tables']), 'stored_files' => count($current['stored_files']), 'at' => now()->toIso8601String()]);
    echo "Fresh restored backup matches application; baseline recorded.\n";
    exit;
}
$before = json_decode(file_get_contents($path.'/before.json'), true, 512, JSON_THROW_ON_ERROR);
$verify = function ($now) use ($before, $mutable, $write) {
    if (array_keys($before['tables']) !== array_keys($now['tables']) || $before['stored_files'] !== $now['stored_files']) {
        throw new RuntimeException('Schema/table list or stored files changed.');
    }
    foreach ($before['tables'] as $table => $state) {
        if ($state['schema_sha256'] !== $now['tables'][$table]['schema_sha256']) {
            throw new RuntimeException('Schema changed: '.$table);
        }
        if (! in_array($table, $mutable, true) && $now['tables'][$table] !== $state) {
            throw new RuntimeException('Existing table changed: '.$table);
        }
        foreach ($before['original_rows'][$table] ?? [] as $id => $hash) {
            if (($now['original_rows'][$table][$id] ?? null) !== $hash) {
                throw new RuntimeException('Existing row changed: '.$table.'#'.$id);
            }
        }
    }
    $source = ConcoursAnnouncementSource::where('key', WadifaInfoNormalizer::KEY)->first();
    $sourceExtra = $now['tables']['concours_announcement_sources']['rows'] - $before['tables']['concours_announcement_sources']['rows'];
    $new = ConcoursDiscovery::where('source_id', $source?->id ?? 0)->get();
    if ($sourceExtra !== ($source ? 1 : 0) || $new->count() !== $now['tables']['concours_discoveries']['rows'] - $before['tables']['concours_discoveries']['rows']) {
        throw new RuntimeException('Unexpected source/discovery inserts.');
    }
    $revisionCount = 0;
    foreach ($new as $record) {
        if ($record->status !== 'pending' || $record->official_url || $record->official_verified_at || $record->announcement_id || $record->version !== 1) {
            throw new RuntimeException('Unexpected review/publication/proof state.');
        }
        if ($record->revisions()->count() !== 1) {
            throw new RuntimeException('Unexpected source revisions.');
        }
        $revisionCount++;
    }
    if ($revisionCount !== $now['tables']['concours_discovery_revisions']['rows'] - $before['tables']['concours_discovery_revisions']['rows']) {
        throw new RuntimeException('Unexpected revision inserts.');
    }
    $write('preservation.json', ['unchanged_schema_tables' => count($now['tables']), 'fully_unchanged_tables' => count(array_filter($now['tables'], fn ($state, $name) => $state === $before['tables'][$name], ARRAY_FILTER_USE_BOTH)),
        'all_original_rows_unchanged' => true, 'stored_files_unchanged' => count($now['stored_files']), 'new_sources' => $sourceExtra,
        'new_pending_discoveries' => $new->count(), 'new_initial_revisions' => $revisionCount, 'persistent_gates_disabled' => true]);
};
$verify($current);
if ($mode === '--collect') {
    // Human task authorization is Phase 5F; this marker prevents accidental repeat live requests.
    if (file_exists($path.'/live-attempt.json') || ! file_exists($path.'/isolated-tests-passed.json') || ! file_exists($path.'/backup-verified.json')) {
        throw new RuntimeException('Live attempt already made or prerequisites missing.');
    }
    $write('live-attempt.json', ['at' => now()->toIso8601String(), 'url' => WadifaInfoNormalizer::URL, 'limit' => 100, 'scope' => 'one local metadata GET']);
    $source = ConcoursAnnouncementSource::firstOrCreate(['key' => WadifaInfoNormalizer::KEY], config('concours_discovery.sources.'.WadifaInfoNormalizer::KEY));
    $source->update(['enabled' => true]);
    config(['concours_discovery.automation_enabled' => true, 'concours_discovery.authorized_feed_urls' => [WadifaInfoNormalizer::URL]]);
    $exit = Artisan::call('concours:discover', ['--source' => WadifaInfoNormalizer::KEY]);
    $output = Artisan::output();
    config(['concours_discovery.automation_enabled' => false, 'concours_discovery.authorized_feed_urls' => []]);
    $cached = Cache::get('concours-wadifa-response:'.hash('sha256', WadifaInfoNormalizer::URL));
    $transport = Cache::get('concours-wadifa-response:'.hash('sha256', WadifaInfoNormalizer::URL).':status');
    $countsBefore = [ConcoursDiscovery::count(), DB::table('concours_discovery_revisions')->count()];
    if ($exit === 0 && is_string($cached)) {
        // Offline payload replay exercises actual application identity handling without a second GET.
        app(ConcoursDiscoveryService::class)->captureFeed($source, app(WadifaInfoNormalizer::class)->parse($cached));
    }
    $countsAfter = [ConcoursDiscovery::count(), DB::table('concours_discovery_revisions')->count()];
    if ($countsBefore !== $countsAfter) {
        throw new RuntimeException('Replay duplicates/revisions detected.');
    }
    $write('live-check.json', ['exit' => $exit, 'output' => trim($output), 'transport' => $transport,
        'offline_replay_performed' => $exit === 0 && is_string($cached), 'offline_replay_added_records' => $countsAfter[0] - $countsBefore[0], 'offline_replay_added_revisions' => $countsAfter[1] - $countsBefore[1]]);
    echo $output;
    if ($exit !== 0) {
        exit($exit);
    }
}
if ($mode === '--api' || $mode === '--session') {
    $token = auth('api')->setTTL(30)->login(User::where('role', 'admin')->orderBy('id')->firstOrFail());
    if ($mode === '--session') {
        $tokenPath = storage_path('framework/phase5f-admin-token');
        file_put_contents($tokenPath, $token);
        chmod($tokenPath, 0600);
        echo "Temporary local admin browser session prepared.\n";
        exit;
    }
    $kernel = app(Illuminate\Contracts\Http\Kernel::class);
    $responses = [];
    $source = ConcoursAnnouncementSource::where('key', WadifaInfoNormalizer::KEY)->firstOrFail();
    foreach (['sources', 'discoveries?source_id='.$source->id.'&per_page=50'] as $route) {
        $request = Request::create('/api/v1/admin/concours-discovery/'.$route, 'GET', server: ['HTTP_AUTHORIZATION' => 'Bearer '.$token, 'HTTP_ACCEPT' => 'application/json']);
        $response = $kernel->handle($request);
        if ($response->getStatusCode() !== 200) {
            throw new RuntimeException('Actual admin API HTTP '.$response->getStatusCode());
        }
        $responses[$route] = json_decode($response->getContent(), true, 64, JSON_THROW_ON_ERROR);
        $kernel->terminate($request, $response);
    }
    $firstKey = 'discoveries?source_id='.$source->id.'&per_page=50';
    $all = $responses[$firstKey]['data']['items'];
    $lastPage = $responses[$firstKey]['data']['meta']['last_page'];
    for ($page = 2; $page <= $lastPage; $page++) {
        $request = Request::create('/api/v1/admin/concours-discovery/'.$firstKey.'&page='.$page, 'GET', server: ['HTTP_AUTHORIZATION' => 'Bearer '.$token, 'HTTP_ACCEPT' => 'application/json']);
        $response = $kernel->handle($request);
        if ($response->getStatusCode() !== 200) {
            throw new RuntimeException('Admin pagination failed.');
        }
        $payload = json_decode($response->getContent(), true, 64, JSON_THROW_ON_ERROR);
        $all = array_merge($all, $payload['data']['items']);
        $kernel->terminate($request, $response);
    }
    $ids = $source->discoveries()->orderByDesc('first_seen_at')->orderByDesc('id')->pluck('id')->all();
    if (array_column($all, 'id') !== $ids) {
        throw new RuntimeException('Actual database/API record identities differ.');
    }
    $write('admin-api.json', ['http_status' => 200, 'responses' => $responses, 'discoveries' => ['items' => $all, 'total' => count($all), 'pages' => $lastPage], 'database_ids_match' => true]);
    echo "Actual authenticated admin API HTTP 200.\n";
}
$after = $snapshot(DB::connection());
$verify($after);
$write('after.json', $after);
echo "All original rows and stored files preserved; only bounded Wadifa source/metadata additions allowed.\n";
