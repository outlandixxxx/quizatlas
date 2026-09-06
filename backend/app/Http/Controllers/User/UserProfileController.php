<?php


//Profile can other users see and send friendship request 

namespace App\Http\Controllers\User;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Models\Friendship;
use App\Models\User;

class UserProfileController extends Controller
{
    public function show(User $user)
    {
        $myId = auth()->id();

        $friendshipStatus = 'none';

        if ($user->id !== $myId) {
            $existing = Friendship::where(function ($q) use ($myId, $user) {
                    $q->where('user_id', $myId)->where('friend_id', $user->id);
                })
                ->orWhere(function ($q) use ($myId, $user) {
                    $q->where('user_id', $user->id)->where('friend_id', $myId);
                })
                ->first();

            if ($existing) {
                if ($existing->status === 'accepted') {
                    $friendshipStatus = 'friends';
                } elseif ($existing->status === 'pending') {
                    $friendshipStatus = $existing->user_id === $myId ? 'pending_sent' : 'pending_received';
                }
            }
        } else {
            $friendshipStatus = 'self';
        }

        $quizzesCompleted = $user->quizAttempts()->where('status', 'submitted')->count();

        return ApiResponse::success([
            'id' => $user->id,
            'name' => $user->name,
            'avatar_url' => $user->avatar_url,
            'level' => $user->level(),
            'xp' => $user->xp,
            'quizzes_completed' => $quizzesCompleted,
            'friendship_status' => $friendshipStatus,
            'friendship_id' => $existing->id ?? null,
        ]);
    }
}