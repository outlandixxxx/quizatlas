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
use App\Models\UserAchievement;
use App\Models\XpTransaction;
use App\Services\LeaderboardService;
use App\Services\ScoreCalculationService;
use Carbon\Carbon;
use Database\Seeders\DemoCommunitySeeder;
use Database\Seeders\LeaderboardSeeder;
use Database\Seeders\Support\SeededCommunity;
use Database\Seeders\UserAchievementSeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class SeededCommunityTest extends TestCase
{
    use RefreshDatabase;

    public function createApplication()
    {
        $app = parent::createApplication();
        // Force an isolated connection even when Docker supplies PostgreSQL env vars.
        $app['config']->set([
            'database.default' => 'sqlite',
            'database.connections.sqlite.database' => ':memory:',
            'database.connections.sqlite.url' => null,
            'cache.default' => 'array',
            'hashing.bcrypt.rounds' => 4,
        ]);

        return $app;
    }

    protected function migrateFreshUsing()
    {
        // The production-only enum alteration uses PostgreSQL DROP CONSTRAINT.
        // It is irrelevant to these Beginner quiz fixtures and cannot run on SQLite.
        $paths = array_values(array_filter(glob(database_path('migrations/*.php')),
            fn ($path) => basename($path) !== '2026_08_13_215026_add_professional_to_quiz_difficulty.php'));

        return ['--path' => $paths, '--realpath' => true];
    }

    protected function setUp(): void
    {
        parent::setUp();
        $this->assertSame('sqlite', DB::connection()->getDriverName());
        Carbon::setTestNow(Carbon::parse('2026-10-24 23:45:00'));
    }

    protected function tearDown(): void
    {
        Carbon::setTestNow();
        parent::tearDown();
    }

    public function test_usernames_are_readable_unique_and_stable_on_reruns(): void
    {
        $this->seed(UserSeeder::class);
        $students = User::where('role', 'user')->get();
        $this->assertCount(235, $students);
        $this->assertCount(235, $students->pluck('username')->map(fn ($name) => strtolower($name))->unique());
        foreach ($students as $student) {
            $this->assertMatchesRegularExpression('/^[A-Za-z][A-Za-z0-9]{2,19}$/', $student->username);
            $this->assertStringNotContainsString('player_', $student->username);
        }
        foreach (['outlandish', 'Abdo2008', 'BeautifulGirl', 'TheStrongest'] as $username) {
            $this->assertTrue($students->contains('username', $username));
        }

        $user = $students->first();
        $user->forceFill(['password' => Hash::make('MyChangedPassword123!'), 'xp' => 1234, 'bio' => 'My own biography'])->save();
        $ids = User::orderBy('id')->pluck('id')->all();
        $names = User::orderBy('id')->pluck('username')->all();
        $this->seed(UserSeeder::class);
        $this->assertSame($ids, User::orderBy('id')->pluck('id')->all());
        $this->assertSame($names, User::orderBy('id')->pluck('username')->all());
        $this->assertSame(1234, $user->fresh()->xp);
        $this->assertSame('My own biography', $user->fresh()->bio);
        $this->assertTrue(Hash::check('MyChangedPassword123!', $user->fresh()->password));
    }

    public function test_collisions_and_non_fixture_accounts_are_preserved(): void
    {
        $outsider = User::create(['name' => 'Existing member', 'username' => 'Outlandish', 'email' => 'someone@maroquiz.test', 'password' => 'Secret123!', 'role' => 'user', 'xp' => 777]);
        $protected = User::create(['name' => 'Existing administrator', 'username' => 'ProtectedAdmin', 'email' => 'sara@maroquiz.test', 'password' => 'Secret123!', 'role' => 'admin']);
        $this->seed(UserSeeder::class);
        $this->assertDatabaseHas('users', ['email' => 'ahmed@maroquiz.test', 'username' => 'outlandish2']);
        $this->assertSame('Outlandish', $outsider->fresh()->username);
        $this->assertSame(777, $outsider->fresh()->xp);
        $this->assertSame('admin', $protected->fresh()->role);
        $this->assertSame('ProtectedAdmin', $protected->fresh()->username);
        $this->seed(UserSeeder::class);
        $this->assertDatabaseHas('users', ['email' => 'ahmed@maroquiz.test', 'username' => 'outlandish2']);
    }

    public function test_activity_leaderboards_and_achievements_are_consistent_and_do_not_duplicate(): void
    {
        $quizzes = $this->createQuizzes();
        $outsider = User::create(['name' => 'Existing member', 'username' => 'ExistingMember', 'email' => 'ordinary@maroquiz.test', 'password' => 'Secret123!', 'role' => 'user', 'xp' => 777]);
        $this->seed(DemoCommunitySeeder::class);
        $this->assertSame('2026-10-24 23:45:00', now()->format('Y-m-d H:i:s'));
        $this->assertSame(777, $outsider->fresh()->xp);
        $this->assertSame(0, $outsider->quizAttempts()->count());

        $emails = array_column(SeededCommunity::students(), 'email');
        $students = User::whereIn('email', $emails)->withSum('xpTransactions as ledger_xp', 'amount')->get();
        $this->assertGreaterThan(30, $students->pluck('xp')->unique()->count());
        $this->assertTrue($students->contains('current_streak', 0));
        $this->assertTrue($students->contains(fn ($user) => $user->current_streak >= 30));
        foreach ($students as $user) {
            $this->assertSame($user->xp, (int) $user->ledger_xp);
        }

        foreach (QuizAttempt::with('user')->orderBy('id')->get()->filter(fn ($attempt, $index) => $index % 97 === 0) as $attempt) {
            $result = app(ScoreCalculationService::class)->calculate($attempt);
            $this->assertSame((int) $attempt->score, $result['score']);
            $this->assertSame((float) $attempt->percentage, (float) $result['percentage']);
            $this->assertSame($attempt->passed, $result['passed']);
            $this->assertTrue($attempt->started_at->gte($attempt->user->created_at));
            $this->assertTrue($attempt->submitted_at->lte(now()));
            $this->assertTrue($attempt->submitted_at->gt($attempt->started_at));
        }

        $this->assertSame(10, Achievement::whereHas('userAchievements')->count());
        $this->assertTrue(UserAchievement::where('unlocked_at', '<', now()->subWeek())->exists());
        $this->assertSame(0, UserAchievement::where('unlocked_at', '>', now())->count());
        $this->assertSame(0, User::whereIn('role', ['admin', 'manager'])->sum('xp'));

        $filters = ['scope' => 'global', 'period' => 'week', 'subject_id' => $quizzes[0]->subject_id, 'per_page' => 20];
        $ranking = app(LeaderboardService::class)->list($filters, $students->first()->id);
        $this->assertNotEmpty($ranking['items']);
        foreach ($ranking['items'] as $row) {
            $this->assertGreaterThan(0, $row['quizzes_completed']);
            $this->assertGreaterThan(0, $row['accuracy']);
        }

        $counts = [QuizAttempt::count(), DB::table('user_answers')->count(), XpTransaction::count(), UserAchievement::count()];
        $xp = User::orderBy('id')->pluck('xp')->all();
        $this->seed(DemoCommunitySeeder::class);
        $this->assertSame($counts, [QuizAttempt::count(), DB::table('user_answers')->count(), XpTransaction::count(), UserAchievement::count()]);
        $this->assertSame($xp, User::orderBy('id')->pluck('xp')->all());
    }

    public function test_achievement_backfill_includes_earlier_perfect_results_and_awards_xp_once(): void
    {
        $quiz = $this->createQuizzes()[0];
        $this->seed(UserSeeder::class);
        $user = User::where('email', 'ahmed@maroquiz.test')->firstOrFail();
        foreach ([100, 70] as $index => $percentage) {
            QuizAttempt::create(['user_id' => $user->id, 'quiz_id' => $quiz->id, 'mode' => 'exam', 'status' => 'submitted', 'started_at' => now()->subDays(2 - $index)->setTime(12, 0), 'submitted_at' => now()->subDays(2 - $index)->setTime(12, 5), 'score' => 1, 'percentage' => $percentage, 'passed' => true]);
        }
        $this->seed(UserAchievementSeeder::class);
        $keys = $user->userAchievements()->with('achievement')->get()->pluck('achievement.key')->all();
        $this->assertContains('first_quiz', $keys);
        $this->assertContains('perfect_score', $keys);
        $this->assertSame(150, $user->fresh()->xp);
        $this->seed(UserAchievementSeeder::class);
        $this->assertSame(150, $user->fresh()->xp);
        $this->assertSame(2, $user->xpTransactions()->count());
    }

    public function test_community_can_be_seeded_before_quiz_content_without_fabricating_progress(): void
    {
        $this->seed(DemoCommunitySeeder::class);
        $this->assertSame(237, User::count());
        $this->assertSame(10, Achievement::count());
        $this->assertSame(0, QuizAttempt::count());
        $this->assertSame(0, User::sum('xp'));
        $this->assertSame(0, UserAchievement::count());
    }

    public function test_activity_uses_only_available_public_quizzes(): void
    {
        $quizzes = $this->createQuizzes();
        User::create(['name' => 'Sara', 'username' => 'BeautifulGirl', 'email' => 'sara@maroquiz.test', 'password' => 'Secret123!', 'role' => 'user']);
        $owner = User::create(['name' => 'Quiz owner', 'username' => 'QuizOwner', 'email' => 'owner@example.test', 'password' => 'Secret123!', 'role' => 'user']);
        $quizzes[0]->update(['is_active' => false]);
        $quizzes[1]->subject->update(['is_active' => false]);
        $quizzes[2]->update(['owner_id' => $owner->id]);
        $this->seed(LeaderboardSeeder::class);
        $this->assertSame(0, QuizAttempt::count());

        $quizzes[0]->update(['is_active' => true]);
        $major = $quizzes[0]->subject->major;
        $major->update(['is_active' => false]);
        $this->seed(LeaderboardSeeder::class);
        $this->assertSame(0, QuizAttempt::count());

        $major->update(['is_active' => true]);
        $this->seed(LeaderboardSeeder::class);
        $this->assertGreaterThan(0, QuizAttempt::count());
        $this->assertSame([$quizzes[0]->id], QuizAttempt::distinct()->pluck('quiz_id')->all());
    }

    /** @return list<Quiz> */
    private function createQuizzes(): array
    {
        $major = Major::create(['name' => 'Informatique', 'slug' => 'computer-science-it', 'is_active' => true]);
        $quizzes = [];
        foreach (['Programming', 'Databases', 'Networks'] as $name) {
            $subject = Subject::create(['major_id' => $major->id, 'name' => $name, 'year' => 'N/A', 'code' => $name, 'is_active' => true]);
            $quiz = Quiz::create(['subject_id' => $subject->id, 'title' => $name, 'duration' => 15, 'passing_score' => 70, 'total_marks' => 11, 'difficulty' => 'Beginner', 'is_active' => true]);
            for ($i = 0; $i < 10; $i++) {
                $question = Question::create(['quiz_id' => $quiz->id, 'question' => "Question {$i}", 'type' => 'multiple_choice', 'marks' => $i === 9 ? 2 : 1, 'order' => $i + 1]);
                foreach ([true, false, false] as $order => $correct) {
                    Choice::create(['question_id' => $question->id, 'choice_text' => "Choice {$order}", 'is_correct' => $correct, 'order' => $order + 1]);
                }
            }
            $quizzes[] = $quiz;
        }

        return $quizzes;
    }
}
