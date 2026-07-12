<?php

namespace App\Services;

use App\Models\Major;
use Illuminate\Database\Eloquent\Collection;
   use Illuminate\Contracts\Pagination\LengthAwarePaginator;


class MajorService
{
    /**
     * Get all majors.
     */

public function all(int $perPage = 10): LengthAwarePaginator
{
    return Major::query()
        ->latest()
        ->paginate($perPage);
}

    /**
     * Create a new major.
     */
    public function create(array $data): Major
    {
        return Major::create($data);
    }

    /**
     * Find a major.
     */
    public function find(Major $major): Major
    {
        return $major;
    }

    /**
     * Update a major.
     */
    public function update(Major $major, array $data): Major
    {
        $major->update($data);

        return $major->fresh();
    }

    /**
     * Delete a major.
     */
    public function delete(Major $major): void
    {
        $major->delete();
    }
}