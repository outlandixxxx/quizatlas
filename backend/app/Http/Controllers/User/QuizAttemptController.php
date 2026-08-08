<?php

namespace App\Http\Controllers\User;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\QuizAttempt\SaveAnswerRequest;
use App\Http\Resources\QuizAttemptResource;
use App\Models\Quiz;
use App\Models\QuizAttempt;
use App\Services\QuizAttemptService;
use App\Http\Resources\QuizAttemptHistoryResource; 
use App\Services\ScoreCalculationService;
use App\Services\UserAnswerService;
use Illuminate\Http\Request;

class QuizAttemptController extends Controller
{
    public function __construct(
        protected QuizAttemptService $quizAttemptService,
        protected UserAnswerService $userAnswerService,
        protected ScoreCalculationService $scoreCalculationService
    ) {
    }

    public function start(Request $request, Quiz $quiz)
    {
        $validated = $request->validate([
            'mode' => ['nullable', 'in:tutor,exam'],
        ]);

        $attempt = $this->quizAttemptService->start(
            $quiz,
            auth()->id(),
            $validated['mode'] ?? 'exam'
        );

        return ApiResponse::success(
            new QuizAttemptResource($attempt),
            'Quiz started successfully.',
            201
        );
    }

    public function saveAnswer(
        SaveAnswerRequest $request,
        QuizAttempt $quizAttempt
    ) {
        $this->authorize('update', $quizAttempt);

        $this->userAnswerService->saveAnswer(
            $quizAttempt,
            $request->validated()
        );

        $feedback = null;

        if ($quizAttempt->mode === 'tutor') {
            $feedback = $this->userAnswerService->getFeedback(
                $quizAttempt,
                $request->validated()['question_id']
            );
        }

        return ApiResponse::success(
            $feedback,
            'Answer saved successfully.'
        );
    }


public function submit(QuizAttempt $quizAttempt)
{
    $this->authorize('submit', $quizAttempt);

    $result = $this->quizAttemptService->submit($quizAttempt);

    return ApiResponse::success(
        new QuizAttemptResource($result['attempt']),
        'Quiz submitted successfully.',
        200,
        ['rewards' => $result['rewards']]
    );
}

    public function result(QuizAttempt $quizAttempt)
    {
        $this->authorize('view', $quizAttempt);

        return ApiResponse::success(
            $this->scoreCalculationService->buildResult($quizAttempt)
        );
    }


    public function history(Request $request)
    {
        $userId = auth()->id();
        $perPage = $request->integer('per_page', 5);

        $attempts = QuizAttempt::query()
            ->where('user_id', $userId)
            ->where('status', 'submitted')
            ->with(['quiz' => fn ($q) => $q->withCount('questions')])
            ->orderByDesc('submitted_at')
            ->paginate($perPage);

        return ApiResponse::success([
            'data' => QuizAttemptHistoryResource::collection($attempts->items()),
            'meta' => [
                'current_page' => $attempts->currentPage(),
                'last_page'    => $attempts->lastPage(),
                'per_page'     => $attempts->perPage(),
                'total'        => $attempts->total(),
            ],
        ]);
    }

    public function updateMode(Request $request, QuizAttempt $quizAttempt)
    {
        $this->authorize('update', $quizAttempt);

        $validated = $request->validate([
            'mode' => ['required', 'in:tutor,exam'],
        ]);

        if ($quizAttempt->status !== 'in_progress') {
            return ApiResponse::error('This attempt is no longer in progress.', null, 422);
        }

        $quizAttempt->update(['mode' => $validated['mode']]);

        return ApiResponse::success(
            new QuizAttemptResource($quizAttempt)
        );
    }
}