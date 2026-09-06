<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Models\BlogAsk;
use App\Models\BlogResponse;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogResponseController extends Controller
{
    public function store(Request $request, BlogAsk $ask)
    {
       $validated = $request->validate(['body' => 'required|string|max:5000']);
$validated['body'] = trim($validated['body']);

if ($validated['body'] === '') {
    return ApiResponse::error('Answer cannot be empty.', null, 422);
}

        $response = DB::transaction(function () use ($validated, $ask) {
            $response = BlogResponse::create([
                'blog_ask_id' => $ask->id,
                'author_id' => auth()->id(),
                'body' => $validated['body'],
            ]);

            $ask->increment('responses_count');

            return $response;
        });

        // Notify the asker, unless they answered their own question
        if ($ask->author_id !== auth()->id()) {
            Notification::create([
                'user_id' => $ask->author_id,
                'type' => 'blog_response',
                'data' => [
                    'ask_id' => $ask->id,
                    'ask_title' => $ask->title,
                    'from_user_id' => auth()->id(),
                    'from_user_name' => auth()->user()->name,
                ],
            ]);
        }

        return ApiResponse::success($response->load('author:id,name,avatar_url,xp'), 201);
    }

    public function accept(BlogAsk $ask, BlogResponse $response)
    {
        if ($ask->author_id !== auth()->id()) {
            return ApiResponse::error('Only the question author can accept an answer.', null, 403);
        }

        if ($response->blog_ask_id !== $ask->id) {
            return ApiResponse::error('This answer does not belong to this question.', null, 422);
        }

        DB::transaction(function () use ($ask, $response) {
            // Unaccept any previously accepted answer on this ask first
            BlogResponse::where('blog_ask_id', $ask->id)
                ->where('is_accepted', true)
                ->update(['is_accepted' => false]);

            $response->update(['is_accepted' => true]);
        });

        if ($response->author_id !== auth()->id()) {
            Notification::create([
                'user_id' => $response->author_id,
                'type' => 'blog_answer_accepted',
                'data' => [
                    'ask_id' => $ask->id,
                    'ask_title' => $ask->title,
                    'from_user_id' => auth()->id(),
                ],
            ]);
        }

        return ApiResponse::success(['status' => 'accepted']);
    }
}