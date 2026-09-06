<?php

namespace App\Http\Controllers\Api;


use App\Helpers\ApiResponse;
use App\Models\Notification;
use App\Http\Controllers\Controller;


class NotificationController extends Controller
{
    public function index()
    {
        $notifications = Notification::where('user_id', auth()->id())
            ->latest()
            ->limit(20)
            ->get();

        return ApiResponse::success($notifications);
    }

    public function unreadCount()
    {
        $count = Notification::where('user_id', auth()->id())->unread()->count();

        return ApiResponse::success(['count' => $count]);
    }

    public function markRead(Notification $notification)
    {
        if ($notification->user_id !== auth()->id()) {
            return ApiResponse::error('Not authorized.', null, 403);
        }

        $notification->update(['read_at' => now()]);

        return ApiResponse::success(['status' => 'read']);
    }

    public function markAllRead()
    {
        Notification::where('user_id', auth()->id())->unread()->update(['read_at' => now()]);

        return ApiResponse::success(['status' => 'all_read']);
    }
}