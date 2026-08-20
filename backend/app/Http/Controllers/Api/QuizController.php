<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Quiz\StoreQuizRequest;
use App\Http\Requests\Quiz\UpdateQuizRequest;
use App\Http\Resources\QuizListResource;
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
        QuizListResource::collection(
            $this->quizService->getAll($perPage)
        ),
        'Quizzes retrieved successfully.'
    );
}

  

    public function show(Quiz $quiz)
    {
        $quiz = $this->quizService->getById($quiz);

        return ApiResponse::success(
            new QuizListResource($quiz),
            'Quiz retrieved successfully.'
        );
    }

   
        public function store(StoreQuizRequest $request)
        {
            $data = $request->validated();
            $data['owner_id'] = auth()->id();

            $quiz = $this->quizService->create($data);

            return ApiResponse::success(new QuizListResource($quiz), 'Quiz created successfully.', 201);
        }

        public function update(UpdateQuizRequest $request, Quiz $quiz)
        {
            $this->authorize('update', $quiz);

            $quiz = $this->quizService->update($quiz, $request->validated());

            return ApiResponse::success(new QuizListResource($quiz), 'Quiz updated successfully.');
        }

        public function destroy(Quiz $quiz)
        {
            $this->authorize('delete', $quiz);

            $this->quizService->delete($quiz);

            return ApiResponse::success(null, 'Quiz deleted successfully.');
        }
  
}