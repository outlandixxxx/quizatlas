<?php

namespace App\Http\Controllers\User;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Models\Friendship;
use App\Models\User;
use Illuminate\Http\Request;

class FriendshipController extends Controller
{
    public function index()
    {
        $userId = auth()->id();

        $friends = Friendship::where('status', 'accepted')
            ->where(fn ($q) => $q->where('user_id', $userId)->orWhere('friend_id', $userId))
            ->with(['user', 'friend'])
            ->get()
            ->map(fn ($f) => $f->user_id === $userId ? $f->friend : $f->user);

        return ApiResponse::success($friends->map(fn ($u) => [
            'id' => $u->id, 'name' => $u->name, 'avatar_url' => $u->avatar_url,
        ])->values());
    }

    public function pending()
    {
        $requests = Friendship::where('friend_id', auth()->id())
            ->where('status', 'pending')
            ->with('user')
            ->get();

        return ApiResponse::success($requests->map(fn ($f) => [
            'id' => $f->id, 'from_user_id' => $f->user_id, 'from_user_name' => $f->user->name,
        ]));
    }

    public function request(User $user)
    {
        if ($user->id === auth()->id()) {
            return ApiResponse::error('Cannot friend yourself.', null, 422);
        }

        $friendship = Friendship::firstOrCreate([
            'user_id' => auth()->id(),
            'friend_id' => $user->id,
        ], ['status' => 'pending']);

        return ApiResponse::success(['status' => $friendship->status]);
    }

    public function respond(Friendship $friendship, Request $request)
    {
        if ($friendship->friend_id !== auth()->id()) {
            return ApiResponse::error('Not authorized.', null, 403);
        }

        $validated = $request->validate(['accept' => 'required|boolean']);

        if ($validated['accept']) {
            $friendship->update(['status' => 'accepted']);
            return ApiResponse::success(['status' => 'accepted']);
        }

        $friendship->delete();
        return ApiResponse::success(['status' => 'rejected']);
    }
}