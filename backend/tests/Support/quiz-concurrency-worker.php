<?php

// Invoked only by QuizConcurrencyTest against an explicitly named disposable DB.
chdir(dirname(__DIR__, 2));
require 'vendor/autoload.php';
$name = getenv('QUIZ_CONCURRENCY_DATABASE');
if (!is_string($name) || !preg_match('/\Amaroquiz_batch1_test_[a-f0-9]{12}\z/', $name)) exit(90);
$app = require 'bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();
config(['app.env' => 'testing', 'database.default' => 'pgsql', 'database.connections.pgsql.database' => $name,
    'database.connections.pgsql.url' => null, 'cache.default' => 'array', 'mail.default' => 'array']);
Illuminate\Support\Facades\DB::purge();
if (Illuminate\Support\Facades\DB::connection()->getDatabaseName() !== $name) exit(91);
Illuminate\Support\Facades\Http::preventStrayRequests();
Illuminate\Support\Facades\Mail::fake();
Illuminate\Support\Facades\Notification::fake();
$input = json_decode(base64_decode($argv[1]), true, flags: JSON_THROW_ON_ERROR);
if (!preg_match('#\A/tmp/maroquiz-batch1-race-[a-f0-9]{12}\z#', $input['barrier'])) exit(92);
file_put_contents($input['barrier'].'/ready-'.$input['worker'], 'ready');
$until = microtime(true) + 15;
while (!is_file($input['barrier'].'/go')) {
    if (microtime(true) > $until) exit(93);
    usleep(10000);
}
try {
    $service = app(App\Services\QuizAttemptService::class);
    $result = match ($input['action']) {
        'start' => $service->start(App\Models\Quiz::findOrFail($input['quiz_id']), $input['user_id']),
        'submit' => $service->submit(App\Models\QuizAttempt::findOrFail($input['attempt_id']))['attempt'],
        'expire' => $service->refreshAndExpire(App\Models\QuizAttempt::findOrFail($input['attempt_id']), false),
        'answer' => app(App\Services\UserAnswerService::class)->saveAnswer(App\Models\QuizAttempt::findOrFail($input['attempt_id']), $input['answer']),
    };
    echo json_encode(['status' => 200, 'attempt_id' => $result instanceof App\Models\QuizAttempt ? $result->id : null]);
} catch (App\Exceptions\ApiException $e) {
    echo json_encode(['status' => $e->status()]);
} catch (Throwable $e) {
    echo json_encode(['status' => 500, 'exception' => get_class($e), 'message' => $e->getMessage()]);
    exit(1);
}
