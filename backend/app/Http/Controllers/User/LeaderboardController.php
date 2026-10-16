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
        $validated = $request->validate([
            'scope'      => 'sometimes|string|in:global,friends,country',
            'period'     => 'sometimes|string|in:all,week,month',
            'major_id'   => 'sometimes|integer|exists:majors,id',
            'subject_id' => 'sometimes|integer|exists:subjects,id',
            'per_page'   => 'sometimes|integer|min:1|max:50',
        ]);

        $result = $this->leaderboardService->list([
            'scope'      => $validated['scope'] ?? 'global',
            'country'    => '',
            'major_id'   => $validated['major_id'] ?? 0,
            'subject_id' => $validated['subject_id'] ?? 0,
            'period'     => $validated['period'] ?? 'all',
            'per_page'   => $validated['per_page'] ?? 10,
        ], auth()->id());

        return ApiResponse::success($result);
    }

    public function myRank()
    {
        return ApiResponse::success($this->leaderboardService->myRank(auth()->id()));
    }
}