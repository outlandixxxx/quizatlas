<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Quiz\StoreQuizRequest;
use App\Http\Requests\Quiz\UpdateQuizRequest;
use App\Http\Resources\QuizResource;
use App\Models\Quiz;
use App\Services\QuizService;
use Symfony\Component\HttpFoundation\JsonResponse;

class QuizController extends Controller
{
    public function __construct(
        protected QuizService $quizService
    ) {
    }

   public function index(): JsonResponse
{
    $perPage = request()->integer('per_page', 10);

    return ApiResponse::success(
        QuizResource::collection(
            $this->quizService->getAll($perPage)
        ),
        'Quizzes retrieved successfully.'
    );
}

    public function store(StoreQuizRequest $request)
    {
        $quiz = $this->quizService->create($request->validated());

        return ApiResponse::success(
            new QuizResource($quiz),
            'Quiz created successfully.',
            201
        );
    }

    public function show(Quiz $quiz)
    {
        $quiz = $this->quizService->getById($quiz);

        return ApiResponse::success(
            new QuizResource($quiz),
            'Quiz retrieved successfully.'
        );
    }

    public function update(UpdateQuizRequest $request, Quiz $quiz)
    {
        $quiz = $this->quizService->update(
            $quiz,
            $request->validated()
        );

        return ApiResponse::success(
            new QuizResource($quiz),
            'Quiz updated successfully.'
        );
    }

    public function destroy(Quiz $quiz)
    {
        $this->quizService->delete($quiz);

        return ApiResponse::success(
            null,
            'Quiz deleted successfully.'
        );
    }
}