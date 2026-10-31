<?php

namespace App\Http\Controllers\User;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Question\StoreQuestionRequest;
use App\Http\Resources\QuestionResource;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\UserAnswer;
use App\Services\QuestionService;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class TeacherQuestionController extends Controller
{
    public function __construct(private QuestionService $questions) {}

    public function store(Request $request)
    {
        $data = $this->validated($request);
        $quiz = Quiz::findOrFail($data['quiz_id']);
        $this->authorize('update', $quiz);
        $question = DB::transaction(function () use ($data, $quiz) {
            Quiz::whereKey($quiz->id)->lockForUpdate()->firstOrFail();
            $question = $this->questions->create(Arr::except($data, 'choices'));
            $this->saveChoices($question, $data['choices']);
            return $question->fresh()->load('choices');
        });
        return ApiResponse::success(new QuestionResource($question), 'Question created successfully.', 201);
    }

    public function update(Request $request, Question $question)
    {
        $this->authorize('update', $question);
        $data = $this->validated($request);
        // The builder edits a question in its current quiz; it cannot reparent it.
        if ((int) $data['quiz_id'] !== (int) $question->quiz_id) {
            throw ValidationException::withMessages(['quiz_id' => 'The question must remain in its quiz.']);
        }
        $question = DB::transaction(function () use ($data, $question) {
            Quiz::whereKey($question->quiz_id)->lockForUpdate()->firstOrFail();
            $question = $this->questions->update($question, Arr::except($data, 'choices'));
            $this->saveChoices($question, $data['choices']);
            return $question->fresh()->load('choices');
        });
        return ApiResponse::success(new QuestionResource($question), 'Question updated successfully.');
    }

    public function destroy(Question $question)
    {
        $this->authorize('delete', $question);
        DB::transaction(function () use ($question) {
            Quiz::whereKey($question->quiz_id)->lockForUpdate()->firstOrFail();
            $this->questions->delete($question);
        });
        return ApiResponse::success(null, 'Question deleted successfully.');
    }

    private function validated(Request $request): array
    {
        $data = $request->validate((new StoreQuestionRequest)->rules() + [
            'choices' => ['required', 'array', 'list', 'min:2', 'max:100'],
            'choices.*.id' => ['sometimes', 'integer', 'distinct'],
            'choices.*.choice_text' => ['required', 'string'],
            'choices.*.is_correct' => ['required', 'boolean'],
        ]);
        $correct = collect($data['choices'])->filter(fn ($c) => (bool) $c['is_correct'])->count();
        if (!$correct || ($data['type'] !== 'multiple_choice' && $correct !== 1)
            || ($data['type'] === 'true_false' && count($data['choices']) !== 2)) {
            throw ValidationException::withMessages(['choices' => 'Provide the correct answer set for the selected question type.']);
        }
        return $data;
    }

    private function saveChoices(Question $question, array $choices): void
    {
        $existing = $question->choices()->get()->keyBy('id');
        $ids = array_column($choices, 'id');
        if (array_diff($ids, $existing->keys()->all())) {
            throw ValidationException::withMessages(['choices' => 'A choice does not belong to this question.']);
        }
        $removedIds = $existing->keys()->diff($ids)->all();
        if ($removedIds && UserAnswer::whereIn('choice_id', $removedIds)->exists()) {
            throw ValidationException::withMessages(['choices' => 'Retain choices referenced by saved answers.']);
        }
        $retained = [];
        foreach ($choices as $i => $choice) {
            $values = ['choice_text' => $choice['choice_text'], 'is_correct' => $choice['is_correct'], 'order' => $i + 1];
            if (isset($choice['id'])) {
                $model = $existing[$choice['id']];
                $model->update($values);
            } else {
                $model = $question->choices()->create($values);
            }
            $retained[] = $model->id;
        }
        $question->choices()->whereNotIn('id', $retained)->delete();
    }
}
