<?php

// Exactly one separately authorized Arabic sample. Never imports/enriches application rows.
use App\Models\ConcoursAnnouncementSource;
use App\Services\ConcoursDiscovery\AuthorizedFeedClient;
use App\Services\ConcoursDiscovery\WadifaInfoNormalizer;
use Illuminate\Contracts\Console\Kernel;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\RateLimiter;

require __DIR__.'/../../vendor/autoload.php';
$app = require __DIR__.'/../../bootstrap/app.php';
$app->make(Kernel::class)->bootstrap();
$path = base_path('artifacts/concours-phase5f-bilingual');
$read = fn (string $file) => json_decode(file_get_contents($path.'/'.$file), true, 64, JSON_THROW_ON_ERROR);
$write = function (string $file, array $data, bool $exclusive = false) use ($path): void {
    $stream = fopen($path.'/'.$file, $exclusive ? 'x' : 'w');
    if (! $stream) {
        throw new RuntimeException('verification_record_exists');
    }
    fwrite($stream, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR)."\n");
    fclose($stream);
};
function arabicEnsure(bool $condition, string $code): void
{
    if (! $condition) {
        throw new RuntimeException($code);
    }
}
arabicEnsure(app()->environment('local') && DB::getDriverName() === 'pgsql' && DB::getDatabaseName() === 'quizatlas', 'local_database_required');
$mode = $argv[1] ?? '--preflight';
arabicEnsure(in_array($mode, ['--preflight', '--sample'], true), 'unsupported_mode');
$authorization = $read('authorization.json');
arabicEnsure($authorization['allowed_requests'] === 1 && $authorization['database_discovery_mutations_allowed'] === false
    && $authorization['endpoint'] === WadifaInfoNormalizer::ARABIC_SAMPLE_URL, 'explicit_sample_authorization_required');
$source = ConcoursAnnouncementSource::where('key', WadifaInfoNormalizer::KEY)->firstOrFail();
arabicEnsure($source->check_interval_minutes === 720 && ! config('concours_discovery.automation_enabled')
    && config('concours_discovery.authorized_feed_urls') === [] && ! config('concours_notifications.enabled') && ! config('concours_notifications.push_enabled'), 'persistent_gates_or_interval_changed');
arabicEnsure(! file_exists($path.'/arabic-attempt.json'), 'arabic_attempt_already_recorded');
$original = json_decode(file_get_contents(base_path('artifacts/concours-phase5f-final-verification/live-check.json')), true, 64, JSON_THROW_ON_ERROR);
$earliest = max(strtotime($authorization['not_before']), strtotime($original['cache']['fetched_at']) + $original['cache']['cache_seconds']);
$frenchKey = 'concours-wadifa-response:'.hash('sha256', WadifaInfoNormalizer::URL);
$arabicKey = 'concours-wadifa-response:'.hash('sha256', WadifaInfoNormalizer::ARABIC_SAMPLE_URL);
$eligible = now()->timestamp >= $earliest && Cache::get($frenchKey) === null && Cache::get($arabicKey) === null
    && ! RateLimiter::tooManyAttempts('concours-wadifa-host:www.wadifa-info.com', 1);
$write('arabic-preflight.json', ['at' => now()->toIso8601String(), 'eligible_now' => $eligible,
    'earliest_utc' => gmdate('Y-m-d\TH:i:s\Z', $earliest), 'normal_interval_minutes' => 720,
    'exception' => 'User explicitly authorized one Arabic-only sample after 23:00 UTC; normal interval unchanged.',
    'retained_french_cache_present' => Cache::get($frenchKey) !== null, 'provider_requests' => 0]);
if ($mode === '--preflight') {
    Http::preventStrayRequests();
    echo 'Arabic sample eligible: '.($eligible ? 'yes' : 'no').'; earliest '.gmdate('Y-m-d H:i:s', $earliest)." UTC; no HTTP sent.\n";
    exit;
}
arabicEnsure($eligible, 'arabic_sample_not_due');
$tests = $read('isolated-tests-passed.json');
arabicEnsure($tests['passed'] === true, 'isolated_tests_required');
foreach ($tests['source_sha256'] as $relative => $hash) {
    arabicEnsure(hash_file('sha256', base_path($relative)) === $hash, 'tested_provider_code_changed');
}
$fingerprint = function (): array {
    $hashes = [];
    foreach (['concours_announcement_sources', 'concours_discoveries', 'concours_discovery_revisions', 'concours_announcements', 'concours_announcement_revisions'] as $table) {
        $hash = hash_init('sha256');
        foreach (DB::table($table.' as t')->selectRaw('to_jsonb(t)::text as row')->orderBy('id')->cursor() as $row) {
            hash_update($hash, $row->row."\n");
        }
        $hashes[$table] = hash_final($hash);
    }

    return $hashes;
};
$before = $fingerprint();
$saved = json_decode(file_get_contents(base_path('artifacts/concours-phase5f-final-verification/response-summary.json')), true, 64, JSON_THROW_ON_ERROR);
$frenchIds = array_column(array_column($saved['records'], 'metadata'), 'source_identifier');
$existingIds = DB::table('concours_discoveries')->where('source_id', $source->id)->pluck('source_identifier')->all();
arabicEnsure(count($existingIds) === 36, 'existing_wadifa_count_changed');
$requests = 0;
$headers = null;
$selected = null;
Http::globalMiddleware(function (callable $handler) use (&$requests, &$headers, &$selected, $write, $frenchIds, $existingIds) {
    return function ($request, array $options) use ($handler, &$requests, &$headers, &$selected, $write, $frenchIds, $existingIds) {
        arabicEnsure(++$requests === 1 && $request->getMethod() === 'GET' && (string) $request->getUri() === WadifaInfoNormalizer::ARABIC_SAMPLE_URL
            && ! $request->hasHeader('Authorization') && ! $request->hasHeader('Cookie') && ($options['allow_redirects'] ?? null) === false, 'single_exact_arabic_request_only');
        $validateHeaders = $options['on_headers'];
        $options['on_headers'] = function ($response) use ($validateHeaders, &$headers, $write): void {
            $safe = [];
            foreach (['Content-Type', 'Cache-Control', 'Date', 'Age', 'Expires', 'Last-Modified', 'ETag', 'Vary', 'Retry-After'] as $name) {
                $value = $response->getHeaderLine($name);
                $safe[strtolower($name)] = $value === '' ? null : substr(preg_replace('/[\x00-\x1f\x7f]/', '', $value), 0, 512);
            }
            $headers = ['http_status' => $response->getStatusCode(), 'headers' => $safe];
            $write('arabic-http.json', $headers, true);
            $validateHeaders($response);
        };

        return $handler($request, $options)->then(function ($response) use (&$selected, $write, $frenchIds, $existingIds) {
            if (preg_match('/(?:^|,)\s*no-store(?:\s*(?:,|$))/', strtolower($response->getHeaderLine('Cache-Control')))) {
                return $response;
            }
            $body = (string) $response->getBody();
            $envelope = json_decode($body, true, 32, JSON_THROW_ON_ERROR);
            arabicEnsure(is_array($envelope['items'] ?? null) && count($envelope['items']) <= 5, 'provider_sample_limit_exceeded');
            foreach ($envelope['items'] as $row) {
                arabicEnsure(is_array($row) && array_diff(array_keys($row), ['id', 'employer', 'grade', 'posts', 'published', 'deadline', 'url', 'official_notice']) === [], 'unexpected_provider_content');
            }
            $items = app(WadifaInfoNormalizer::class)->parse($body, 'ar');
            $rows = [];
            foreach ($items as $item) {
                $provider = $item['provider_metadata'];
                $rows[] = ['provider_id' => $item['source_identifier'], 'employer' => $provider['employer'], 'grade' => $provider['grade'],
                    'employer_is_arabic' => $provider['employer_ar'] !== null, 'grade_is_arabic' => $provider['grade_ar'] !== null,
                    'matching_saved_french_id' => in_array($item['source_identifier'], $frenchIds, true),
                    'matching_existing_discovery_id' => in_array($item['source_identifier'], $existingIds, true),
                    'metadata' => $item];
            }
            $selected = ['parsed_records' => count($rows), 'arabic_employers' => count(array_filter($rows, fn ($row) => $row['employer_is_arabic'])),
                'arabic_grades' => count(array_filter($rows, fn ($row) => $row['grade_is_arabic'])),
                'matching_saved_french_ids' => count(array_filter($rows, fn ($row) => $row['matching_saved_french_id'])),
                'matching_existing_ids' => count(array_filter($rows, fn ($row) => $row['matching_existing_discovery_id'])),
                'bytes' => strlen($body), 'sha256' => hash('sha256', $body), 'records' => $rows];
            $write('arabic-sample.json', $selected, true);
            $response->getBody()->rewind();

            return $response;
        });
    };
});
$write('arabic-attempt.json', ['at' => now()->toIso8601String(), 'url' => WadifaInfoNormalizer::ARABIC_SAMPLE_URL, 'max_requests' => 1,
    'max_items' => 5, 'max_bytes' => 1048576, 'retries' => 0, 'authorization_sha256' => hash_file('sha256', $path.'/authorization.json'),
    'scope' => 'Arabic metadata and ID comparison only; no real discovery mutations; source interval exception explicitly authorized'], true);
$error = null;
$transport = [];
config(['concours_discovery.automation_enabled' => true, 'concours_discovery.authorized_feed_urls' => [WadifaInfoNormalizer::URL, WadifaInfoNormalizer::ARABIC_SAMPLE_URL]]);
try {
    app(AuthorizedFeedClient::class)->fetch($source, 'ar', 5);
} catch (Throwable $exception) {
    $error = AuthorizedFeedClient::errorCode($exception);
    for ($cause = $exception, $depth = 0; $cause && $depth < 10; $cause = $cause->getPrevious(), $depth++) {
        if (method_exists($cause, 'getHandlerContext')) {
            $context = $cause->getHandlerContext();
            $transport = array_intersect_key($context, array_flip(['errno', 'http_code', 'connect_time', 'total_time']));
            break;
        }
    }
} finally {
    config(['concours_discovery.automation_enabled' => false, 'concours_discovery.authorized_feed_urls' => []]);
}
$after = $fingerprint();
$write('arabic-result.json', ['at' => now()->toIso8601String(), 'status' => $error === null ? 'SUCCESS' : 'BLOCKED', 'blocker' => $error,
    'network_requests' => $requests, 'http' => $headers, 'transport' => $transport,
    'sample' => $selected ? Arr::except($selected, ['records']) : null,
    'cache' => Cache::get($arabicKey.':status'), 'all_existing_discovery_source_announcement_rows_unchanged' => $before === $after,
    'normal_source_interval_minutes' => $source->fresh()->check_interval_minutes, 'further_live_requests_allowed' => false], true);
arabicEnsure($before === $after, 'application_rows_changed');
echo 'Arabic sample '.($error === null ? 'succeeded' : 'blocked: '.$error).'; requests='.$requests.'; real discoveries unchanged.'.PHP_EOL;
exit($error === null ? 0 : 1);
