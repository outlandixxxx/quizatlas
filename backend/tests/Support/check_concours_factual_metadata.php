<?php

// An opt-in, single-request probe. All records and HTTP-kernel listing checks use
// a new in-memory SQLite database; the application PostgreSQL connection is removed.
use App\Models\ConcoursAnnouncementSource;
use App\Models\ConcoursDiscovery;
use App\Models\User;
use App\Services\ConcoursDiscovery\AuthorizedFeedClient;
use App\Services\ConcoursDiscovery\FeedParser;
use App\Services\ConcoursDiscovery\PublicAddressResolver;
use App\Services\ConcoursDiscoveryService;
use Illuminate\Contracts\Console\Kernel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

$mode = $argv[1] ?? '--fixture';
if (! in_array($mode, ['--fixture', '--live-alwadifa'], true) || count($argv) > 2) {
    throw new RuntimeException('Use --fixture or --live-alwadifa.');
}
foreach (['APP_CONFIG_CACHE', 'APP_ROUTES_CACHE'] as $key) {
    $_ENV[$key] = $_SERVER[$key] = '/tmp/maroquiz-factual-probe-no-cache-'.getmypid().'.php';
}
require __DIR__.'/../../vendor/autoload.php';
$app = require __DIR__.'/../../bootstrap/app.php';
$app->make(Kernel::class)->bootstrap();
if (! app()->environment('local', 'testing')) {
    throw new RuntimeException('Restricted to local/testing environments.');
}
config(['app.env' => 'testing', 'database.default' => 'sqlite',
    'database.connections' => ['sqlite' => ['driver' => 'sqlite', 'database' => ':memory:', 'prefix' => '', 'foreign_key_constraints' => true]],
    'cache.default' => 'array', 'session.driver' => 'array', 'queue.default' => 'sync',
    'jwt.blacklist_enabled' => false, 'jwt.secret' => str_repeat('isolated-factual-probe-', 4),
    'concours_notifications.enabled' => false, 'concours_notifications.push_enabled' => false]);
foreach (array_keys(DB::getConnections()) as $name) {
    DB::purge($name);
}
DB::setDefaultConnection('sqlite');
if (DB::getDriverName() !== 'sqlite' || DB::connection()->getDatabaseName() !== ':memory:') {
    throw new RuntimeException('An empty isolated in-memory database is required.');
}
$paths = array_values(array_filter(glob(database_path('migrations/*.php')),
    fn ($path) => basename($path) !== '2026_08_13_215026_add_professional_to_quiz_difficulty.php'));
if (Artisan::call('migrate', ['--path' => $paths, '--realpath' => true]) !== 0) {
    throw new RuntimeException('Isolated fixture schema setup failed.');
}
Artisan::call('concours:register-sources');
$source = ConcoursAnnouncementSource::where('key', 'alwadifa-maroc')->firstOrFail();
$source->update(['enabled' => true, 'permission_status' => 'allowed', 'permission_checked_at' => now(),
    'permission_evidence' => config('concours_discovery.factual_metadata_reviews.alwadifa-maroc.evidence')]);
config(['concours_discovery.automation_enabled' => true, 'concours_discovery.authorized_feed_urls' => [$source->listing_url]]);
$client = app(AuthorizedFeedClient::class);
if (! $client->eligible($source)) {
    throw new RuntimeException('The factual assessment is not eligible. Reassess before any request.');
}
$directory = base_path('artifacts/concours-rss-facts');
if (! is_dir($directory)) {
    mkdir($directory, 0755, true);
}
$transport = [];
Http::globalResponseMiddleware(function ($response) use (&$transport) {
    $transport[] = ['status' => $response->getStatusCode(), 'content_type' => $response->getHeaderLine('Content-Type')];

    return $response;
});
if ($mode === '--fixture') {
    Http::fake([$source->listing_url => Http::response(file_get_contents(__DIR__.'/../Fixtures/concours-discovery/alwadifa.xml'), 200, ['Content-Type' => 'text/xml'])]);
    Http::preventStrayRequests();
    app()->instance(PublicAddressResolver::class, new class extends PublicAddressResolver
    {
        public function resolve(string $host): string
        {
            return '93.184.216.34';
        }
    });
} else {
    $marker = @fopen($directory.'/live-attempt.json', 'x');
    if (! $marker) {
        throw new RuntimeException('A live attempt was already recorded. No automatic repeat request is allowed.');
    }
    fwrite($marker, json_encode(['started_at_utc' => gmdate(DATE_ATOM), 'feed' => $source->listing_url, 'maximum_requests' => 1, 'database' => 'sqlite::memory:'])."\n");
    fclose($marker);
}
try {
    $body = $client->fetch($source); // Exactly one bounded GET; no article/PDF requests.
    $items = app(FeedParser::class)->parse($body, 'rss_atom');
    $service = app(ConcoursDiscoveryService::class);
    $retained = $service->captureFeed($source, $items);
    $count = ConcoursDiscovery::count();
    $revisions = DB::table('concours_discovery_revisions')->count();
    $service->captureFeed($source, $items); // Offline replay, not another feed request.
    if (ConcoursDiscovery::count() !== $count || DB::table('concours_discovery_revisions')->count() !== $revisions) {
        throw new RuntimeException('Offline replay created duplicate records or revisions.');
    }
    $admin = User::create(['name' => 'Isolated metadata probe', 'username' => 'metadata-probe', 'email' => 'metadata-probe@example.test', 'password' => 'FixtureOnly123!', 'role' => 'admin']);
    $token = auth('api')->login($admin);
    $request = Request::create('/api/v1/admin/concours-discovery/discoveries?source_id='.$source->id.'&status=pending&per_page=50', 'GET');
    $request->headers->set('Accept', 'application/json');
    $request->headers->set('Authorization', 'Bearer '.$token);
    $kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
    $response = $kernel->handle($request);
    $listing = json_decode($response->getContent(), true, 512, JSON_THROW_ON_ERROR);
    if ($response->getStatusCode() !== 200 || ($listing['data']['meta']['total'] ?? -1) !== $count || $count > 10) {
        throw new RuntimeException('The actual authenticated admin listing did not return the isolated records.');
    }
    foreach ($listing['data']['items'] as $row) {
        if ($row['official_url'] !== null || $row['metadata_scope'] !== 'facts_only' || $row['status'] !== 'pending') {
            throw new RuntimeException('An unverified live observation escaped the factual review scope.');
        }
    }
    foreach (['concours_announcements', 'notifications', 'concours_notification_events', 'concours_follows', 'concours_push_subscriptions', 'exam_pdfs'] as $table) {
        if (DB::table($table)->count() !== 0) {
            throw new RuntimeException('Unexpected publication, notification, subscription or PDF mutation.');
        }
    }
    $result = ['mode' => $mode, 'checked_at_utc' => gmdate(DATE_ATOM), 'database' => 'sqlite::memory:',
        'live_requests' => $mode === '--live-alwadifa' ? count($transport) : 0, 'transport' => $transport,
        'response_bytes' => strlen($body), 'response_sha256' => hash('sha256', $body),
        'parsed_items' => count($items), 'retained_records' => $retained, 'admin_listing_http_status' => $response->getStatusCode(),
        'offline_replay_duplicates' => 0, 'offline_replay_new_revisions' => 0,
        'publisher_written_authorization' => false, 'collection_basis' => 'internal_limited_factual_data_assessment',
        'published_announcements' => 0, 'notifications' => 0, 'application_database_writes' => 0];
    $name = $mode === '--fixture' ? 'fixture' : 'live';
    file_put_contents($directory.'/'.$name.'-admin-list.json', json_encode($listing, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR)."\n");
    file_put_contents($directory.'/'.$name.'-check.json', json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR)."\n");
    echo json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR)."\n";
    $kernel->terminate($request, $response);
} catch (Throwable $error) {
    // No response body, token or raw transport error is written to evidence.
    $code = AuthorizedFeedClient::errorCode($error);
    file_put_contents($directory.'/'.($mode === '--fixture' ? 'fixture' : 'live').'-failure.json', json_encode(['checked_at_utc' => gmdate(DATE_ATOM), 'error' => $code, 'transport' => $transport, 'application_database_writes' => 0], JSON_PRETTY_PRINT)."\n");
    fwrite(STDERR, 'Isolated metadata check failed: '.$code."\n");
    exit(1);
}
