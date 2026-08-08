<?php

namespace App\Http\Controllers\User;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Services\AchievementService;

class AchievementController extends Controller
{
    public function __construct(protected AchievementService $achievementService) {}

    public function index()
    {
        return ApiResponse::success(
            $this->achievementService->listForUser(auth()->user())
        );
    }
}