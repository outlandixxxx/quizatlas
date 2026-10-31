<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Concours\DirectoryIndexRequest;
use App\Http\Requests\Concours\SaveDirectoryRequest;
use App\Http\Requests\Concours\SavePreparationOptionRequest;
use App\Http\Resources\ConcoursPreparationOptionResource;
use App\Models\Concours;
use App\Models\ConcoursCategory;
use App\Models\ConcoursPreparationOption;
use App\Services\ConcoursDirectoryService;
use Illuminate\Database\QueryException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class AdminConcoursDirectoryController extends Controller
{
    public function __construct(private readonly ConcoursDirectoryService $directory) {}

    public function index(DirectoryIndexRequest $request, string $kind): JsonResponse
    {
        $this->authorize('viewAny', $this->directory->model($kind));

        return ApiResponse::success($this->directory->listing($kind, $request->validated(), false));
    }

    public function show(string $kind, int $record): JsonResponse
    {
        $model = $this->directory->model($kind)::findOrFail($record);
        $this->authorize('view', $model);
        if ($kind === 'concours') {
            $model->load(['category', 'institution', 'preparationOptions']);
        }
        $resource = $this->directory->resource($kind);

        return ApiResponse::success(new $resource($model));
    }

    public function store(SaveDirectoryRequest $request, string $kind): JsonResponse
    {
        $this->authorize('create', $this->directory->model($kind));

        return $this->save($request, $kind);
    }

    public function update(SaveDirectoryRequest $request, string $kind, int $record): JsonResponse
    {
        return $this->save($request, $kind, $record);
    }

    private function save(SaveDirectoryRequest $request, string $kind, ?int $id = null): JsonResponse
    {
        try {
            $model = DB::transaction(function () use ($request, $kind, $id) {
                // Serialize hierarchy edits so concurrent reparenting cannot form a cycle.
                if ($kind === 'categories') {
                    ConcoursCategory::orderBy('id')->lockForUpdate()->get();
                }
                $class = $this->directory->model($kind);
                $model = $id ? $class::lockForUpdate()->findOrFail($id) : new $class;
                if ($id) {
                    $this->authorize('update', $model);
                }
                $data = $request->validated();
                if ($kind === 'categories') {
                    $parent = isset($data['parent_id']) ? (int) $data['parent_id'] : null;
                    $seen = [];
                    while ($parent !== null) {
                        if ($parent === $id || isset($seen[$parent])) {
                            throw ValidationException::withMessages(['parent_id' => 'A category cannot be its own ancestor.']);
                        }
                        $seen[$parent] = true;
                        $parent = ConcoursCategory::findOrFail($parent)->parent_id;
                    }
                }
                $model->fill($data);
                if ($kind === 'concours') {
                    $model->validateSessionPolicy();
                    if ($id && $model->isDirty('slug')) {
                        throw ValidationException::withMessages(['slug' => 'The permanent concours URL cannot change.']);
                    }
                }
                $model->save();
                if ($kind === 'concours') {
                    $model->load(['category', 'institution', 'preparationOptions']);
                }

                return $model;
            }, 3);
        } catch (QueryException $exception) {
            // Validation can race another write; keep database constraints authoritative.
            if ($exception->getCode() === '23505' || str_contains($exception->getMessage(), 'UNIQUE constraint')) {
                throw ValidationException::withMessages(['slug' => 'This slug is already in use.']);
            }
            if ($exception->getCode() === '23503' || str_contains($exception->getMessage(), 'FOREIGN KEY constraint')) {
                return ApiResponse::error('A related record changed. Refresh the form and try again.', null, 409);
            }
            throw $exception;
        }
        $resource = $this->directory->resource($kind);

        return ApiResponse::success(new $resource($model), 'Record saved successfully.', $id ? 200 : 201);
    }

    public function destroy(string $kind, int $record): JsonResponse
    {
        try {
            return DB::transaction(function () use ($kind, $record) {
                $model = $this->directory->model($kind)::lockForUpdate()->findOrFail($record);
                $this->authorize('delete', $model);
                if (($kind === 'categories' && ($model->children()->exists() || $model->concours()->exists()))
                    || ($kind === 'institutions' && $model->concours()->exists())) {
                    return ApiResponse::error('This record is referenced. Deactivate it or reassign its references first.', null, 409);
                }
                $model->delete();

                return ApiResponse::success(null, 'Record deleted successfully.');
            });
        } catch (QueryException $exception) {
            // The FK remains the final protection if a reference was created concurrently.
            if (in_array($exception->getCode(), ['23503', '23000'], true)) {
                return ApiResponse::error('This record is referenced and cannot be deleted.', null, 409);
            }
            throw $exception;
        }
    }

    public function savePreparationOption(SavePreparationOptionRequest $request, int $record, ?int $option = null): JsonResponse
    {
        $concours = DB::transaction(function () use ($request, $record, $option) {
            $concours = Concours::lockForUpdate()->findOrFail($record);
            $this->authorize('update', $concours);
            $item = $option ? $concours->preparationOptions()->findOrFail($option) : new ConcoursPreparationOption;
            $data = $request->validated();
            $parent = isset($data['parent_id']) ? $concours->preparationOptions()->find($data['parent_id']) : null;
            // Two levels suffice for a track and optional specialty. Never reuse categories.
            if (isset($data['parent_id']) && (! $parent || $parent->parent_id !== null || $parent->id === $item->id || ($item->exists && $item->children()->exists()))) {
                throw ValidationException::withMessages(['parent_id' => 'Choose a root option from this concours. Only one optional parent level is supported.']);
            }
            $item->fill($data);
            $concours->preparationOptions()->save($item);

            return $concours;
        }, 3);

        return ApiResponse::success(ConcoursPreparationOptionResource::collection($concours->preparationOptions()->get()), 'Preparation option saved.', $option ? 200 : 201);
    }
}
