<?php

namespace App\Services;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Collection;

class SubjectService
{
    /**
     * Get all subjects.
     */
    public function all(): Collection
    {
        return Subject::with('major')
            ->orderBy('name')
            ->get();
    }

    /**
     * Create a subject.
     */
    public function create(array $data): Subject
    {
        return Subject::create($data);
    }

    /**
     * Find a subject.
     */
    public function find(Subject $subject): Subject
    {
        return $subject->load('major');
    }

    /**
     * Update a subject.
     */
    public function update(Subject $subject, array $data): Subject
    {
        $subject->update($data);

        return $subject->fresh()->load('major');
    }

    /**
     * Delete a subject.
     */
    public function delete(Subject $subject): void
    {
        $subject->delete();
    }
}