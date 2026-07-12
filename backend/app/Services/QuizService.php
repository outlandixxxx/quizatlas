<?php

namespace App\Services;

use App\Models\Quiz;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class QuizService
{
    /**
     * Get paginated quizzes.
     */
    public function getAll(int $perPage = 10): LengthAwarePaginator
    {
        $query = Quiz::with('subject');

        // Filter by subject
        if (request()->filled('subject_id')) {
            $query->where('subject_id', request('subject_id'));
        }

        // Search by title
        if (request()->filled('search')) {
            $query->where('title', 'ILIKE', '%' . request('search') . '%');
        }

        // Sorting
        $sort = request('sort', '-created_at');

        $direction = str_starts_with($sort, '-') ? 'desc' : 'asc';
        $column = ltrim($sort, '-');

        $allowedSorts = [
            'id',
            'title',
            'duration',
            'passing_score',
            'created_at',
        ];

        if (! in_array($column, $allowedSorts)) {
            $column = 'created_at';
            $direction = 'desc';
        }

        $query->orderBy($column, $direction);

        return $query->paginate($perPage);
    }

    /**
     * Get one quiz.
     */
    public function getById(Quiz $quiz): Quiz
    {
        return $quiz->load('subject');
    }

    /**
     * Create a quiz.
     */
    public function create(array $data): Quiz
    {
        $data['total_marks'] = 0;

        return Quiz::create($data)->load('subject');
    }

    /**
     * Update a quiz.
     */
    public function update(Quiz $quiz, array $data): Quiz
    {
        unset($data['total_marks']);

        $quiz->update($data);

        return $quiz->fresh()->load('subject');
    }

    /**
     * Delete a quiz.
     */
    public function delete(Quiz $quiz): void
    {
        $quiz->delete();
    }
}