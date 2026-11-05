<?php
// Only invoked by infrastructure/tests/content_usage_postgres.py in a new, private test network.
require __DIR__.'/../../vendor/autoload.php';
$app = require __DIR__.'/../../bootstrap/app.php';
$app->loadEnvironmentFrom('.env.content-usage-fixture-does-not-exist');
$storage = '/tmp/maroquiz-content-usage-storage';
foreach (['logs', 'framework/cache/data', 'framework/sessions', 'framework/views'] as $directory) {
    if (! is_dir($storage.'/'.$directory)) mkdir($storage.'/'.$directory, 0700, true);
}
$app->useStoragePath($storage);
$app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();
if (getenv('CONTENT_USAGE_PG_TEST') !== '1' || ! $app->environment('testing')
    || config('database.default') !== 'pgsql' || config('database.connections.pgsql.host') !== 'postgres'
    || ! preg_match('/^mq_usage_test_[a-f0-9]{12}$/', \Illuminate\Support\Facades\DB::connection()->getDatabaseName())) {
    throw new RuntimeException('Refusing a non-isolated database target.');
}
config(['jwt.secret' => str_repeat('isolated-usage-fixture-', 4), 'jwt.blacklist_enabled' => false]);
use App\Models\{ContentUsageOperation, ContentUsageItem, User, Major, Subject, Quiz, Question};
use App\Services\ContentUsage\{Fingerprint, Registry};
use Illuminate\Support\Facades\{Artisan, DB};
use Illuminate\Support\Str;

if (in_array($argv[1] ?? '', ['worker', 'publish-worker'], true)) {
    [$script, $mode, $questionId, $operationId, $barrier, $tag] = $argv;
    file_put_contents($barrier.'/'.$tag.'.ready', 'ready');
    $deadline = microtime(true) + 15;
    while (! is_file($barrier.'/start')) { if (microtime(true) >= $deadline) throw new RuntimeException('Barrier timeout.'); usleep(10000); }
    try {
        if ($mode === 'publish-worker') {
            auth()->setUser(User::findOrFail(1));
            $question = Question::with('quiz')->findOrFail($questionId);
            $request = \Illuminate\Http\Request::create('/api/v1/social-packs/confirm', 'POST', ['items' => [[
                'post_date' => '2026-11-05', 'format' => 'question_du_jour',
                'subject_id' => $question->quiz->subject_id, 'question_id' => (int) $questionId,
            ]]]);
            $response = app(\App\Http\Controllers\Api\SocialPackController::class)->confirm($request);
            echo json_encode(['status' => $response->getStatusCode(), 'created' => $response->getData(true)['data']['created']]);
            exit;
        }
        app(Registry::class)->reserve(1, $operationId, 'quiz-video', hash('sha256', 'pg-fixture'), [Fingerprint::source(Question::findOrFail($questionId))]);
        echo json_encode(['status' => 200, 'operation_id' => $operationId]);
    } catch (\Symfony\Component\HttpKernel\Exception\HttpException $e) {
        echo json_encode(['status' => $e->getStatusCode(), 'operation_id' => $operationId]);
    }
    exit;
}
foreach (\Tests\Feature\ContentUsageTest::migrations() as $file) Artisan::call('migrate', ['--path' => database_path('migrations/'.$file), '--realpath' => true]);
$user = User::create(['name' => 'Isolated usage fixture', 'email' => 'fixture@example.test', 'password' => 'Fixture-password-123!', 'role' => 'admin']);
$major = Major::create(['name' => 'Fixture', 'slug' => 'fixture', 'is_active' => true]);
$subject = Subject::create(['major_id' => $major->id, 'name' => 'Fixture', 'slug' => 'fixture', 'is_active' => true]);
$ids = [];
foreach ([1, 2] as $number) {
    $quiz = Quiz::create(['subject_id' => $subject->id, 'title' => 'Fixture '.$number, 'duration' => 1, 'passing_score' => 50, 'total_marks' => 1]);
    $ids[] = Question::create(['quiz_id' => $quiz->id, 'question' => 'The same question in two quizzes?', 'explanation' => 'Fixture', 'type' => 'single_choice'])->id;
}
function race(array $ids, array $operations, string $mode = 'worker'): array {
    $barrier = '/tmp/mq-usage-race-'.Str::uuid(); mkdir($barrier, 0700);
    $workers = [];
    foreach ($ids as $index => $id) {
        $pipes = [];
        $process = proc_open([PHP_BINARY, __FILE__, $mode, (string) $id, $operations[$index], $barrier, (string) $index], [0 => ['pipe', 'r'], 1 => ['pipe', 'w'], 2 => ['pipe', 'w']], $pipes);
        if (! is_resource($process)) throw new RuntimeException('Worker launch failed.');
        fclose($pipes[0]); $workers[] = [$process, $pipes];
    }
    $deadline = microtime(true) + 15;
    while (! is_file($barrier.'/0.ready') || ! is_file($barrier.'/1.ready')) {
        if (microtime(true) >= $deadline) throw new RuntimeException('Workers did not reach their barrier.'); usleep(10000);
    }
    touch($barrier.'/start');
    $results = [];
    foreach ($workers as [$process, $pipes]) {
        $output = stream_get_contents($pipes[1]); $error = stream_get_contents($pipes[2]);
        fclose($pipes[1]); fclose($pipes[2]);
        if (proc_close($process) !== 0) throw new RuntimeException('Isolated worker failed: '.$error);
        try { $results[] = json_decode($output, true, flags: JSON_THROW_ON_ERROR); }
        catch (\JsonException $e) { throw new RuntimeException('Invalid isolated worker response: '.substr($output, 0, 3000).' '.substr($error, 0, 1000), previous: $e); }
    }
    return $results;
}
$results = race($ids, [(string) Str::uuid(), (string) Str::uuid()]);
$statuses = array_column($results, 'status'); sort($statuses);
if ($statuses !== [200, 409] || ContentUsageOperation::count() !== 1 || ContentUsageItem::count() !== 1 || DB::table('content_usage_claims')->count() !== 2) throw new RuntimeException('Concurrent fingerprint exclusion failed.');
$winner = ContentUsageOperation::firstOrFail(); $winnerId = $winner->items()->firstOrFail()->source_id;
$again = race([$winnerId, $winnerId], [$winner->id, $winner->id]);
if (array_column($again, 'status') !== [200, 200] || ContentUsageOperation::count() !== 1 || ContentUsageItem::count() !== 1) throw new RuntimeException('Concurrent retry idempotency failed.');
$publicationIds = [];
foreach ($ids as $id) $publicationIds[] = Question::create(['quiz_id' => Question::findOrFail($id)->quiz_id,
    'question' => 'Another shared prompt for concurrent Posts?', 'explanation' => 'Fixture', 'type' => 'single_choice'])->id;
$publications = race($publicationIds, ['', ''], 'publish-worker');
$statuses = array_column($publications, 'status'); sort($statuses);
if ($statuses !== [200, 409] || \App\Models\SocialPost::count() !== 1 || ContentUsageOperation::count() !== 2) throw new RuntimeException('Concurrent Posts publication failed.');
$publishedId = \App\Models\SocialPost::firstOrFail()->question_id;
$publicationRetries = race([$publishedId, $publishedId], ['', ''], 'publish-worker');
if (array_column($publicationRetries, 'status') !== [200, 200] || array_sum(array_column($publicationRetries, 'created')) !== 0
    || \App\Models\SocialPost::count() !== 1 || ContentUsageOperation::count() !== 2) throw new RuntimeException('Concurrent Posts retry idempotency failed.');
echo json_encode(['postgresql' => DB::selectOne('SHOW server_version')->server_version, 'fresh_migration' => 'passed',
    'concurrent_fingerprint_reservation' => 'passed', 'concurrent_idempotency' => 'passed',
    'concurrent_posts_publication_and_retry' => 'passed',
    'claims' => DB::table('content_usage_claims')->count(), 'educational_fixture_rows_preserved' => Question::count() === 4,
    'application_databases_accessed' => false], JSON_PRETTY_PRINT).PHP_EOL;
