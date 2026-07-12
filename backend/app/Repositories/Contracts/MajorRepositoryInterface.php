<?php

namespace App\Repositories\Contracts;

use App\Models\Major;
use Illuminate\Database\Eloquent\Collection;

interface MajorRepositoryInterface
{
    /**
     * Get all majors.
     */
    public function all(): Collection;

    /**
     * Create a major.
     */
    public function create(array $data): Major;

    /**
     * Find a major.
     */
    public function find(Major $major): Major;

    /**
     * Update a major.
     */
    public function update(Major $major, array $data): Major;

    /**
     * Delete a major.
     */
    public function delete(Major $major): void;
}