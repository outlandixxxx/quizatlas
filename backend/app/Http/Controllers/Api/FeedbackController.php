<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class FeedbackController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'email' => 'required|email|max:255',
            'type' => 'required|in:bug,suggestion,other',
            'message' => 'required|string|max:1000',
        ]);

        Feedback::create([
            ...$validated,
            'user_id' => $request->user()?->id,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Thanks for your feedback!',
        ]);
    }
}