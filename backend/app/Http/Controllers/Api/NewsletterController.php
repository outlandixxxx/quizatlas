<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class NewsletterController extends Controller
{
    public function subscribe(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'email' => 'required|email|max:255',
        ]);

        $subscriber = Subscriber::firstOrCreate(['email' => $validated['email']]);

        return response()->json([
            'success' => true,
            'message' => $subscriber->wasRecentlyCreated
                ? 'Subscribed successfully!'
                : 'You\'re already subscribed.',
        ]);
    }
}