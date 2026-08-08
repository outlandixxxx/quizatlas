<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class QuizRatingController extends Controller
{
    /**
     * Submit or update a rating for a quiz.
     * Only allowed if the user has at least one submitted attempt on this quiz.
     */
    public function store(Request $request, Quiz $quiz): JsonResponse
    {
        $user = $request->user();

        $hasCompletedQuiz = $user->quizAttempts()
            ->where('quiz_id', $quiz->id)
            ->where('status', 'submitted')
            ->exists();

        if (!$hasCompletedQuiz) {
            return response()->json([
                'success' => false,
                'message' => 'You can only rate quizzes you have completed.',
            ], 403);
        }

        $validated = $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string|max:500',
        ]);

        $rating = $quiz->ratings()->updateOrCreate(
            ['user_id' => $user->id],
            $validated
        );

        return response()->json([
            'success' => true,
            'message' => 'Rating submitted successfully.',
            'data' => [
                'rating' => $rating->rating,
                'comment' => $rating->comment,
                'average_rating' => round($quiz->ratings()->avg('rating'), 1),
                'ratings_count' => $quiz->ratings()->count(),
            ],
        ]);
    }

    /**
     * Get the current user's existing rating for a quiz (to prefill an edit form).
     */
    public function show(Request $request, Quiz $quiz): JsonResponse
    {
        $rating = $quiz->ratings()->where('user_id', $request->user()->id)->first();

        return response()->json([
            'success' => true,
            'data' => $rating ? [
                'rating' => $rating->rating,
                'comment' => $rating->comment,
            ] : null,
        ]);
    }
}