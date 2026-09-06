<?php

namespace App\Http\Controllers\User;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserSearchController extends Controller
{

public function index(Request $request)
{
    $query = trim((string) $request->query('q', ''));

    if (mb_strlen($query) < 2) {
        return ApiResponse::success([]);
    }

    $escaped = str_replace(['\\', '%', '_'], ['\\\\', '\%', '\_'], $query);

    $usersQuery = User::where('name', 'like', "%{$escaped}%");

    if (auth()->id()) {
        $usersQuery->where('id', '!=', auth()->id());
    }

    $users = $usersQuery->limit(10)->get(['id', 'name', 'avatar_url']);

    return ApiResponse::success($users);
}
}