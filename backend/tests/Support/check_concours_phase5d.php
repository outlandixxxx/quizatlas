<?php

// Local one-shot pilot and read-only preservation/API evidence. Never migrates or publishes.
use App\Models\ConcoursAnnouncementSource;
use App\Models\User;
use App\Services\ConcoursDiscovery\FactualMetadataPolicy;
use Illuminate\Contracts\Console\Kernel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
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
$directory = base_path('artifacts/concours-phase5d');
$write = fn ($name, $data) => file_put_contents($directory.'/'.$name, json_encode($data, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR | JSON_UNESCAPED_UNICODE)."\n");
$mode = $argv[1] ?? '--verify';
$snapshot = function (string $connection = 'pgsql'): array {
    $db = DB::connection($connection);
    $db->beginTransaction();
    $db->statement('SET TRANSACTION ISOLATION LEVEL REPEATABLE READ, READ ONLY');
    try {
        $tables = [];
        foreach ($db->table('pg_tables')->where('schemaname', 'public')->orderBy('tablename')->pluck('tablename') as $table) {
            $columns = $db->table('information_schema.columns')->where('table_schema', 'public')->where('table_name', $table)->orderBy('ordinal_position')->get(['column_name', 'data_type', 'udt_name', 'is_nullable', 'column_default', 'character_maximum_length', 'numeric_precision', 'numeric_scale']);
            $hash = hash_init('sha256');
            $count = 0;
            foreach ($db->table('public.'.$table.' as t')->selectRaw('to_jsonb(t)::text as row')->orderByRaw('to_jsonb(t)::text')->cursor() as $row) {
                hash_update($hash, $row->row."\n");
                $count++;
            }
            $tables[$table] = ['rows' => $count, 'schema_sha256' => hash('sha256', $columns->toJson()), 'sha256' => hash_final($hash)];
        }
        $sources = $db->table('concours_announcement_sources')->orderBy('id')->get()->keyBy('id')->map(fn ($row) => (array) $row)->toArray();
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

    return ['tables' => $tables, 'sources' => $sources, 'stored_files' => $files];
};
$assertGates = function () {
    if (config('concours_discovery.automation_enabled') || config('concours_discovery.authorized_feed_urls') !== []
        || config('concours_notifications.enabled') || config('concours_notifications.push_enabled')) {
        throw new RuntimeException('Persistent discovery/notification/push gates must remain off.');
    }
};
$assertGates();
if ($mode === '--baseline') {
    if (file_exists($directory.'/before.json')) {
        throw new RuntimeException('Refusing to overwrite baseline.');
    }
    $backup = json_decode(file_get_contents($directory.'/backup.json'), true, 512, JSON_THROW_ON_ERROR);
    config(['database.connections.phase5d_restore' => array_replace(config('database.connections.pgsql'), ['database' => $backup['restored_database']])]);
    $before = $snapshot();
    if ($snapshot('phase5d_restore') !== $before) {
        throw new RuntimeException('Restored backup differs from application database/storage.');
    }
    $write('before.json', $before);
    echo 'Restored backup matches all '.count($before['tables'])." tables; baseline saved.\n";
    exit;
}
$before = json_decode(file_get_contents($directory.'/before.json'), true, 512, JSON_THROW_ON_ERROR);
if ($mode === '--collect') {
    if ($snapshot() !== $before) {
        throw new RuntimeException('Application changed since backup; refusing writes.');
    }
    $review = config('concours_discovery.factual_metadata_reviews.alwadifa-maroc');
    $candidate = ConcoursAnnouncementSource::where('key', 'alwadifa-maroc')->firstOrFail();
    $candidate->fill(['enabled' => true, 'permission_status' => 'allowed', 'permission_evidence' => $review['evidence'], 'permission_checked_at' => now()]);
    if (! app(FactualMetadataPolicy::class)->eligible($candidate)) {
        throw new RuntimeException('The dated narrow assessment is not eligible.');
    }
    $marker = @fopen($directory.'/live-attempt.json', 'x');
    if (! $marker) {
        throw new RuntimeException('One-shot attempt already recorded; no silent repeat.');
    }
    fwrite($marker, json_encode(['started_at_utc' => gmdate(DATE_ATOM), 'source' => $candidate->key, 'maximum_requests' => 1])."\n");
    fclose($marker);
    // Runtime-only activation; normal web/scheduler/CLI processes keep their gates off.
    config(['concours_discovery.automation_enabled' => true, 'concours_discovery.authorized_feed_urls' => [$candidate->listing_url]]);
    $candidate->version++;
    $candidate->save();
    $transport = [];
    Http::globalResponseMiddleware(function ($response) use (&$transport) {
        $transport[] = ['status' => $response->getStatusCode(), 'content_type' => $response->getHeaderLine('Content-Type'),
            'bytes' => $response->getBody()->getSize()];

        return $response;
    });
    try {
        $exit = Artisan::call('concours:discover', ['--source' => 'alwadifa-maroc']);
        $write('collection.json', ['finished_at_utc' => gmdate(DATE_ATOM), 'exit_code' => $exit, 'command_output' => Artisan::output(),
            'transport' => $transport, 'source' => $candidate->fresh()->toArray(), 'records' => DB::table('concours_discoveries')->count()]);
        echo Artisan::output();
    } finally {
        config(['concours_discovery.automation_enabled' => false, 'concours_discovery.authorized_feed_urls' => []]);
    }
} elseif ($mode === '--api' || $mode === '--session') {
    $admin = User::where('role', 'admin')->orderBy('id')->firstOrFail();
    $token = auth('api')->setTTL(30)->login($admin); // No password or user record write.
    if ($mode === '--session') {
        $path = storage_path('framework/phase5d-admin-token');
        file_put_contents($path, $token);
        chmod($path, 0600);
        echo "Temporary read-only browser session prepared.\n";
        exit;
    }
    $kernel = app(Illuminate\Contracts\Http\Kernel::class);
    $call = function (string $query) use ($token, $kernel) {
        $request = Request::create('/api/v1/admin/concours-discovery/'.$query, 'GET', server: ['HTTP_AUTHORIZATION' => 'Bearer '.$token, 'HTTP_ACCEPT' => 'application/json']);
        $response = $kernel->handle($request);
        if ($response->getStatusCode() !== 200) {
            throw new RuntimeException('Admin API HTTP '.$response->getStatusCode());
        }
        $data = json_decode($response->getContent(), true, 512, JSON_THROW_ON_ERROR);
        $kernel->terminate($request, $response);

        return $data;
    };
    $all = $call('discoveries?per_page=50');
    $ids = DB::table('concours_discoveries')->orderByDesc('first_seen_at')->orderByDesc('id')->pluck('id')->all();
    if (array_column($all['data']['items'], 'id') !== $ids) {
        throw new RuntimeException('API rows differ from database.');
    }
    $checks = ['all' => $all, 'page1' => $call('discoveries?per_page=3&page=1'), 'page2' => $call('discoveries?per_page=3&page=2'),
        'pending' => $call('discoveries?status=pending&source_id=8'), 'academic' => $call('discoveries?candidate_category=academic'),
        'search' => $call('discoveries?q='.urlencode('réf.')), 'sources' => $call('sources')];
    foreach ($all['data']['items'] as $item) {
        $checks['review_'.$item['id']] = ['matches' => $call('discoveries/'.$item['id'].'/matches'), 'revisions' => $call('discoveries/'.$item['id'].'/revisions')];
    }
    $write('admin-api.json', ['http_status' => 200, 'database_ids_match' => true, 'checks' => $checks]);
    echo 'Actual authenticated admin API matched '.count($ids)." database records.\n";
} elseif ($mode !== '--verify') {
    throw new RuntimeException('Use --baseline, --collect, --verify, --api or --session.');
}
$after = $snapshot();
$allowed = ['concours_announcement_sources', 'concours_discoveries', 'concours_discovery_revisions'];
foreach ($before['tables'] as $name => $table) {
    if ($after['tables'][$name]['schema_sha256'] !== $table['schema_sha256'] || (! in_array($name, $allowed, true) && $after['tables'][$name] !== $table)) {
        throw new RuntimeException('Unexpected table/schema change: '.$name);
    }
}
if (array_keys($before['tables']) !== array_keys($after['tables']) || $before['stored_files'] !== $after['stored_files']) {
    throw new RuntimeException('Tables or stored files changed unexpectedly.');
}
foreach ($before['sources'] as $id => $source) {
    $current = (array) $after['sources'][$id];
    if ($source['key'] === 'alwadifa-maroc') {
        foreach (['enabled', 'permission_status', 'permission_evidence', 'permission_checked_at', 'last_attempt_at', 'last_success_at', 'last_error', 'version', 'updated_at'] as $field) {
            unset($source[$field], $current[$field]);
        }
    }
    if ($source !== $current) {
        throw new RuntimeException('Unexpected source change: '.$id);
    }
}
if (count($before['sources']) !== count($after['sources']) || $before['tables']['concours_discoveries']['rows'] !== 0 || $before['tables']['concours_discovery_revisions']['rows'] !== 0) {
    throw new RuntimeException('Unexpected initial discoveries or source count.');
}
foreach (DB::table('concours_discoveries')->get() as $row) {
    if ($row->source_id !== 8 || $row->status !== 'pending' || $row->official_url || $row->announcement_id || $row->official_verified_at
        || $row->institution || $row->grade || $row->specialty || $row->session_year || $row->application_deadline
        || ! str_starts_with($row->title, FactualMetadataPolicy::TITLE_PREFIX)) {
        throw new RuntimeException('Unexpected discovery content.');
    }
}
if ($after['tables']['concours_discoveries']['rows'] > 10 || $after['tables']['concours_discovery_revisions']['rows'] !== $after['tables']['concours_discoveries']['rows']) {
    throw new RuntimeException('Unexpected discovery/revision counts.');
}
$write('after.json', $after);
$write('preservation.json', ['unchanged_tables' => count($before['tables']) - count($allowed), 'unchanged_schemas' => count($before['tables']),
    'unchanged_stored_files' => count($after['stored_files']), 'only_expected_source_and_pending_discoveries_changed' => true,
    'persistent_gates_off' => true, 'counts' => array_map(fn ($t) => $t['rows'], $after['tables'])]);
echo "Preservation passed; only the authorized pilot rows may differ.\n";
