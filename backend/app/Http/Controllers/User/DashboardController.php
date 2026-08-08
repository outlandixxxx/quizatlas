<?php

namespace App\Http\Controllers\User;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\DashboardResource;
use App\Services\DashboardService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct(
        private readonly DashboardService $dashboardService
    ) {
    }

    public function __invoke(Request $request): JsonResponse
    {
        $dashboard = $this->dashboardService->getDashboard($request->user());

        return ApiResponse::success(
            new DashboardResource($dashboard),
            'Dashboard loaded successfully.'
        );
    }
}