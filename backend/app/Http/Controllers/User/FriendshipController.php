<?php

namespace App\Http\Controllers\User;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Models\Friendship;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    /**
     * Send (or reciprocate) a friend request.
     *
     * Note: $userId is intentionally an int, NOT a bound User model — implicit
     * route-model-binding would 404 automatically for a nonexistent ID before
     * this method even runs, creating a 404-vs-200 oracle that lets anyone
     * enumerate valid user IDs (L4). Looking the user up manually lets us
     * return an identical response either way.
     */
    public function request(int $userId)
    {
        if ($userId === auth()->id()) {
            return ApiResponse::error('Unable to send friend request.', null, 422);
        }

        $user = User::find($userId);

        if (! $user) {
            // Same status/message as every other failure path below —
            // an attacker cannot distinguish "doesn't exist" from
            // "self-friend" from "already friends" (L4).
            return ApiResponse::error('Unable to send friend request.', null, 422);
        }

        return DB::transaction(function () use ($user) {
            $myId = auth()->id();

            // Lock any existing row in EITHER direction before deciding what
            // to do — closes the gap where A requests B, then B requests A
            // before either sees the other's row, producing two rows instead
            // of one accepted friendship (L7).
            $existing = Friendship::where(function ($q) use ($myId, $user) {
                    $q->where('user_id', $myId)->where('friend_id', $user->id);
                })
                ->orWhere(function ($q) use ($myId, $user) {
                    $q->where('user_id', $user->id)->where('friend_id', $myId);
                })
                ->lockForUpdate()
                ->first();

            if ($existing) {
                // They already sent us a pending request — reciprocating
                // accepts it instead of creating a duplicate reversed row.
             
                 if ($existing->status === 'pending' && $existing->friend_id === $myId) {
                $existing->update(['status' => 'accepted']);

                \App\Models\Notification::create([
                    'user_id' => $existing->user_id,
                    'type' => 'friend_accepted',
                    'data' => [
                        'from_user_id' => $myId,
                        'from_user_name' => auth()->user()->name,
                    ],
                ]);

                return ApiResponse::success(['status' => 'accepted']);
            }

            }

           $friendship = Friendship::create([
                'user_id' => $myId,
                'friend_id' => $user->id,
                'status' => 'pending',
            ]);

            \App\Models\Notification::create([
                'user_id' => $user->id,
                'type' => 'friend_request',
                'data' => [
                    'from_user_id' => $myId,
                    'from_user_name' => auth()->user()->name,
                ],
            ]);

            return ApiResponse::success(['status' => $friendship->status]);


           


          
        });
    }

    public function respond(Friendship $friendship, Request $request)
    {
        if ($friendship->friend_id !== auth()->id()) {
            return ApiResponse::error('Not authorized.', null, 403);
        }

        $validated = $request->validate(['accept' => 'required|boolean']);

                           // in FriendshipController::respond(), the accept branch:
            if ($validated['accept']) {
                $friendship->update(['status' => 'accepted']);

                \App\Models\Notification::create([
                    'user_id' => $friendship->user_id,
                    'type' => 'friend_accepted',
                    'data' => [
                        'from_user_id' => auth()->id(),
                        'from_user_name' => auth()->user()->name,
                    ],
                ]);

                return ApiResponse::success(['status' => 'accepted']);
            }

        $friendship->delete();
        return ApiResponse::success(['status' => 'rejected']);



    }
}