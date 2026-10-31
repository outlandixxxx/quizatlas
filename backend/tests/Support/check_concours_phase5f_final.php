<?php

// Separately authorized final verification. Never removes or rewrites the original attempt.
use App\Models\ConcoursAnnouncementSource;
use App\Models\User;
use App\Services\ConcoursDiscovery\AuthorizedFeedClient;
use App\Services\ConcoursDiscovery\WadifaInfoNormalizer;
use Illuminate\Contracts\Console\Kernel;
use Illuminate\Database\Connection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\RateLimiter;

require __DIR__.'/../../vendor/autoload.php';
$app = require __DIR__.'/../../bootstrap/app.php';
$app->make(Kernel::class)->bootstrap();
set_exception_handler(function (Throwable $error) {
    fwrite(STDERR, AuthorizedFeedClient::errorCode($error).PHP_EOL);
    exit(1);
});
function ensureFinal(bool $condition, string $code): void
{
    if (! $condition) {
        throw new RuntimeException($code);
    }
}
ensureFinal(app()->environment('local') && DB::getDriverName() === 'pgsql' && DB::getDatabaseName() === 'quizatlas', 'local_database_required');
$path = base_path('artifacts/concours-phase5f-final-verification');
$oldPath = base_path('artifacts/concours-phase5f');
$mode = $argv[1] ?? '--verify';
ensureFinal(in_array($mode, ['--baseline', '--preflight', '--collect', '--verify', '--api', '--session'], true), 'unsupported_mode');
$write = function (string $name, array $data, bool $exclusive = false) use ($path): void {
    $file = fopen($path.'/'.$name, $exclusive ? 'x' : 'w');
    ensureFinal($file !== false, 'evidence_already_exists');
    fwrite($file, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR)."\n");
    fclose($file);
};
$read = fn (string $name) => json_decode(file_get_contents($path.'/'.$name), true, 512, JSON_THROW_ON_ERROR);
foreach ($read('original-evidence.json')['files'] as $relative => $hash) {
    // Docker mounts backend alone. The complete manifest, including frontend evidence,
    // is separately verified on the host before/after this workflow.
    if (str_starts_with($relative, 'backend/')) {
        $file = base_path(substr($relative, strlen('backend/')));
        ensureFinal(is_file($file) && hash_file('sha256', $file) === $hash, 'original_evidence_changed');
    }
}
ensureFinal(file_exists($oldPath.'/live-attempt.json') && file_exists($oldPath.'/live-check.json'), 'original_attempt_required');
$gates = ['discovery' => config('concours_discovery.automation_enabled'), 'feeds' => config('concours_discovery.authorized_feed_urls'),
    'notifications' => config('concours_notifications.enabled'), 'push' => config('concours_notifications.push_enabled')];
ensureFinal($gates === ['discovery' => false, 'feeds' => [], 'notifications' => false, 'push' => false], 'persistent_gates_must_be_disabled');
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
$source = ConcoursAnnouncementSource::where('key', WadifaInfoNormalizer::KEY)->firstOrFail();
$settings = fn () => collect($source->fresh()->getRawOriginal())->except(['last_attempt_at', 'last_success_at', 'last_error', 'updated_at'])->all();
$current = $snapshot(DB::connection());
if ($mode === '--baseline') {
    ensureFinal(! file_exists($path.'/before.json') && ! file_exists($path.'/live-attempt.json'), 'baseline_already_exists');
    $previous = json_decode(file_get_contents($oldPath.'/after.json'), true, 512, JSON_THROW_ON_ERROR);
    ensureFinal($previous === $current, 'previous_phase_preservation_mismatch');
    $connection = config('database.connections.'.config('database.default'));
    $connection['database'] = 'maroquiz_phase5f_final_20261028';
    $connection['url'] = null;
    config(['database.connections.phase5f_final_restore' => $connection]);
    ensureFinal($snapshot(DB::connection('phase5f_final_restore')) === $current, 'restored_backup_mismatch');
    ensureFinal($source->discoveries()->count() === 0, 'unexpected_existing_provider_records');
    $write('before.json', $current, true);
    $write('source-settings.json', $settings(), true);
    $write('backup-verified.json', ['at' => now()->toIso8601String(), 'restored_database' => $connection['database'],
        'all_tables_and_rows_match' => count($current['tables']), 'stored_files' => count($current['stored_files']), 'matches_original_phase5f_after' => true], true);
    echo "Fresh separate restored backup matches all tables/rows and prior Phase 5F evidence.\n";
    exit;
}
$before = $read('before.json');
$verify = function (array $now) use ($before, $mutable, $source, $settings, $read, $write): void {
    ensureFinal(array_keys($before['tables']) === array_keys($now['tables']) && $before['stored_files'] === $now['stored_files'], 'schema_or_stored_files_changed');
    foreach ($before['tables'] as $table => $state) {
        ensureFinal($state['schema_sha256'] === $now['tables'][$table]['schema_sha256'], 'schema_changed');
        if (! in_array($table, $mutable, true)) {
            ensureFinal($state === $now['tables'][$table], 'preexisting_table_changed');
        }
        foreach ($before['original_rows'][$table] ?? [] as $id => $hash) {
            if ($table === 'concours_announcement_sources' && (int) $id === $source->id) {
                continue;
            }
            ensureFinal(($now['original_rows'][$table][$id] ?? null) === $hash, 'preexisting_row_changed');
        }
    }
    ensureFinal($settings() === $read('source-settings.json'), 'source_configuration_changed');
    ensureFinal($now['tables']['concours_announcement_sources']['rows'] === $before['tables']['concours_announcement_sources']['rows'], 'unexpected_source_insert');
    $records = $source->discoveries()->with(['latestObservation'])->get();
    ensureFinal($records->count() <= 100 && $records->count() === $now['tables']['concours_discoveries']['rows'] - $before['tables']['concours_discoveries']['rows'], 'unexpected_discovery_insert');
    $identities = [];
    $urls = [];
    foreach ($records as $record) {
        ensureFinal($record->status === 'pending' && $record->version === 1 && $record->revisions()->count() === 1
            && $record->official_url === null && $record->official_verified_at === null && $record->announcement_id === null
            && $record->session_year === null && $record->concours_id === null, 'unexpected_review_revision_or_announcement');
        $provider = $record->provider_metadata;
        ensureFinal($provider['official_link_verified'] === false && $provider['attribution'] === WadifaInfoNormalizer::credit($record->source_article_url), 'unverified_link_or_credit_changed');
        ensureFinal(! isset($identities[$record->identity_hash]) && ! isset($urls[$record->normalized_url]), 'duplicate_discovery');
        $identities[$record->identity_hash] = true;
        $urls[$record->normalized_url] = true;
    }
    ensureFinal($records->count() === $now['tables']['concours_discovery_revisions']['rows'] - $before['tables']['concours_discovery_revisions']['rows'], 'unexpected_revision_insert');
    $alwadifa = ConcoursAnnouncementSource::where('key', 'alwadifa-maroc')->firstOrFail();
    ensureFinal($alwadifa->discoveries()->count() === 10, 'alwadifa_count_changed');
    $write('preservation.json', ['at' => now()->toIso8601String(), 'unchanged_schemas' => count($now['tables']),
        'fully_unchanged_tables' => count(array_filter($now['tables'], fn ($state, $name) => $state === $before['tables'][$name], ARRAY_FILTER_USE_BOTH)),
        'all_preexisting_rows_preserved_except_wadifa_attempt_status' => true, 'source_configuration_unchanged' => true,
        'stored_files_unchanged' => count($now['stored_files']), 'alwadifa_records_unchanged' => 10,
        'new_pending_records' => $records->count(), 'new_initial_revisions' => $records->count(), 'duplicates' => 0,
        'new_announcements' => 0, 'persistent_gates_disabled' => true]);
};
$verify($current);
if (in_array($mode, ['--preflight', '--collect'], true)) {
    ensureFinal(! file_exists($path.'/live-attempt.json'), 'followup_attempt_already_recorded');
    ensureFinal($source->last_attempt_at === null || $source->last_attempt_at->addMinutes($source->check_interval_minutes)->isPast(), 'source_interval_not_elapsed');
    $key = 'concours-wadifa-response:'.hash('sha256', WadifaInfoNormalizer::URL);
    ensureFinal(Cache::get($key) === null && Cache::get($key.':status') === null, 'provider_cache_retained');
    ensureFinal(! RateLimiter::tooManyAttempts('concours-wadifa-host:www.wadifa-info.com', 1)
        && ! RateLimiter::tooManyAttempts('concours-discovery-host:www.wadifa-info.com', 1), 'rate_limit_active');
    foreach (['concours-wadifa-http' => 30, 'concours-discovery-command' => 600] as $name => $seconds) {
        $lock = Cache::lock($name, $seconds);
        ensureFinal($lock->get(), 'collection_lock_active');
        $lock->release();
    }
    $write('preflight.json', ['at' => now()->toIso8601String(), 'url' => WadifaInfoNormalizer::URL,
        'previous_attempt_at' => $source->last_attempt_at?->toIso8601String(), 'source_interval_minutes' => $source->check_interval_minutes,
        'interval_elapsed' => true, 'no_retained_cache' => true, 'host_rate_limit_clear' => true,
        'persistent_gates_disabled' => true, 'original_evidence_intact' => true]);
    if ($mode === '--preflight') {
        echo "Preflight passed; no HTTP request made.\n";
        exit;
    }
    $tests = $read('tests-passed.json');
    ensureFinal($tests['passed'] === true && file_exists($path.'/backup-verified.json'), 'verification_prerequisites_missing');
    foreach ($tests['source_sha256'] as $relative => $hash) {
        ensureFinal(hash_file('sha256', base_path(substr($relative, strlen('backend/')))) === $hash, 'tested_implementation_changed');
    }
    config(['concours_discovery.authorized_feed_urls' => [WadifaInfoNormalizer::URL]]);
    ensureFinal(app(AuthorizedFeedClient::class)->eligible($source), 'source_access_not_permitted');
    config(['concours_discovery.automation_enabled' => true]);
    $requests = 0;
    $transport = null;
    $items = null;
    Http::globalMiddleware(function (callable $handler) use (&$requests, &$transport, &$items, $write) {
        return function ($request, array $options) use ($handler, &$requests, &$transport, &$items, $write) {
            ensureFinal(++$requests === 1 && $request->getMethod() === 'GET' && (string) $request->getUri() === WadifaInfoNormalizer::URL, 'single_exact_request_only');
            ensureFinal(! $request->hasHeader('Authorization') && ! $request->hasHeader('Cookie') && ($options['allow_redirects'] ?? null) === false, 'unexpected_request_credentials_or_redirects');
            $originalHeaders = $options['on_headers'];
            $options['on_headers'] = function ($response) use ($originalHeaders, &$transport, $write) {
                $headers = [];
                foreach (['Content-Type', 'Cache-Control', 'Date', 'Age', 'Expires', 'Last-Modified', 'ETag', 'Vary', 'Retry-After'] as $header) {
                    $value = $response->getHeaderLine($header);
                    $headers[strtolower($header)] = $value === '' ? null : substr(preg_replace('/[\x00-\x1f\x7f]/', '', $value), 0, 512);
                }
                $transport = ['at' => now()->toIso8601String(), 'http_status' => $response->getStatusCode(), 'headers' => $headers];
                $write('transport-headers.json', $transport, true);
                $originalHeaders($response);
            };

            return $handler($request, $options)->then(function ($response) use (&$items, $write) {
                if (preg_match('/(?:^|,)\s*no-store(?:\s*(?:,|$))/', strtolower($response->getHeaderLine('Cache-Control')))) {
                    // Let the existing client stop on no-store without persisting response metadata.
                    return $response;
                }
                $body = (string) $response->getBody();
                ensureFinal(strlen($body) <= 1048576, 'response_limit_exceeded');
                $envelope = json_decode($body, true, 32, JSON_THROW_ON_ERROR);
                $checkKeys = function (array $value) use (&$checkKeys): void {
                    foreach ($value as $key => $part) {
                        ensureFinal(! in_array(strtolower((string) $key), ['body', 'content', 'description', 'html', 'article_body', 'password', 'token', 'credentials'], true), 'unexpected_response_content');
                        if (is_array($part)) {
                            $checkKeys($part);
                        }
                    }
                };
                $checkKeys($envelope);
                $items = app(WadifaInfoNormalizer::class)->parse($body);
                $selected = [];
                foreach ($items as $position => $item) {
                    $classification = app(WadifaInfoNormalizer::class)->classification($item);
                    $raw = $envelope['items'][$position];
                    $adjusted = [];
                    foreach (['employer' => $item['institution'], 'grade' => $item['grade'], 'published' => $item['publication_date'],
                        'deadline' => $item['application_deadline'], 'posts' => $item['provider_metadata']['positions'],
                        'official_notice' => $item['provider_metadata']['reported_official_url']] as $field => $normalized) {
                        if (($raw[$field] ?? null) !== $normalized) {
                            $adjusted[] = $field;
                        }
                    }
                    $selected[] = ['metadata' => $item, 'classification' => $classification,
                        'accepted' => $classification['candidate_category'] !== 'excluded', 'normalized_optional_fields' => $adjusted];
                }
                $write('response-summary.json', ['bytes' => strlen($body), 'sha256' => hash('sha256', $body), 'parsed_records' => count($items), 'records' => $selected], true);
                $response->getBody()->rewind();

                return $response;
            });
        };
    });
    $write('live-attempt.json', ['at' => now()->toIso8601String(), 'authorization' => 'Explicit user request: MaroQuiz Phase 5F Final Live Verification, 2026-10-28; ONE additional bounded API request',
        'previous_marker_sha256' => hash_file('sha256', $oldPath.'/live-attempt.json'), 'url' => WadifaInfoNormalizer::URL,
        'max_requests' => 1, 'max_records' => 100, 'max_bytes' => 1048576, 'retries' => 0,
        'workflow' => 'existing concours:discover --source=wadifa-info; process-local gates only'], true);
    try {
        $exit = Artisan::call('concours:discover', ['--source' => WadifaInfoNormalizer::KEY]);
        $output = trim(Artisan::output());
    } finally {
        config(['concours_discovery.automation_enabled' => false, 'concours_discovery.authorized_feed_urls' => []]);
    }
    $source->refresh();
    $actual = $source->discoveries()->count();
    $selected = $items === null ? [] : array_filter($items, fn ($item) => app(WadifaInfoNormalizer::class)->classification($item)['candidate_category'] !== 'excluded');
    $write('live-check.json', ['at' => now()->toIso8601String(), 'exit' => $exit, 'output' => $output, 'network_requests' => $requests,
        'transport' => $transport, 'cache' => Cache::get($key.':status'), 'parsed_records' => $items === null ? null : count($items),
        'accepted_records' => $items === null ? null : count($selected), 'rejected_records' => $items === null ? null : count($items) - count($selected),
        'pending_records_imported' => $actual, 'blocker' => $source->last_error, 'status' => $exit === 0 && $requests === 1 && $source->last_success_at ? 'SUCCESS' : 'BLOCKED',
        'additional_request_allowed' => false, 'cached_payload_replayed' => false], true);
    $verify($snapshot(DB::connection()));
    if ($exit === 0) {
        ensureFinal($requests === 1 && $items !== null && $actual === count($selected) && $source->last_error === null, 'collection_did_not_complete');
        foreach ($selected as $item) {
            $record = $source->discoveries()->where('source_identifier', $item['source_identifier'])->with('latestObservation')->firstOrFail();
            ensureFinal($record->institution === $item['institution'] && $record->grade === $item['grade']
                && $record->publication_date?->format('Y-m-d') === $item['publication_date']
                && $record->application_deadline?->format('Y-m-d') === $item['application_deadline']
                && $record->source_article_url === $item['source_article_url'] && $record->provider_metadata === $item['provider_metadata'], 'provider_field_mapping_mismatch');
        }
        $write('field-verification.json', ['all_imported_fields_match_normalized_live_metadata' => true, 'verified_records' => $actual,
            'employer_grade_dates_are_provider_declared' => true, 'official_links_remain_unverified' => true], true);
    }
    echo $output.PHP_EOL;
    echo 'Network requests: '.$requests.'; imported pending: '.$actual.PHP_EOL;
    if ($exit !== 0) {
        exit($exit);
    }
}
if ($mode === '--api' || $mode === '--session') {
    $token = auth('api')->setTTL(30)->login(User::where('role', 'admin')->orderBy('id')->firstOrFail());
    if ($mode === '--session') {
        $tokenPath = storage_path('framework/phase5f-final-admin-token');
        $file = fopen($tokenPath, 'x');
        ensureFinal($file !== false, 'temporary_session_already_exists');
        chmod($tokenPath, 0600);
        fwrite($file, $token);
        fclose($file);
        echo "Temporary local browser session prepared; no credentials in audit evidence.\n";
        exit;
    }
    $kernel = app(Illuminate\Contracts\Http\Kernel::class);
    $get = function ($route) use ($kernel, $token): array {
        $request = Request::create('/api/v1/admin/concours-discovery/'.$route, 'GET', server: ['HTTP_AUTHORIZATION' => 'Bearer '.$token, 'HTTP_ACCEPT' => 'application/json']);
        $response = $kernel->handle($request);
        ensureFinal($response->getStatusCode() === 200, 'admin_api_failed');
        $payload = json_decode($response->getContent(), true, 64, JSON_THROW_ON_ERROR);
        $kernel->terminate($request, $response);

        return $payload;
    };
    $responses = ['sources' => $get('sources')];
    $route = 'discoveries?source_id='.$source->id.'&status=pending&per_page=50';
    $first = $get($route);
    $responses[$route] = $first;
    $all = $first['data']['items'];
    $lastPage = $first['data']['meta']['last_page'];
    for ($page = 2; $page <= $lastPage; $page++) {
        $all = array_merge($all, $get($route.'&page='.$page)['data']['items']);
    }
    ensureFinal(array_column($all, 'id') === $source->discoveries()->orderByDesc('first_seen_at')->orderByDesc('id')->pluck('id')->all(), 'admin_api_database_mismatch');
    $write('admin-api.json', ['http_status' => 200, 'responses' => $responses,
        'discoveries' => ['items' => $all, 'total' => count($all), 'pages' => $lastPage], 'database_ids_match' => true]);
    echo 'Actual authenticated admin API HTTP 200; pending records: '.count($all).PHP_EOL;
}
$after = $snapshot(DB::connection());
$verify($after);
$write('after.json', $after);
echo "Original evidence, existing rows/files, Alwadifa history and persistent gates preserved.\n";
