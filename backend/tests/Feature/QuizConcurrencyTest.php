<?php

namespace Tests\Feature;

use App\Models\Achievement;
use App\Models\Choice;
use App\Models\Major;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\QuizAttempt;
use App\Models\Subject;
use App\Models\User;
use App\Services\QuizAttemptService;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Process\Process;
use Tests\QuizTestCase;
use Tests\TestCase;

class QuizConcurrencyTest extends TestCase
{
    public function test_parallel_start_answer_submission_expiration_and_achievements(): void
    {
        $name = getenv('QUIZ_CONCURRENCY_DATABASE');
        if (!is_string($name) || !preg_match('/\Amaroquiz_batch1_test_[a-f0-9]{12}\z/', $name)) {
            $this->markTestSkipped('Requires an explicitly provisioned disposable PostgreSQL test database.');
        }
        config(['app.env' => 'testing', 'database.default' => 'pgsql', 'database.connections.pgsql.database' => $name,
            'database.connections.pgsql.url' => null, 'cache.default' => 'array', 'hashing.bcrypt.rounds' => 4]);
        DB::purge();
        $this->assertSame($name, DB::connection()->getDatabaseName());
        $this->assertSame('pgsql', DB::connection()->getDriverName());
        $this->assertSame([], DB::select("SELECT tablename FROM pg_tables WHERE schemaname = 'public'"));
        Artisan::call('migrate', ['--path' => QuizTestCase::migrationPaths(), '--realpath' => true]);
        $user = User::create(['name' => 'Concurrency fixture', 'username' => 'concurrency', 'email' => 'concurrency@example.test',
            'password' => 'FixtureOnly123!', 'role' => 'user']);
        $xpBefore = $user->xp;
        Achievement::create(['key' => 'first_quiz', 'title' => 'First', 'description' => 'Fixture', 'xp_reward' => 100]);
        $major = Major::create(['name' => 'Fixture', 'slug' => 'fixture', 'is_active' => true]);
        $subject = Subject::create(['name' => 'Fixture', 'slug' => 'fixture', 'major_id' => $major->id, 'is_active' => true]);
        $newQuiz = function () use ($subject) {
            return Quiz::create(['title' => 'Concurrency fixture', 'subject_id' => $subject->id,
                'duration' => 1, 'passing_score' => 50, 'total_marks' => 1, 'is_active' => true]);
        };
        $quiz = $newQuiz();
        $q = Question::create(['quiz_id' => $quiz->id, 'question' => 'Fixture', 'type' => 'multiple_choice', 'marks' => 1, 'order' => 1]);
        $ids = [];
        foreach ([true, true, false] as $i => $correct) {
            $ids[] = Choice::create(['question_id' => $q->id, 'choice_text' => 'Fixture '.$i, 'is_correct' => $correct, 'order' => $i + 1])->id;
        }
        // No attempt exists before these processes race. Both must receive the same row.
        $results = $this->race(array_fill(0, 3, ['action' => 'start', 'quiz_id' => $quiz->id, 'user_id' => $user->id]));
        $this->assertSame([200, 200, 200], array_column($results, 'status'));
        $this->assertCount(1, array_unique(array_column($results, 'attempt_id')));
        $this->assertSame(1, $user->quizAttempts()->count());
        $attempt = $user->quizAttempts()->firstOrFail();
        $answers = [[$ids[0], $ids[1]], [$ids[2]]];
        $this->race(array_map(fn ($set) => ['action' => 'answer', 'attempt_id' => $attempt->id,
            'answer' => ['question_id' => $q->id, 'choice_ids' => $set]], $answers));
        $saved = $attempt->userAnswers()->orderBy('choice_id')->pluck('choice_id')->all();
        $this->assertContains($saved, $answers); // One complete set wins, never an accumulated union.
        $results = $this->race(array_fill(0, 2, ['action' => 'submit', 'attempt_id' => $attempt->id]));
        $statuses = array_column($results, 'status'); sort($statuses);
        $this->assertSame([200, 409], $statuses);
        $this->assertSame($saved === $answers[0] ? 1 : 0, $attempt->fresh()->score);
        $this->assertSame(1, DB::table('xp_transactions')->where('quiz_attempt_id', $attempt->id)->where('type', 'quiz_completion')->count());
        $this->assertSame(1, DB::table('user_achievements')->count());
        $this->assertSame(1, DB::table('xp_transactions')->where('type', 'achievement')->count());

        // Original FUN-010 scenario: a fresh answer races normal submission.
        // The answer either commits before grading or is rejected after closure.
        $racing = app(QuizAttemptService::class)->start($quiz, $user->id);
        $raceResults = $this->race([
            ['action' => 'answer', 'attempt_id' => $racing->id, 'answer' => ['question_id' => $q->id, 'choice_ids' => [$ids[0], $ids[1]]]],
            ['action' => 'submit', 'attempt_id' => $racing->id],
        ]);
        $this->assertContains($raceResults[0]['status'], [200, 409]);
        $this->assertSame(200, $raceResults[1]['status']);
        $accepted = $raceResults[0]['status'] === 200;
        $this->assertSame($accepted ? 2 : 0, $racing->userAnswers()->count());
        $this->assertSame($accepted ? 1 : 0, $racing->fresh()->score);
        $this->assertSame('submitted', $racing->fresh()->status);
        $this->assertSame(1, DB::table('xp_transactions')->where('quiz_attempt_id', $racing->id)->where('type', 'quiz_completion')->count());

        // Deadline is already reached: submit, expiry, and a late replacement compete.
        $timed = app(QuizAttemptService::class)->start($quiz, $user->id);
        app(\App\Services\UserAnswerService::class)->saveAnswer($timed, ['question_id' => $q->id, 'choice_ids' => [$ids[0], $ids[1]]]);
        $timed->update(['started_at' => now()->subMinute()->subSecond()]);
        $timed->userAnswers()->update(['created_at' => $timed->started_at->copy()->addSeconds(10)]);
        $results = $this->race([
            ['action' => 'submit', 'attempt_id' => $timed->id], ['action' => 'expire', 'attempt_id' => $timed->id],
            ['action' => 'answer', 'attempt_id' => $timed->id, 'answer' => ['question_id' => $q->id, 'choice_ids' => [$ids[2]]]],
        ]);
        $this->assertSame(409, $results[2]['status']);
        $this->assertContains($results[0]['status'], [200, 409]);
        $this->assertSame(200, $results[1]['status']);
        $this->assertSame('expired', $timed->fresh()->status);
        $this->assertSame(1, $timed->fresh()->score);
        $this->assertEquals($timed->fresh()->deadline(), $timed->fresh()->submitted_at);
        $this->assertSame([$ids[0], $ids[1]], $timed->userAnswers()->orderBy('choice_id')->pluck('choice_id')->all());
        $this->assertSame(1, DB::table('xp_transactions')->where('quiz_attempt_id', $timed->id)->where('type', 'quiz_completion')->count());
        $this->assertSame(1, DB::table('user_achievements')->count());

        // Different attempts for the same user also serialize achievement and XP work.
        $secondUser = User::create(['name' => 'Second fixture', 'username' => 'secondfixture', 'email' => 'second@example.test',
            'password' => 'FixtureOnly123!', 'role' => 'user']);
        $parallel = [app(QuizAttemptService::class)->start($newQuiz(), $secondUser->id), app(QuizAttemptService::class)->start($newQuiz(), $secondUser->id)];
        $results = $this->race(array_map(fn ($a) => ['action' => 'submit', 'attempt_id' => $a->id], $parallel));
        $this->assertSame([200, 200], array_column($results, 'status'));
        $this->assertSame(1, $secondUser->userAchievements()->count());
        $this->assertSame(1, $secondUser->xpTransactions()->where('type', 'achievement')->count());
        $this->assertSame((int) $secondUser->xp + 180, $secondUser->fresh()->xp);
        $this->assertSame((int) $user->fresh()->xp - $xpBefore, (int) $user->xpTransactions()->sum('amount'));
    }

    private function race(array $actions): array
    {
        $barrier = '/tmp/maroquiz-batch1-race-'.bin2hex(random_bytes(6));
        mkdir($barrier, 0700);
        $processes = [];
        try {
            foreach ($actions as $i => $action) {
                $payload = base64_encode(json_encode([...$action, 'barrier' => $barrier, 'worker' => $i], JSON_THROW_ON_ERROR));
                $process = new Process([PHP_BINARY, base_path('tests/Support/quiz-concurrency-worker.php'), $payload], base_path(), timeout: 25);
                $process->start();
                $processes[] = $process;
            }
            $until = microtime(true) + 15;
            while (count(glob($barrier.'/ready-*')) !== count($actions)) {
                if (microtime(true) > $until) $this->fail('Concurrency workers did not reach the barrier.');
                usleep(10000);
            }
            file_put_contents($barrier.'/go', 'go');
            return array_map(function (Process $process) {
                $process->wait();
                $this->assertSame(0, $process->getExitCode(), $process->getOutput().$process->getErrorOutput());
                return json_decode($process->getOutput(), true, flags: JSON_THROW_ON_ERROR);
            }, $processes);
        } finally {
            foreach ($processes as $process) if ($process->isRunning()) $process->stop();
            foreach (glob($barrier.'/*') as $file) unlink($file);
            rmdir($barrier);
        }
    }
}
