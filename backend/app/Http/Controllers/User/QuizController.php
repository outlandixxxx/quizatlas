<?php

namespace App\Http\Controllers\User;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\QuizListResource;
use App\Http\Resources\QuizWithQuestionsResource;
use App\Models\Quiz;
use Illuminate\Http\Request;
use App\Models\QuizAttempt;
use App\Models\Bookmark;


class QuizController extends Controller
{
    public function index(Request $request)
    {
        $userId = auth()->id();

        $query = Quiz::query()
            ->where('is_active', true)
            ->with(['subject:id,name'])
            ->withCount('questions')
            ->with(['quizAttempts' => function ($q) use ($userId) {
                $q->where('user_id', $userId)
                    ->with('userAnswers:id,quiz_attempt_id,question_id')
                    ->latest()
                    ->limit(1);
            }]);

        if ($request->filled('search')) {
            $query->where('title', 'like', '%' . $request->string('search') . '%');
        }

        if ($request->filled('subject_id')) {
            $query->where('subject_id', $request->integer('subject_id'));
        }

        if ($request->filled('difficulty')) {
            $query->where('difficulty', $request->string('difficulty'));
        }


        if ($request->filled('status')) {
            $status = $request->string('status');

            if ($status === 'not_started') {
                $query->whereDoesntHave('quizAttempts', fn ($q) => $q->where('user_id', $userId));
            } else {
                $query->whereHas('quizAttempts', function ($q) use ($userId, $status) {
                    $q->where('user_id', $userId)
                        ->where('status', $status)
                        ->whereRaw('quiz_attempts.id = (
                            select max(qa2.id) from quiz_attempts qa2
                            where qa2.quiz_id = quiz_attempts.quiz_id
                            and qa2.user_id = ?
                        )', [$userId]);
                });
            }
        }

        $perPage = $request->integer('per_page', 9);

        $quizzes = $query->orderBy('title')->paginate($perPage);

        return ApiResponse::success([
            'data' => QuizListResource::collection($quizzes->items()),
            'meta' => [
                'current_page' => $quizzes->currentPage(),
                'last_page'    => $quizzes->lastPage(),
                'per_page'     => $quizzes->perPage(),
                'total'        => $quizzes->total(),
            ],
        ]);
    }



    public function show(Quiz $quiz)
        {
            $quiz->load(['subject', 'questions' => function ($query) {
                $query->orderBy('order')->with(['choices' => function ($q) {
                    $q->orderBy('order');
                }]);
            }]);

            $userId = auth()->id();
            $questionIds = $quiz->questions->pluck('id');

            $selectedByQuestion = [];

            $attempt = QuizAttempt::where('quiz_id', $quiz->id)
                ->where('user_id', $userId)
                ->where('status', 'in_progress')
                ->latest()
                ->first();

            if ($attempt) {
                $selectedByQuestion = $attempt->userAnswers()
                    ->get()
                    ->groupBy('question_id')
                    ->map(fn ($answers) => $answers->pluck('choice_id')->all())
                    ->all();
            }

            $bookmarkedQuestionIds = Bookmark::where('user_id', $userId)
                ->whereIn('question_id', $questionIds)
                ->pluck('question_id')
                ->all();

            return ApiResponse::success(
                new QuizWithQuestionsResource($quiz, $selectedByQuestion, $bookmarkedQuestionIds)
            );
        }
}