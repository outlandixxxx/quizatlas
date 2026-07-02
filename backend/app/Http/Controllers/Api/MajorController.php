<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Major\StoreMajorRequest;
use App\Http\Requests\Major\UpdateMajorRequest;
use App\Models\Major;
use App\Services\MajorService;
use Illuminate\Http\JsonResponse;

class MajorController extends Controller
{
    public function __construct(
        private readonly MajorService $majorService
    ) {}

    public function index(): JsonResponse
    {
        return ApiResponse::success(
            $this->majorService->all(),
            'Majors retrieved successfully.'
        );
    }

    public function store(StoreMajorRequest $request): JsonResponse
    {
        $major = $this->majorService->create($request->validated());

        return ApiResponse::success(
            $major,
            'Major created successfully.',
            201
        );
    }

    public function show(Major $major): JsonResponse
    {
        return ApiResponse::success(
            $this->majorService->find($major),
            'Major retrieved successfully.'
        );
    }

    public function update(UpdateMajorRequest $request, Major $major): JsonResponse
    {
        $major = $this->majorService->update($major, $request->validated());

        return ApiResponse::success(
            $major,
            'Major updated successfully.'
        );
    }

    public function destroy(Major $major): JsonResponse
    {
        $this->majorService->delete($major);

        return ApiResponse::success(
            null,
            'Major deleted successfully.'
        );
    }
}