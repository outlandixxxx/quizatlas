<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureTokenIssuedAfterPasswordChange
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = auth()->user();

        if ($user && $user->password_changed_at) {
            $issuedAt = auth()->payload()->get('iat'); // unix timestamp, from the JWT itself

            if ($issuedAt < $user->password_changed_at->timestamp) {
                return response()->json([
                    'success' => false,
                    'message' => 'Your session has expired because your password was changed. Please log in again.',
                ], 401);
            }
        }

        return $next($request);
    }
}