<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Choice\StoreChoiceRequest;
use App\Http\Requests\Choice\UpdateChoiceRequest;
use App\Http\Resources\ChoiceResource;
use App\Models\Choice;
use App\Services\ChoiceService;

class ChoiceController extends Controller
{
    public function __construct(
        protected ChoiceService $choiceService
    ) {
    }

   public function index()
{
    $perPage = request()->integer('per_page', 10);

    $choices = $this->choiceService->getAll($perPage);

    return ApiResponse::success(
        ChoiceResource::collection($choices),
        'Choices retrieved successfully.'
    );
}

    public function store(StoreChoiceRequest $request)
    {
        $choice = $this->choiceService->create(
            $request->validated()
        );

        return ApiResponse::success(
            new ChoiceResource($choice),
            'Choice created successfully.',
            201
        );
    }

    public function show(Choice $choice)
    {
        $choice = $this->choiceService->getById($choice);

        return ApiResponse::success(
            new ChoiceResource($choice),
            'Choice retrieved successfully.'
        );
    }

    public function update(UpdateChoiceRequest $request, Choice $choice)
    {
        $choice = $this->choiceService->update(
            $choice,
            $request->validated()
        );

        return ApiResponse::success(
            new ChoiceResource($choice),
            'Choice updated successfully.'
        );
    }

    public function destroy(Choice $choice)
    {
        $this->choiceService->delete($choice);

        return ApiResponse::success(
            null,
            'Choice deleted successfully.'
        );
    }
}