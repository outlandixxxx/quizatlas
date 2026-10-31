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

        $feedback = $this->userAnswerService->saveAnswer(
            $quizAttempt,
            $request->validated()
        );

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
        $quizAttempt = $this->quizAttemptService->refreshAndExpire($quizAttempt);

        return ApiResponse::success(
            $this->scoreCalculationService->buildResult($quizAttempt)
        );
    }

    public function show(QuizAttempt $quizAttempt)
    {
        $this->authorize('view', $quizAttempt);
        return ApiResponse::success(new QuizAttemptResource(
            $this->quizAttemptService->refreshAndExpire($quizAttempt)
        ));
    }


    public function history(Request $request)
    {
        $userId = auth()->id();
        $perPage = $request->integer('per_page', 5);

        $attempts = QuizAttempt::query()
            ->where('user_id', $userId)
            ->completed()
            ->whereHas('quiz', fn ($q) => $q->eligibleTo(auth()->user()))
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

        $quizAttempt = $this->quizAttemptService->whileInProgress($quizAttempt, function (QuizAttempt $locked) use ($validated) {
            abort_if($locked->mode !== $validated['mode'], 409, 'The mode is fixed for this attempt.');
            return $locked;
        });

        return ApiResponse::success(
            new QuizAttemptResource($quizAttempt)
        );
    }
}
