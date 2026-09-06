<?php

namespace App\Services;

use App\Models\ChatConversation;
use App\Models\ChatMessage;
use App\Models\Friendship;
use App\Models\Notification;
use Illuminate\Support\Facades\DB;

class ChatService
{
    public function areFriends(int $userA, int $userB): bool
    {
        return Friendship::where('status', 'accepted')
            ->where(function ($q) use ($userA, $userB) {
                $q->where('user_id', $userA)->where('friend_id', $userB);
            })
            ->orWhere(function ($q) use ($userA, $userB) {
                $q->where('user_id', $userB)->where('friend_id', $userA);
            })
            ->exists();
    }

    public function findOrCreateConversation(int $userA, int $userB): ChatConversation
    {
        [$one, $two] = $userA < $userB ? [$userA, $userB] : [$userB, $userA];

        return ChatConversation::firstOrCreate([
            'user_one_id' => $one,
            'user_two_id' => $two,
        ]);
    }

    public function sendMessage(ChatConversation $conversation, int $senderId, string $body): ChatMessage
    {
        $recipientId = $conversation->otherUser($senderId)?->id;

        $message = DB::transaction(function () use ($conversation, $senderId, $body) {
            $message = ChatMessage::create([
                'conversation_id' => $conversation->id,
                'sender_id' => $senderId,
                'body' => $body,
            ]);

            $conversation->update([
                'last_message_at' => $message->created_at,
                'last_message_preview' => mb_substr($body, 0, 150),
            ]);

            return $message;
        });

    if ($recipientId) {
    $sender = \App\Models\User::find($senderId);

    Notification::create([
        'user_id' => $recipientId,
        'type' => 'new_message',
        'data' => [
            'conversation_id' => $conversation->id,
            'from_user_id' => $senderId,
            'from_user_name' => $sender?->name,
        ],
    ]);
}

        return $message;
    }

    public function markConversationRead(ChatConversation $conversation, int $readerId): void
    {
        ChatMessage::where('conversation_id', $conversation->id)
            ->where('sender_id', '!=', $readerId)
            ->unread()
            ->update(['read_at' => now()]);
    }

    public function totalUnreadCount(int $userId): int
    {
        return ChatMessage::whereHas('conversation', function ($q) use ($userId) {
                $q->where('user_one_id', $userId)->orWhere('user_two_id', $userId);
            })
            ->where('sender_id', '!=', $userId)
            ->unread()
            ->count();
    }
}