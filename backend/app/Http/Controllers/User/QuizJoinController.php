<?php

namespace App\Http\Controllers\User;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\QuizShareResource;
use App\Services\TeacherShareService;
use Illuminate\Http\Request;

class QuizJoinController extends Controller
{
    public function __construct(protected TeacherShareService $service) {}

    public function join(Request $request)
    {
        $data = $request->validate(['join_code' => 'required|string|max:8']);

        $share = $this->service->join(auth()->user(), $data['join_code']);

        return ApiResponse::success(new QuizShareResource($share), 'Joined successfully.');
    }
}