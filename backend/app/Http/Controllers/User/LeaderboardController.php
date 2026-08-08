<?php

namespace App\Http\Controllers\User;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Services\LeaderboardService;
use Illuminate\Http\Request;

class LeaderboardController extends Controller
{
    public function __construct(protected LeaderboardService $leaderboardService) {}

    public function index(Request $request)
    {
        $result = $this->leaderboardService->list([
            'scope' => $request->string('scope', 'global'),
            'country' => $request->string('country'),
            'major_id' => $request->integer('major_id'),
            'subject_id' => $request->integer('subject_id'),
            'period' => $request->string('period', 'all'),
            'per_page' => $request->integer('per_page', 10),
        ], auth()->id());

        return ApiResponse::success($result);
    }

    public function myRank()
    {
        return ApiResponse::success($this->leaderboardService->myRank(auth()->id()));
    }
}