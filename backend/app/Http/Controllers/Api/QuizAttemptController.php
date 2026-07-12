<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\QuizAttempt\SaveAnswerRequest;
use App\Http\Resources\QuizAttemptResource;
use App\Models\Quiz;
use App\Models\QuizAttempt;
use App\Services\QuizAttemptService;
use App\Services\UserAnswerService;
use Illuminate\Http\Request;

class QuizAttemptController extends Controller
{
    public function __construct(
        protected QuizAttemptService $quizAttemptService,
        protected UserAnswerService $userAnswerService
    ) {
    }

    public function start(Request $request, Quiz $quiz)
    {
        $attempt = $this->quizAttemptService->start(
            $quiz,
            auth()->id()
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

        return ApiResponse::success(
            null,
            'Answer saved successfully.'
        );
    }

    public function submit(QuizAttempt $quizAttempt)
    {
        $this->authorize('submit', $quizAttempt);

        $quizAttempt = $this->quizAttemptService->submit($quizAttempt);

        return ApiResponse::success(
            new QuizAttemptResource($quizAttempt),
            'Quiz submitted successfully.'
        );
    }
}