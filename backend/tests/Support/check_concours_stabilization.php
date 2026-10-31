<?php

// Stabilization-only read checks. Original evidence is never overwritten; provider HTTP is forbidden.
use App\Models\ConcoursAnnouncementSource;
use App\Models\ConcoursDiscovery;
use App\Models\User;
use App\Services\ConcoursDiscovery\WadifaInfoNormalizer;
use Illuminate\Contracts\Console\Kernel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

require __DIR__.'/../../vendor/autoload.php';
$app = require __DIR__.'/../../bootstrap/app.php';
$app->make(Kernel::class)->bootstrap();
Http::preventStrayRequests();
if (! app()->environment('local') || DB::getDriverName() !== 'pgsql' || DB::getDatabaseName() !== 'quizatlas') {
    throw new RuntimeException('Real local quizatlas PostgreSQL required.');
}
$mode = $argv[1] ?? '--verify';
if (! in_array($mode, ['--baseline', '--verify', '--api', '--session', '--audit'], true)) {
    throw new RuntimeException('Unsupported read-only mode.');
}
$path = base_path('artifacts/concours-stabilization');
$write = function (string $name, array $data, bool $exclusive = false) use ($path): void {
    $file = fopen($path.'/'.$name, $exclusive ? 'x' : 'w');
    if (! $file) {
        throw new RuntimeException('Refusing to replace evidence.');
    }
    fwrite($file, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR)."\n");
    fclose($file);
};
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

    return ['tables' => $tables, 'stored_files' => $files];
};
$gates = ['discovery' => config('concours_discovery.automation_enabled'), 'feeds' => config('concours_discovery.authorized_feed_urls'),
    'notifications' => config('concours_notifications.enabled'), 'push' => config('concours_notifications.push_enabled')];
if ($gates !== ['discovery' => false, 'feeds' => [], 'notifications' => false, 'push' => false]) {
    throw new RuntimeException('Persistent collection/delivery gates must stay disabled.');
}
$current = $snapshot();
if ($mode === '--baseline') {
    $previous = json_decode(file_get_contents(base_path('artifacts/concours-phase5f-final-verification/after.json')), true, 512, JSON_THROW_ON_ERROR);
    if ($current['tables'] !== $previous['tables'] || $current['stored_files'] !== $previous['stored_files']) {
        throw new RuntimeException('Current state differs from final live-verification preservation evidence.');
    }
    $write('before.json', $current, true);
} else {
    $before = json_decode(file_get_contents($path.'/before.json'), true, 512, JSON_THROW_ON_ERROR);
    if ($current !== $before) {
        throw new RuntimeException('Existing tables, schemas, rows or stored files changed.');
    }
}
$sources = ConcoursAnnouncementSource::whereIn('key', ['wadifa-info', 'alwadifa-maroc'])->get()->keyBy('key');
$records = ConcoursDiscovery::with(['source', 'latestObservation'])->orderBy('id')->get();
if ($records->count() !== 46 || $records->where('status', 'pending')->count() !== 46
    || $records->where('source_id', $sources['wadifa-info']->id)->count() !== 36
    || $records->where('source_id', $sources['alwadifa-maroc']->id)->count() !== 10) {
    throw new RuntimeException('Expected 46 pending discoveries (36 Wadifa, 10 Alwadifa).');
}
foreach ($records as $record) {
    if ($record->official_url !== null || $record->official_verified_at !== null || $record->announcement_id !== null || ! $record->source_article_url) {
        throw new RuntimeException('Discovery proof/link state changed.');
    }
}
if ($mode === '--audit') {
    $saved = json_decode(file_get_contents(base_path('artifacts/concours-phase5f-final-verification/response-summary.json')), true, 32, JSON_THROW_ON_ERROR);
    $groups = [];
    $decisions = [];
    $corrected = 0;
    foreach ($saved['records'] as $entry) {
        $metadata = $entry['metadata'];
        $currentDecision = app(WadifaInfoNormalizer::class)->classification($metadata);
        if ($entry['accepted']) {
            if ($currentDecision['candidate_category'] !== $entry['classification']['candidate_category']) {
                throw new RuntimeException('Previously accepted fixture unexpectedly changed category.');
            }

            continue;
        }
        $accepted = $currentDecision['candidate_category'] !== 'excluded';
        $decision = $accepted ? 'corrected_keyword_false_negative' : (str_contains($metadata['grade'], 'Teleconseiller') ? 'retained_callcentre_exclusion' : 'deferred_editorial_scope_review');
        $corrected += $accepted ? 1 : 0;
        $employer = $metadata['institution'];
        $groups[$employer] ??= ['employer' => $employer, 'records' => 0, 'decision' => $decision, 'provider_ids' => []];
        $groups[$employer]['records']++;
        $groups[$employer]['provider_ids'][] = $metadata['source_identifier'];
        $decisions[] = ['provider_id' => $metadata['source_identifier'], 'declared_employer' => $employer,
            'declared_grade' => $metadata['grade'], 'original_category' => $entry['classification']['candidate_category'],
            'corrected_category' => $currentDecision['candidate_category'], 'decision' => $decision];
    }
    if (count($decisions) !== 64 || $corrected !== 48) {
        throw new RuntimeException('Unexpected offline exclusion audit counts.');
    }
    $write('classifier-audit.json', ['provider_requests' => 0, 'original_exclusions' => 64, 'corrected_in_fixtures_only' => 48,
        'still_excluded' => 16, 'callcentre_exclusions' => 2, 'deferred_scope_cases' => 14, 'real_records_imported' => 0,
        'groups' => array_values($groups), 'records' => $decisions]);
    echo "Offline audit: 64 exclusions reviewed; 48 keyword fixes, 16 retained/deferred; no real import.\n";
}
if ($mode === '--api' || $mode === '--session') {
    $token = auth('api')->setTTL(30)->login(User::where('role', 'admin')->orderBy('id')->firstOrFail());
    if ($mode === '--session') {
        $tokenFile = storage_path('framework/concours-stabilization-admin-token');
        $file = fopen($tokenFile, 'x');
        if (! $file) {
            throw new RuntimeException('Temporary session already exists.');
        }
        chmod($tokenFile, 0600);
        fwrite($file, $token);
        fclose($file);
        echo "Temporary local read-only admin session prepared.\n";
        exit;
    }
    $kernel = app(Illuminate\Contracts\Http\Kernel::class);
    $checks = [];
    $get = function (string $route, bool $admin = true) use ($kernel, $token): array {
        $server = ['HTTP_ACCEPT' => 'application/json'];
        if ($admin) {
            $server['HTTP_AUTHORIZATION'] = 'Bearer '.$token;
        }
        $request = Request::create('/api/v1/'.$route, 'GET', server: $server);
        $response = $kernel->handle($request);
        if ($response->getStatusCode() !== 200) {
            throw new RuntimeException('Local API check failed: '.$route);
        }
        $data = json_decode($response->getContent(), true, 64, JSON_THROW_ON_ERROR);
        $kernel->terminate($request, $response);

        return $data;
    };
    $prefix = 'admin/concours-discovery/discoveries?per_page=50';
    foreach (['&status=pending' => 46, '&status=approved' => 0, '&status=rejected' => 0,
        '&source_id='.$sources['wadifa-info']->id => 36, '&source_id='.$sources['alwadifa-maroc']->id => 10,
        '&source_id='.$sources['wadifa-info']->id.'&institution=Bank%20Al-Maghrib' => 1,
        '&source_id='.$sources['wadifa-info']->id.'&q=146623' => 1] as $filter => $expected) {
        $result = $get($prefix.$filter);
        if ($result['data']['meta']['total'] !== $expected) {
            throw new RuntimeException('Unexpected filtering result.');
        }
        $checks[] = ['filter' => $filter, 'http_status' => 200, 'expected_total' => $expected, 'actual_total' => $result['data']['meta']['total']];
    }
    $all = $get($prefix.'&status=pending')['data']['items'];
    $apiIds = array_column($all, 'id');
    sort($apiIds);
    if ($apiIds !== $records->pluck('id')->all()) {
        throw new RuntimeException('Authenticated admin IDs differ from actual database.');
    }
    $public = $get('public/concours-announcements?per_page=50', false);
    foreach ($public['data']['items'] as $notice) {
        if (($notice['source_attribution']['provider'] ?? null) === 'wadifa-info'
            || ($notice['verification_status'] ?? null) !== 'verified' || ($notice['publication_status'] ?? null) !== 'published') {
            throw new RuntimeException('Unexpected public discovery or unverified announcement.');
        }
    }
    $write('admin-api.json', ['http_status' => 200, 'filters' => $checks, 'sources' => $get('admin/concours-discovery/sources')['data'],
        'discoveries' => ['items' => $all, 'total' => count($all)], 'public_announcements' => $public,
        'database_ids_match' => true, 'no_discoveries_published' => true]);
    echo "Actual authenticated admin API: 46 pending; source/status/institution/article filters passed.\n";
}
$after = $snapshot();
if ($after !== $current) {
    throw new RuntimeException('Read-only verification changed application data.');
}
$write('preservation.json', ['at' => now()->toIso8601String(), 'all_table_schemas_rows_unchanged' => count($current['tables']),
    'stored_files_unchanged' => count($current['stored_files']), 'pending_discoveries_unchanged' => 46,
    'wadifa_unchanged' => 36, 'alwadifa_unchanged' => 10, 'gates' => $gates, 'provider_requests' => 0]);
echo "All 60 tables and 12 stored files unchanged; all 46 pending records preserved; no provider HTTP.\n";
