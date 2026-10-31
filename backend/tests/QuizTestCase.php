<?php

namespace Tests;

use App\Models\Choice;
use App\Models\Major;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Routing\Middleware\ThrottleRequests;
use Illuminate\Routing\Middleware\ThrottleRequestsWithRedis;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

abstract class QuizTestCase extends TestCase
{
    public function createApplication()
    {
        // Do not read or clear a developer's cached configuration/routes.
        $keys = ['APP_CONFIG_CACHE', 'APP_ROUTES_CACHE'];
        $old = [];
        foreach ($keys as $key) {
            $old[$key] = [$_ENV[$key] ?? null, $_SERVER[$key] ?? null];
            $_ENV[$key] = $_SERVER[$key] = '/tmp/maroquiz-quiz-test-'.strtolower($key).'.php';
        }
        try {
            $app = parent::createApplication();
        } finally {
            foreach ($old as $key => [$env, $server]) {
                if ($env === null) unset($_ENV[$key]); else $_ENV[$key] = $env;
                if ($server === null) unset($_SERVER[$key]); else $_SERVER[$key] = $server;
            }
        }
        $app['config']->set([
            'app.env' => 'testing', 'app.debug' => false,
            'database.default' => 'sqlite', 'database.connections.sqlite.database' => ':memory:',
            'database.connections.sqlite.url' => null, 'cache.default' => 'array',
            'jwt.secret' => str_repeat('quiz-fixture-secret-', 4), 'jwt.blacklist_enabled' => false,
            'hashing.bcrypt.rounds' => 4, 'mail.default' => 'array',
        ]);
        return $app;
    }

    protected function setUp(): void
    {
        parent::setUp();
        $this->assertSame('sqlite', DB::connection()->getDriverName());
        $this->assertSame(':memory:', DB::connection()->getDatabaseName());
        $this->withoutMiddleware([ThrottleRequests::class, ThrottleRequestsWithRedis::class]);
        Http::preventStrayRequests();
        Mail::fake();
        Notification::fake();
        Artisan::call('migrate', ['--path' => static::migrationPaths(), '--realpath' => true]);
    }


    public static function migrationPaths(): array
    {
        return array_map(fn ($name) => database_path('migrations/'.$name), static::migrationNames());
    }

    public static function migrationNames(): array
    {
        return [
            '0001_01_01_000000_create_users_table.php',
            '2026_07_02_205142_create_majors_table.php',
            '2026_07_02_211641_create_subjects_table.php',
            '2026_07_02_225022_create_quizzes_table.php',
            '2026_07_05_232730_create_questions_table.php',
            '2026_07_06_211337_create_choices_table.php',
            '2026_07_06_220742_create_quiz_attempts_table.php',
            '2026_07_06_221328_create_user_answers_table.php',
            '2026_07_27_193254_add_profile_fields_to_users_table.php',
            '2026_07_29_222848_add_icon_to_majors.php',
            '2026_07_29_222928_add_yearandcode_to_subjects.php',
            '2026_07_29_230011_add_mode_to_quiz_attempts.php',
            '2026_07_30_155427_add_nullable_difficulty_to_quizzes.php',
            '2026_08_01_180056_bookmarks_table.php',
            '2026_08_02_214946_add_xpstreakactivecountry_to_users.php',
            '2026_08_05_181330_create_quiz_ratings_table.php',
            '2026_08_06_220149_create_xp_transactions_tale.php',
            '2026_08_06_220447_create_achievements.php',
            '2026_08_06_220506_create_user_achievements.php',
            '2026_08_10_155759_add_owner_id_to_quizzes_table.php',
            '2026_08_10_160847_create_quiz_shares_table.php',
            '2026_08_10_160910_create_quiz_share_enrollments_table.php',
            '2026_09_02_215807_add_default_xp_to_users_table.php',
            '2026_09_03_194943_add_password_changed_at_to_users_table.php',
            '2026_10_05_191604_add_username_to_users_table.php',
        ];
    }

    protected function student(string $role = 'user'): User
    {
        $n = User::count() + 1;
        return User::create(['name' => 'Fixture '.$n, 'username' => 'fixture'.$n,
            'email' => 'fixture'.$n.'@example.test', 'password' => 'FixtureOnly123!',
            'role' => $role, 'email_verified_at' => now()]);
    }

    protected function quiz(array $attributes = []): Quiz
    {
        $n = Major::withTrashed()->count() + 1;
        $major = Major::create(['name' => 'Fixture '.$n, 'slug' => 'fixture-'.$n, 'is_active' => true]);
        $subject = Subject::create(['major_id' => $major->id, 'name' => 'Fixture '.$n, 'slug' => 'fixture-'.$n, 'is_active' => true]);
        return Quiz::create(array_merge(['subject_id' => $subject->id, 'title' => 'Fixture quiz',
            'duration' => 1, 'passing_score' => 50, 'total_marks' => 1, 'is_active' => true], $attributes));
    }

    protected function question(Quiz $quiz, string $type = 'multiple_choice', array $correct = [true, true, false]): Question
    {
        $question = Question::create(['quiz_id' => $quiz->id, 'question' => 'Fixture question',
            'type' => $type, 'marks' => 1, 'order' => $quiz->questions()->count() + 1, 'explanation' => 'Fixture explanation']);
        foreach ($correct as $i => $value) {
            Choice::create(['question_id' => $question->id, 'choice_text' => 'Choice '.$i, 'order' => $i + 1, 'is_correct' => $value]);
        }
        return $question->load('choices');
    }

    protected function asUser(?User $user): static
    {
        auth()->forgetGuards();
        app('tymon.jwt')->unsetToken();
        app('tymon.jwt.auth')->unsetToken();
        $this->flushHeaders();
        if ($user) $this->withHeader('Authorization', 'Bearer '.auth('api')->login($user));
        auth()->forgetGuards();
        return $this;
    }
}
