<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Models\Achievement;
use App\Models\User;

class ProgressionShowcaseController extends Controller
{
    public function index()
    {
        return ApiResponse::success([
            'levels' => User::levelThresholds(6),
            'achievements' => Achievement::query()
                ->select(['key', 'title', 'description', 'icon', 'xp_reward'])
                ->orderByDesc('xp_reward')
                ->take(4)
                ->get(),
        ]);
    }
}