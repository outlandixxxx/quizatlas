<?php

namespace App\Http\Controllers\User;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Api\QuizController;
use App\Http\Requests\Quiz\StoreQuizRequest;
use App\Http\Requests\Quiz\UpdateQuizRequest;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Validation\ValidationException;

class TeacherQuizController extends QuizController
{
    public function subjects()
    {
        return ApiResponse::success(Subject::where('is_active', true)
            ->whereHas('major', fn ($q) => $q->where('is_active', true))
            ->orderBy('name')->get(['id', 'name']));
    }

    public function show(Quiz $quiz)
    {
        $this->authorize('update', $quiz);
        return parent::show($quiz);
    }

    public function store(StoreQuizRequest $request)
    {
        $this->availableSubject((int) $request->validated('subject_id'));
        return parent::store($request);
    }

    public function update(UpdateQuizRequest $request, Quiz $quiz)
    {
        $this->authorize('update', $quiz);
        if ((int) $request->validated('subject_id') !== (int) $quiz->subject_id) {
            $this->availableSubject((int) $request->validated('subject_id'));
        }
        return parent::update($request, $quiz);
    }

    private function availableSubject(int $id): void
    {
        if (!Subject::whereKey($id)->where('is_active', true)
            ->whereHas('major', fn ($q) => $q->where('is_active', true))->exists()) {
            throw ValidationException::withMessages(['subject_id' => 'Select an active subject in an active major.']);
        }
    }
}
