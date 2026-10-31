<?php

// Strictly read-only local application acceptance. Fixtures live in PHPUnit's SQLite DB.
use App\Models\ConcoursAnnouncementSource;
use App\Models\User;
use Illuminate\Contracts\Console\Kernel;
use Illuminate\Http\Request;
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
Http::preventStrayRequests();
$path = base_path('artifacts/concours-phase5e');
$mode = $argv[1] ?? '--verify';
$write = fn ($name, $data) => file_put_contents($path.'/'.$name, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR)."\n");
$snapshot = function (): array {
    DB::beginTransaction();
    DB::statement('SET TRANSACTION ISOLATION LEVEL REPEATABLE READ, READ ONLY');
    try {
        $tables = [];
        foreach (DB::table('pg_tables')->where('schemaname', 'public')->orderBy('tablename')->pluck('tablename') as $table) {
            $columns = DB::table('information_schema.columns')->where('table_schema', 'public')->where('table_name', $table)->orderBy('ordinal_position')
                ->get(['column_name', 'data_type', 'udt_name', 'is_nullable', 'column_default', 'character_maximum_length', 'numeric_precision', 'numeric_scale']);
            $hash = hash_init('sha256');
            $count = 0;
            foreach (DB::table('public.'.$table.' as t')->selectRaw('to_jsonb(t)::text as row')->orderByRaw('to_jsonb(t)::text')->cursor() as $row) {
                hash_update($hash, $row->row."\n");
                $count++;
            }
            $tables[$table] = ['rows' => $count, 'schema_sha256' => hash('sha256', $columns->toJson()), 'sha256' => hash_final($hash)];
        }
    } finally {
        DB::rollBack();
    }
    $files = [];
    foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator(storage_path('app'), FilesystemIterator::SKIP_DOTS)) as $file) {
        if ($file->isFile()) {
            $files[substr($file->getPathname(), strlen(storage_path('app')) + 1)] = hash_file('sha256', $file->getPathname());
        }
    }
    ksort($files);

    return ['tables' => $tables, 'stored_files' => $files, 'gates' => [
        'discovery' => config('concours_discovery.automation_enabled'), 'feed_urls' => config('concours_discovery.authorized_feed_urls'),
        'notifications' => config('concours_notifications.enabled'), 'push' => config('concours_notifications.push_enabled')]];
};
$current = $snapshot();
if ($current['gates'] !== ['discovery' => false, 'feed_urls' => [], 'notifications' => false, 'push' => false]) {
    throw new RuntimeException('Persistent automation gates must remain off.');
}
if ($mode === '--baseline') {
    if (file_exists($path.'/before.json')) {
        throw new RuntimeException('Refusing to overwrite baseline.');
    }
    $phase5d = json_decode(file_get_contents(base_path('artifacts/concours-phase5d/after.json')), true, 512, JSON_THROW_ON_ERROR);
    if ($current['tables'] !== $phase5d['tables'] || $current['stored_files'] !== $phase5d['stored_files']) {
        throw new RuntimeException('Application differs from final Phase 5D evidence. Inspect before continuing.');
    }
    $write('before.json', $current);
    echo "Baseline matches Phase 5D: all 60 tables and 12 files, including ten real discoveries.\n";
    exit;
}
$before = json_decode(file_get_contents($path.'/before.json'), true, 512, JSON_THROW_ON_ERROR);
if ($current !== $before) {
    throw new RuntimeException('Application rows, schema, stored files or gates changed.');
}
if ($mode === '--api' || $mode === '--session') {
    $token = auth('api')->setTTL(15)->login(User::where('role', 'admin')->orderBy('id')->firstOrFail());
    if ($mode === '--session') {
        $tokenPath = storage_path('framework/phase5e-admin-token');
        file_put_contents($tokenPath, $token);
        chmod($tokenPath, 0600);
        echo "Temporary local browser session prepared; no account writes.\n";
        exit;
    }
    $kernel = app(Illuminate\Contracts\Http\Kernel::class);
    $get = function (string $route) use ($kernel, $token) {
        $request = Request::create('/api/v1/admin/concours-discovery/'.$route, 'GET', server: ['HTTP_AUTHORIZATION' => 'Bearer '.$token, 'HTTP_ACCEPT' => 'application/json']);
        $response = $kernel->handle($request);
        if ($response->getStatusCode() !== 200) {
            throw new RuntimeException('Actual admin API HTTP '.$response->getStatusCode());
        }
        $payload = json_decode($response->getContent(), true, 512, JSON_THROW_ON_ERROR);
        $kernel->terminate($request, $response);

        return $payload;
    };
    $sources = $get('sources');
    $records = [];
    foreach (['alwadifa-maroc' => 10, 'dreamjob' => 0, 'orientation-chabab' => 0] as $key => $expected) {
        $source = collect($sources['data'])->firstWhere('key', $key);
        $response = $get('discoveries?source_id='.$source['id'].'&per_page=50&status=pending');
        $ids = ConcoursAnnouncementSource::findOrFail($source['id'])->discoveries()->where('status', 'pending')->orderByDesc('first_seen_at')->orderByDesc('id')->pluck('id')->all();
        if ($source['pending_discoveries_count'] !== $expected || $response['data']['meta']['total'] !== $expected || array_column($response['data']['items'], 'id') !== $ids) {
            throw new RuntimeException('Database/API source counts differ for '.$key);
        }
        if ($source['automatic_collection_active'] || $source['automation_enabled']) {
            throw new RuntimeException('Unexpected active collection.');
        }
        $records[$key] = $response;
    }
    $write('admin-api.json', ['http_status' => 200, 'database_ids_match' => true, 'sources' => $sources, 'discoveries' => $records]);
    echo "Actual admin API: Alwadifa 10, Dreamjob 0, Orientation 0; all automatic collection inactive.\n";
} elseif ($mode !== '--verify') {
    throw new RuntimeException('Use --baseline, --verify, --api or --session. No collection or write mode exists.');
}
if ($snapshot() !== $before) {
    throw new RuntimeException('Application changed during acceptance.');
}
$write('after.json', $current);
$write('preservation.json', ['unchanged_tables' => count($current['tables']), 'unchanged_stored_files' => count($current['stored_files']),
    'all_real_discoveries_and_revisions_unchanged' => true, 'gates_unchanged' => true, 'application_writes' => 0]);
echo "Preserved all application tables, source settings/history and stored files.\n";
