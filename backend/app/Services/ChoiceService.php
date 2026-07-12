<?php

namespace App\Services;

use App\Models\Choice;
use App\Models\Question;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class ChoiceService
{
    public function getAll(int $perPage = 10): LengthAwarePaginator
    {
        $query = Choice::with('question');

        if (request()->filled('question_id')) {
            $query->where('question_id', request('question_id'));
        }

        if (request()->filled('is_correct')) {
            $query->where('is_correct', filter_var(request('is_correct'), FILTER_VALIDATE_BOOLEAN));
        }

        if (request()->filled('search')) {
            $query->where('choice_text', 'ILIKE', '%' . request('search') . '%');
        }

        $sort = request('sort', 'order');

        $direction = str_starts_with($sort, '-') ? 'desc' : 'asc';
        $column = ltrim($sort, '-');

        $allowedSorts = [
            'id',
            'order',
            'created_at',
        ];

        if (! in_array($column, $allowedSorts)) {
            $column = 'order';
            $direction = 'asc';
        }

        $query->orderBy($column, $direction);

        return $query->paginate($perPage);
    }

    public function getById(Choice $choice): Choice
    {
        return $choice->load('question');
    }

    public function create(array $data): Choice
    {
        $question = Question::findOrFail($data['question_id']);

        $this->validateCorrectChoice($question, $data);

        return Choice::create($data)->load('question');
    }

    public function update(Choice $choice, array $data): Choice
    {
        $question = Question::findOrFail($data['question_id']);

        $this->validateCorrectChoice($question, $data, $choice);

        $choice->update($data);

        return $choice->fresh()->load('question');
    }

    public function delete(Choice $choice): void
    {
        $choice->delete();
    }

    private function validateCorrectChoice(
        Question $question,
        array $data,
        ?Choice $choice = null
    ): void {
        if (!$data['is_correct']) {
            return;
        }

        if (!in_array($question->type, ['single_choice', 'true_false'])) {
            return;
        }

        $query = $question->choices()->where('is_correct', true);

        if ($choice) {
            $query->where('id', '!=', $choice->id);
        }

        if ($query->exists()) {
            throw new \Exception(
                'Only one correct choice is allowed for this question.'
            );
        }
    }
}