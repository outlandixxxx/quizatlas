<?php

namespace App\Services;

use App\Models\Major;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Collection;

class PracticeService
{
    public function majors(): Collection
    {
        return Major::query()
            ->where('is_active', true)
            ->orderBy('name')
            ->get(['id', 'name', 'slug', 'description', 'icon']);
    }

    public function subjects(int $majorId): Collection
    {
        return Subject::query()
            ->where('major_id', $majorId)
            ->where('is_active', true)
            ->whereHas('major', fn ($q) => $q->where('is_active', true))
            ->withCount(['quizzes' => fn ($q) => $q->eligibleTo(auth()->user())])
            ->withCount(['quizzes as questions_count' => function ($query) {
                $query->eligibleTo(auth()->user())->join('questions', 'questions.quiz_id', '=', 'quizzes.id')
                    ->whereNull('questions.deleted_at');
            }])
            ->orderBy('name')
            ->get(['id', 'major_id', 'name', 'slug', 'year', 'code']);
    }

    public function chapters(int $subjectId): Collection
    {
        return Quiz::query()
            ->where('subject_id', $subjectId)
            ->eligibleTo(auth()->user())
            ->withCount('questions')
            ->orderBy('title')
            ->get(['id', 'title', 'description']);
    }

    public function allSubjectsWithQuizzes(): Collection
    {
        return Subject::query()
            ->where('is_active', true)
            ->whereHas('quizzes', fn ($q) => $q->eligibleTo(auth()->user()))
            ->orderBy('name')
            ->get(['id', 'name']);
    }
}
