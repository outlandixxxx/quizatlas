<?php

namespace Database\Seeders;

use App\Models\Quiz;
use App\Models\QuizAttempt;
use App\Models\User;
use App\Services\GamificationService;
use App\Services\ScoreCalculationService;
use Carbon\Carbon;
use Database\Seeders\Support\SeededCommunity;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeaderboardSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(AchievementSeeder::class);
        $quizzes = $this->quizPool();
        if ($quizzes->isEmpty()) {
            $this->command?->warn('No playable public quizzes found. Seed your quiz content, then run DemoCommunitySeeder again.');

            return;
        }

        $seedTime = Carbon::now();
        foreach (SeededCommunity::students() as $index => $student) {
            $user = User::where('email', $student['email'])->where('role', 'user')->first();
            if (! $user) {
                continue;
            }

            DB::transaction(function () use ($user, $index, $quizzes, $seedTime): void {
                $user = User::whereKey($user->id)->lockForUpdate()->firstOrFail();
                // Preserve seeded history and any activity completed after seeding.
                if ($user->quizAttempts()->exists() || $user->xpTransactions()->exists() || $user->userAchievements()->exists()) {
                    return;
                }

                $profile = SeededCommunity::activity($index);
                $user->forceFill(['xp' => 0, 'current_streak' => 0, 'last_active_date' => null])->save();
                $dates = $this->activityDates($profile, $user->email, $seedTime);
                if ($dates === []) {
                    return;
                }

                $preferredMajor = $quizzes[($index * 7) % $quizzes->count()]->subject->major_id;
                $userQuizzes = $quizzes->where('subject.major_id', $preferredMajor)->values();
                // Some students focus on one or two subjects; others explore their major.
                if ($index % 3 === 0) {
                    $userQuizzes = $userQuizzes->take(2)->values();
                }
                $user->major ??= $userQuizzes->first()->subject->major?->name;
                $joinedAt = $dates[0]->copy()->subDays(SeededCommunity::number("{$user->email}:joined", 3, 20));
                if ($user->created_at->gt($joinedAt)) {
                    $user->created_at = $joinedAt;
                    $user->email_verified_at = $joinedAt->copy()->addMinutes(15);
                }
                $user->save();

                foreach ($dates as $attemptIndex => $startedAt) {
                    $quiz = $userQuizzes[($index + $attemptIndex) % $userQuizzes->count()];
                    $this->seedAttempt($user, $quiz, $startedAt, $attemptIndex, $profile);
                }

                $user->refresh();
                if ($user->last_active_date?->lt($seedTime->copy()->startOfDay()->subDay())) {
                    $user->current_streak = 0;
                    $user->save();
                }
            });
        }
    }

    /** Keep the question/choice pool bounded while covering every available major. */
    private function quizPool(): Collection
    {
        $candidates = Quiz::where('is_active', true)->whereNull('owner_id')
            ->whereHas('subject', fn ($query) => $query->where('is_active', true)
                ->whereHas('major', fn ($major) => $major->where('is_active', true)))
            ->whereHas('questions.choices', fn ($query) => $query->where('is_correct', true))
            ->with('subject.major')->orderBy('id')->get();
        $ids = $candidates->groupBy('subject.major_id')->flatMap(fn ($group) => $group
            ->groupBy('subject_id')->map(fn ($subjectQuizzes) => $subjectQuizzes->first()->id)->take(4))->values();

        return Quiz::whereIn('id', $ids)->with(['subject.major', 'questions.choices'])->orderBy('id')->get()
            ->filter(fn (Quiz $quiz) => $quiz->questions->sum('marks') > 0 && $quiz->questions->every(
                fn ($question) => $question->choices->contains(fn ($choice) => (bool) $choice->is_correct)
            ))->values();
    }

    /** @return list<Carbon> */
    private function activityDates(array $profile, string $key, Carbon $seedTime): array
    {
        $lastDay = $seedTime->copy()->subHour()->startOfDay()->subDays($profile['inactive_days']);
        $dates = [];
        for ($i = 0; $i < $profile['attempts']; $i++) {
            $daysAgo = $i < $profile['run_days'] ? $i : $profile['run_days'] + 2 + ($i - $profile['run_days']) * 2;
            $hour = $profile['night_owl'] && $i % 4 === 0 ? 22 : SeededCommunity::number("{$key}:hour:{$i}", 8, 19);
            $startedAt = $lastDay->copy()->subDays($daysAgo)->setTime($hour, SeededCommunity::number("{$key}:minute:{$i}", 0, 50));
            // Today's generated times must never create activity in the future.
            $latestStart = $seedTime->copy()->subMinutes(20 + $i);
            $dates[] = $startedAt->min($latestStart)->copy();
        }
        usort($dates, fn (Carbon $a, Carbon $b) => $a->getTimestamp() <=> $b->getTimestamp());

        return $dates;
    }

    private function seedAttempt(User $user, Quiz $quiz, Carbon $startedAt, int $index, array $profile): void
    {
        $key = "{$user->email}:attempt:{$index}";
        $seconds = max(30, min($quiz->duration * 60 - 5, SeededCommunity::number("{$key}:duration", 90, 600)));
        $submittedAt = $startedAt->copy()->addSeconds($seconds);
        $accuracy = SeededCommunity::number("{$key}:accuracy", $profile['min_accuracy'], $profile['max_accuracy']);
        $questions = $quiz->questions->sortBy(fn ($question) => SeededCommunity::number("{$key}:question:{$question->id}", 0, 100000))->values();
        $correctCount = (int) round($questions->count() * $accuracy / 100);

        Carbon::withTestNow($submittedAt, function () use ($user, $quiz, $startedAt, $submittedAt, $index, $questions, $correctCount, $key): void {
            $attempt = QuizAttempt::create([
                'user_id' => $user->id,
                'quiz_id' => $quiz->id,
                'mode' => $index % 3 === 0 ? 'tutor' : 'exam',
                'status' => 'in_progress',
                'started_at' => $startedAt,
            ]);
            $answers = [];
            foreach ($questions as $questionIndex => $question) {
                $choices = $questionIndex < $correctCount
                    ? $question->choices->filter(fn ($choice) => (bool) $choice->is_correct)
                    : $question->choices->filter(fn ($choice) => ! $choice->is_correct)->values();
                if ($questionIndex >= $correctCount && $choices->isNotEmpty()) {
                    $choices = collect([$choices[SeededCommunity::number("{$key}:wrong:{$question->id}", 0, $choices->count() - 1)]]);
                }
                foreach ($choices as $choice) {
                    $answers[] = ['quiz_attempt_id' => $attempt->id, 'question_id' => $question->id, 'choice_id' => $choice->id, 'created_at' => $submittedAt, 'updated_at' => $submittedAt];
                }
            }
            if ($answers !== []) {
                DB::table('user_answers')->insert($answers);
            }
            $result = app(ScoreCalculationService::class)->calculate($attempt);
            $attempt->update($result + ['status' => 'submitted', 'submitted_at' => $submittedAt]);
            app(GamificationService::class)->awardForAttempt($attempt->fresh());
        });
    }
}
