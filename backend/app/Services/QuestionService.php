<?php

namespace App\Services;

use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class QuestionService
{
   public function getAll(int $perPage = 10): LengthAwarePaginator
{
    $query = Question::with(['quiz', 'choices']);

    if (request()->filled('quiz_id')) {
        $query->where('quiz_id', request('quiz_id'));
    }

    if (request()->filled('type')) {
        $query->where('type', request('type'));
    }

    if (request()->filled('search')) {
        $query->where('question', 'ILIKE', '%' . request('search') . '%');
    }

    $sort = request('sort', 'order');

    $direction = str_starts_with($sort, '-') ? 'desc' : 'asc';
    $column = ltrim($sort, '-');

    $allowedSorts = [
        'id',
        'order',
        'marks',
        'created_at',
    ];

    if (! in_array($column, $allowedSorts)) {
        $column = 'order';
        $direction = 'asc';
    }

    $query->orderBy($column, $direction);

    return $query->paginate($perPage);
}

    public function getById(Question $question): Question
    {
        return $question->load(['quiz', 'choices']);
    }

    public function create(array $data): Question
    {
        $question = Question::create($data);

        $this->updateQuizTotalMarks($question->quiz);

        return $question->load(['quiz', 'choices']);
    }

    public function update(Question $question, array $data): Question
    {
        $question->update($data);

        $this->updateQuizTotalMarks($question->quiz);

        return $question->fresh()->load(['quiz', 'choices']);
    }

    public function delete(Question $question): void
    {
        $quiz = $question->quiz;

        $question->delete();

        $this->updateQuizTotalMarks($quiz);
    }

    private function updateQuizTotalMarks(Quiz $quiz): void
    {
        $quiz->update([
            'total_marks' => $quiz->questions()->sum('marks'),
        ]);
    }
}