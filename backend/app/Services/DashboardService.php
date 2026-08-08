<?php

namespace App\Services;

use App\Models\Quiz;
use App\Models\QuizAttempt;
use App\Models\User;
use App\Models\Achievement;
use Illuminate\Support\Carbon;

class DashboardService
{
    private const IN_PROGRESS_LIMIT = 5;
    private const RECENT_RESULTS_LIMIT = 5;
    private const RECOMMENDED_LIMIT = 5;
    private const DAILY_GOAL_TARGET = 3;
    private const LEADERBOARD_LIMIT = 5;

    public function getDashboard(User $user): array
    {
        $submittedAttempts = $user->quizAttempts()
            ->where('status', 'submitted')
            ->with(['quiz.subject'])
            ->get();

        $inProgressAttempts = $user->quizAttempts()
            ->where('status', 'in_progress')
            ->with(['quiz.subject', 'quiz.questions'])
            ->orderByDesc('started_at')
            ->limit(self::IN_PROGRESS_LIMIT)
            ->get();

        return [
            'hero' => $this->buildHero($user, $inProgressAttempts),
            'stats' => $this->buildStats($user, $submittedAttempts),
            'in_progress_quizzes' => $this->buildInProgressQuizzes($inProgressAttempts),
            'recommended_quizzes' => $this->buildRecommendedQuizzes($user),
            'recent_results' => $this->buildRecentResults($submittedAttempts),
            'daily_goal' => $this->buildDailyGoal($submittedAttempts),
            'achievements' => $this->buildAchievements($user),
            'leaderboard' => $this->buildLeaderboard($user),
        ];
    }

private function buildHero(User $user, $inProgressAttempts): array
{
    $latest = $inProgressAttempts->first();

    return [
        'user_name' => $user->name,
        'last_quiz' => $latest?->quiz?->title,
        'quiz_id' => $latest?->quiz_id,
        'progress' => $latest ? $this->attemptProgress($latest) : 0,
    ];
}

private function buildStats(User $user, $submittedAttempts): array
{
    $completedQuizzes = $submittedAttempts->count();

    $averageScore = $completedQuizzes > 0
        ? (int) round($submittedAttempts->avg('percentage'))
        : 0;

    $timeSpentMinutes = $submittedAttempts->sum(function (QuizAttempt $attempt) {
        if (!$attempt->submitted_at || !$attempt->started_at) {
            return 0;
        }
        return $attempt->started_at->diffInMinutes($attempt->submitted_at);
    });

    // --- Week-over-week trends ---
    $now = Carbon::now();
    $startOfThisWeek = $now->copy()->startOfWeek();
    $startOfLastWeek = $now->copy()->subWeek()->startOfWeek();
    $endOfLastWeek = $startOfThisWeek->copy()->subSecond();

    $thisWeekAttempts = $submittedAttempts->filter(
        fn (QuizAttempt $a) => $a->submitted_at && $a->submitted_at->greaterThanOrEqualTo($startOfThisWeek)
    );

    $lastWeekAttempts = $submittedAttempts->filter(
        fn (QuizAttempt $a) => $a->submitted_at && $a->submitted_at->between($startOfLastWeek, $endOfLastWeek)
    );

    $quizzesThisWeek = $thisWeekAttempts->count();

    $avgThisWeek = $thisWeekAttempts->count() > 0 ? $thisWeekAttempts->avg('percentage') : null;
    $avgLastWeek = $lastWeekAttempts->count() > 0 ? $lastWeekAttempts->avg('percentage') : null;
    $scoreDelta = ($avgThisWeek !== null && $avgLastWeek !== null)
        ? (int) round($avgThisWeek - $avgLastWeek)
        : null;

    $hoursThisWeek = round($thisWeekAttempts->sum(function (QuizAttempt $a) {
        if (!$a->started_at || !$a->submitted_at) {
            return 0;
        }
        return $a->started_at->diffInMinutes($a->submitted_at);
    }) / 60, 1);

    return [
        'completed_quizzes' => $completedQuizzes,
        'completed_quizzes_trend' => $quizzesThisWeek,
        'average_score' => $averageScore,
        'average_score_trend' => $scoreDelta,
        'streak' => $user->current_streak ?? 0,
        'time_spent' => round($timeSpentMinutes / 60, 1),
        'time_spent_trend' => $hoursThisWeek,
    ];
}

    private function attemptProgress(QuizAttempt $attempt): int
    {
        $totalQuestions = $attempt->quiz?->questions?->count() ?? 0;

        if ($totalQuestions === 0) {
            return 0;
        }

        $answeredQuestions = $attempt->userAnswers()
            ->distinct('question_id')
            ->count('question_id');

        return (int) round(($answeredQuestions / $totalQuestions) * 100);
    }

    private function buildInProgressQuizzes($inProgressAttempts): array
    {
        return $inProgressAttempts->map(fn (QuizAttempt $attempt) => [
            'id' => $attempt->id,
            'quiz_id' => $attempt->quiz_id,
            'title' => $attempt->quiz?->title,
            'category' => $attempt->quiz?->subject?->name,
            'level' => $attempt->quiz?->difficulty ?? 'Beginner',
            'progress' => $this->attemptProgress($attempt),
        ])->values()->all();
    }

    private function buildRecommendedQuizzes(User $user): array
    {
        $attemptedQuizIds = $user->quizAttempts()->pluck('quiz_id')->unique();

        $attemptedSubjectIds = Quiz::whereIn('id', $attemptedQuizIds)
            ->pluck('subject_id')
            ->unique();

        $query = Quiz::where('is_active', true)
            ->whereNotIn('id', $attemptedQuizIds)
            ->with('subject');

        if ($attemptedSubjectIds->isNotEmpty()) {
            $query->whereIn('subject_id', $attemptedSubjectIds);
        }

        $recommended = (clone $query)->inRandomOrder()->limit(self::RECOMMENDED_LIMIT)->get();

        // Fallback: if a subject-matched user still gets too few results
        // (e.g. they've done everything in their usual subjects), top up
        // with newest active quizzes from anywhere.
        if ($recommended->count() < self::RECOMMENDED_LIMIT) {
            $excludeIds = $recommended->pluck('id')->merge($attemptedQuizIds);

            $fallback = Quiz::where('is_active', true)
                ->whereNotIn('id', $excludeIds)
                ->with('subject')
                ->latest()
                ->limit(self::RECOMMENDED_LIMIT - $recommended->count())
                ->get();

            $recommended = $recommended->concat($fallback);
        }

        return $recommended->map(fn (Quiz $quiz) => [
            'id' => $quiz->id,
            'title' => $quiz->title,
            'category' => $quiz->subject?->name,
            'level' => $quiz->difficulty ?? 'Beginner',
            'duration' => $quiz->duration,
        ])->values()->all();
    }

    private function buildRecentResults($submittedAttempts): array
    {
        return $submittedAttempts
            ->sortByDesc('submitted_at')
            ->take(self::RECENT_RESULTS_LIMIT)
            ->map(fn (QuizAttempt $attempt) => [
                'id' => $attempt->id,
                'name' => $attempt->quiz?->title,
                'category' => $attempt->quiz?->subject?->name,
                'score' => (int) round($attempt->percentage),
                'status' => $attempt->passed ? 'Passed' : 'Failed',
            ])->values()->all();
    }

    private function buildDailyGoal($submittedAttempts): array
    {
        $today = Carbon::today();

        $completedToday = $submittedAttempts->filter(
            fn (QuizAttempt $attempt) => $attempt->submitted_at && $attempt->submitted_at->isSameDay($today)
        )->count();

        $target = self::DAILY_GOAL_TARGET;
        $percentage = $target > 0 ? min(100, (int) round(($completedToday / $target) * 100)) : 0;

        return [
            'completed' => $completedToday,
            'target' => $target,
            'percentage' => $percentage,
        ];
    }

  private function buildAchievements(User $user): array
{
    $unlockedByKey = $user->userAchievements()
        ->with('achievement')
        ->get()
        ->keyBy(fn ($ua) => $ua->achievement->key);

    return Achievement::all()
        ->map(function (Achievement $achievement) use ($unlockedByKey) {
            $unlocked = $unlockedByKey->get($achievement->key);

            return [
                'id' => $achievement->id,
                'key' => $achievement->key,
                'title' => $achievement->title,
                'icon' => $achievement->icon,
                'unlocked' => $unlocked !== null,
                'unlocked_at' => $unlocked?->unlocked_at,
            ];
        })
        ->sortByDesc('unlocked')
        ->take(4)
        ->values()
        ->all();
}

    private function buildLeaderboard(User $user): array
    {
        $topUsers = User::orderByDesc('xp')
            ->limit(self::LEADERBOARD_LIMIT)
            ->get(['id', 'name', 'xp', 'avatar_url']);

        return $topUsers->values()->map(fn (User $u, int $index) => [
            'rank' => $index + 1,
            'name' => $u->name,
            'points' => $u->xp,
            'avatar' => $u->avatarFullUrl(),
            'isCurrentUser' => $u->id === $user->id,
        ])->all();
    }
}