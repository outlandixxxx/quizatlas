<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\QuizAttempt;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class LandingController extends Controller
{
    private const POPULAR_LIMIT = 5;
    private const NEW_LIMIT = 5;
    private const LEADERBOARD_PREVIEW_LIMIT = 5;

    public function index(): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => [
                'stats' => $this->buildStats(),
                'popular_quizzes' => $this->buildPopularQuizzes(),
                'new_quizzes' => $this->buildNewQuizzes(),
                'leaderboard_preview' => $this->buildLeaderboardPreview(),
            ],
        ]);
    }

   private function buildStats(): array
{
    $totalAttempts = QuizAttempt::where('status', 'submitted')->count();

    $passedAttempts = QuizAttempt::where('status', 'submitted')
        ->join('quizzes', 'quiz_attempts.quiz_id', '=', 'quizzes.id')
        ->whereColumn('quiz_attempts.score', '>=', 'quizzes.passing_score')
        ->count();

    $passingRate = $totalAttempts > 0
        ? (int) round(($passedAttempts / $totalAttempts) * 100)
        : 0;

    return [
        'total_questions' => Question::count(),
        'total_quizzes_attempted' => $totalAttempts,
        'total_candidates' => User::count(),
        'passing_rate' => $passingRate,
    ];
}

    private function buildPopularQuizzes(): array
    {
        return Quiz::where('is_active', true)
            ->withCount('quizAttempts')
            ->withAvg('ratings', 'rating')
            ->withCount('ratings')
            ->with('subject')
            ->orderByDesc('quiz_attempts_count')
            ->limit(self::POPULAR_LIMIT)
            ->get()
            ->map(fn (Quiz $quiz) => [
                'id' => $quiz->id,
                'title' => $quiz->title,
                'category' => $quiz->subject?->name,
                'questions_count' => $quiz->questions()->count(),
                'average_rating' => $quiz->ratings_avg_rating ? round($quiz->ratings_avg_rating, 1) : null,
                'ratings_count' => $quiz->ratings_count,
            ])
            ->values()
            ->all();
    }

    private function buildNewQuizzes(): array
    {
        return Quiz::where('is_active', true)
            ->with('subject')
            ->latest()
            ->limit(self::NEW_LIMIT)
            ->get()
            ->map(fn (Quiz $quiz) => [
                'id' => $quiz->id,
                'title' => $quiz->title,
                'category' => $quiz->subject?->name,
                'questions_count' => $quiz->questions()->count(),
            ])
            ->values()
            ->all();
    }

    private function buildLeaderboardPreview(): array
    {
        $topUsers = User::orderByDesc('xp')
            ->limit(self::LEADERBOARD_PREVIEW_LIMIT)
            ->get(['id', 'name', 'xp', 'avatar_url']);

        return $topUsers->values()->map(fn (User $u, int $index) => [
            'rank' => $index + 1,
            'name' => $u->name,
            'points' => $u->xp,
            'avatar' => $u->avatarFullUrl(),
        ])->all();
    }
}