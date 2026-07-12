<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Subject\StoreSubjectRequest;
use App\Http\Requests\Subject\UpdateSubjectRequest;
use App\Models\Subject;
use App\Services\SubjectService;
use Illuminate\Http\JsonResponse;
use App\Http\Resources\SubjectResource;


class SubjectController extends Controller
{
    public function __construct(
        private readonly SubjectService $subjectService
    ) {}

    /**
     * Display all subjects.
     */
   public function index(): JsonResponse
{
    $perPage = request()->integer('per_page', 10);

    $subjects = $this->subjectService->all($perPage);

    return ApiResponse::success(
        SubjectResource::collection($subjects),
        'Subjects retrieved successfully.'
    );
}

    /**
     * Store a new subject.
     */
    public function store(StoreSubjectRequest $request): JsonResponse
    {
        $subject = $this->subjectService->create($request->validated());

        return ApiResponse::success(
    new SubjectResource($subject->load('major')),
    'Subject created successfully.',
    201
);
    }

    /**
     * Display a single subject.
     */
    public function show(Subject $subject): JsonResponse
    {
       return ApiResponse::success(
    new SubjectResource($this->subjectService->find($subject)),
    'Subject retrieved successfully.'
);
    }

    /**
     * Update a subject.
     */
    public function update(UpdateSubjectRequest $request, Subject $subject): JsonResponse
    {
        $subject = $this->subjectService->update($subject, $request->validated());

      return ApiResponse::success(
    new SubjectResource($subject),
    'Subject updated successfully.'
);
    }

    /**
     * Delete a subject.
     */
    public function destroy(Subject $subject): JsonResponse
    {
        $this->subjectService->delete($subject);

        return ApiResponse::success(
            null,
            'Subject deleted successfully.'
        );
    }
}