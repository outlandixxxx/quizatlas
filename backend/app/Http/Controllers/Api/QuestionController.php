<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Question\StoreQuestionRequest;
use App\Http\Requests\Question\UpdateQuestionRequest;
use App\Http\Resources\QuestionResource;
use App\Models\Question;
use App\Services\QuestionService;

class QuestionController extends Controller
{
    public function __construct(
        protected QuestionService $questionService
    ) {
    }

   public function index()
{
    $perPage = request()->integer('per_page', 10);

    $questions = $this->questionService->getAll($perPage);

    return ApiResponse::success(
        QuestionResource::collection($questions),
        'Questions retrieved successfully.'
    );
}



    public function show(Question $question)
    {
        $question = $this->questionService->getById($question);

        return ApiResponse::success(
            new QuestionResource($question),
            'Question retrieved successfully.'
        );
    }

 

        public function store(StoreQuestionRequest $request)
    {
        $quiz = \App\Models\Quiz::findOrFail($request->validated()['quiz_id']);

        if (!auth()->user()->isAdmin() && $quiz->owner_id !== auth()->id()) {
            abort(403, 'This action is unauthorized.');
        }

        $question = $this->questionService->create($request->validated());

        return ApiResponse::success(new QuestionResource($question), 'Question created successfully.', 201);
    }

    public function update(UpdateQuestionRequest $request, Question $question)
    {
        $this->authorize('update', $question);

        $question = $this->questionService->update($question, $request->validated());

        return ApiResponse::success(new QuestionResource($question), 'Question updated successfully.');
    }

    public function destroy(Question $question)
    {
        $this->authorize('delete', $question);

        $this->questionService->delete($question);

        return ApiResponse::success(null, 'Question deleted successfully.');
    }
}