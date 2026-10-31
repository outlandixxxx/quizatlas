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

        if ($user) {
            $payload = auth()->payload();
            $version = $payload->get('password_version');
            $changedCredentials = $version !== null && (! is_string($version) || ! hash_equals($user->jwtPasswordVersion(), $version));
            // Legacy tokens lack the credential binding and must reauthenticate after a change.
            $changedPassword = $user->password_changed_at && ($version === null || $payload->get('iat') < $user->password_changed_at->timestamp);
            if ($changedCredentials || $changedPassword) {
                return response()->json([
                    'success' => false,
                    'message' => 'Your session has expired because your password was changed. Please log in again.',
                ], 401);
            }
        }

        return $next($request);
    }
}
