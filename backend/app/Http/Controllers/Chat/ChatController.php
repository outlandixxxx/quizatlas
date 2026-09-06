<?php

namespace App\Http\Controllers\Chat;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Models\ChatConversation;
use App\Models\User;
use App\Services\ChatService;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function __construct(protected ChatService $chatService) {}

    /**
     * List all conversations for the current user, newest activity first.
     */
 public function index(Request $request)
{
    $validated = $request->validate([
        'per_page' => 'sometimes|integer|min:1|max:50',
        'page' => 'sometimes|integer|min:1',
        'search' => 'sometimes|string|max:100',
    ]);

    $userId = auth()->id();
    $search = $validated['search'] ?? null;

    $query = ChatConversation::where(function ($q) use ($userId) {
            $q->where('user_one_id', $userId)->orWhere('user_two_id', $userId);
        })
        ->whereNotNull('last_message_at')
        ->with(['userOne:id,name,avatar_url', 'userTwo:id,name,avatar_url'])
        ->withCount(['messages as unread_count' => function ($q) use ($userId) {
            $q->where('sender_id', '!=', $userId)->whereNull('read_at');
        }]);

    if ($search) {
        $escaped = str_replace(['\\', '%', '_'], ['\\\\', '\%', '\_'], $search);

        $query->whereHas('userOne', fn ($q) => $q->where('name', 'like', "%{$escaped}%"))
            ->orWhereHas('userTwo', fn ($q) => $q->where('name', 'like', "%{$escaped}%"));
    }

    $paginated = $query->orderByDesc('last_message_at')->paginate($validated['per_page'] ?? 20);

    $items = collect($paginated->items())->map(function (ChatConversation $c) use ($userId) {
        $other = $c->otherUser($userId);

        return [
            'id' => $c->id,
            'user' => [
                'id' => $other?->id,
                'name' => $other?->name,
                'avatar_url' => $other?->avatar_url,
            ],
            'last_message_preview' => $c->last_message_preview,
            'last_message_at' => $c->last_message_at,
            'unread_count' => $c->unread_count,
        ];
    });

    return ApiResponse::success([
        'items' => $items->values()->all(),
        'meta' => [
            'current_page' => $paginated->currentPage(),
            'last_page' => $paginated->lastPage(),
            'per_page' => $paginated->perPage(),
            'total' => $paginated->total(),
        ],
    ]);
}

    /**
     * Open (or create) the conversation with a given friend, and return its
     * message history. Creating a conversation record requires friendship;
     * viewing an existing one does not (so history survives an unfriend).
     */
    public function show(User $user)
    {
        $myId = auth()->id();

        if ($user->id === $myId) {
            return ApiResponse::error('Cannot message yourself.', null, 422);
        }

        $existing = $this->chatService->findOrCreateConversation($myId, $user->id);

        // findOrCreateConversation only creates a row if one doesn't exist yet —
        // gate the *creation* path behind friendship, but let an existing
        // conversation (even with an ex-friend) remain viewable.
        $wasJustCreated = $existing->wasRecentlyCreated;

        if ($wasJustCreated && !$this->chatService->areFriends($myId, $user->id)) {
            $existing->delete();
            return ApiResponse::error('You can only message friends.', null, 403);
        }

        $this->chatService->markConversationRead($existing, $myId);

        $messages = $existing->messages()
            ->with('sender:id,name,avatar_url')
            ->orderBy('created_at')
            ->get();

        return ApiResponse::success([
            'conversation_id' => $existing->id,
            'user' => [
                'id' => $user->id,
                'name' => $user->name,
                'avatar_url' => $user->avatar_url,
            ],
            'can_send' => $this->chatService->areFriends($myId, $user->id),
            'messages' => $messages,
        ]);
    }

    /**
     * Poll for new messages since a given message id — used by the frontend's
     * lightweight polling loop instead of re-fetching full history.
     *
     * Uses a manual lookup instead of route-model-binding so that "doesn't
     * exist" and "exists but isn't yours" return an identical 404 — avoids
     * a 404-vs-403 oracle for probing valid conversation IDs.
     */
    public function poll(int $conversationId, Request $request)
    {
        $myId = auth()->id();
        $conversation = ChatConversation::find($conversationId);

        if (!$conversation || !$conversation->hasParticipant($myId)) {
            return ApiResponse::error('Conversation not found.', null, 404);
        }

        $sinceId = $request->integer('since_id', 0);

        $messages = $conversation->messages()
            ->with('sender:id,name,avatar_url')
            ->where('id', '>', $sinceId)
            ->orderBy('created_at')
            ->get();

        if ($messages->isNotEmpty()) {
            $this->chatService->markConversationRead($conversation, $myId);
        }

        return ApiResponse::success($messages);
    }

    public function store(int $conversationId, Request $request)
    {
        $myId = auth()->id();
        $conversation = ChatConversation::find($conversationId);

        if (!$conversation || !$conversation->hasParticipant($myId)) {
            return ApiResponse::error('Conversation not found.', null, 404);
        }

        $otherUserId = $conversation->otherUser($myId)?->id;

        if (!$otherUserId || !$this->chatService->areFriends($myId, $otherUserId)) {
            return ApiResponse::error('You can only message friends.', null, 403);
        }

        $validated = $request->validate(['body' => 'required|string|max:3000']);
        $validated['body'] = trim($validated['body']);

        if ($validated['body'] === '') {
            return ApiResponse::error('Message cannot be empty.', null, 422);
        }

        $message = $this->chatService->sendMessage($conversation, $myId, $validated['body']);

        return ApiResponse::success($message->load('sender:id,name,avatar_url'), 201);
    }

    public function unreadCount()
    {
        return ApiResponse::success(['count' => $this->chatService->totalUnreadCount(auth()->id())]);
    }
}