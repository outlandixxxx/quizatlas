<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     * Pass allowed roles as parameters: e.g. role:admin,manager
     */
    public function handle(Request $request, Closure $next, string ...$roles): Response
    {
        if (!auth()->check()) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthenticated.',
                'data' => null,
                'errors' => null,
            ], 401);
        }

        if (!in_array(auth()->user()->role, $roles, true)) {
            return response()->json([
                'success' => false,
                'message' => 'Forbidden. Insufficient permissions.',
                'data' => null,
                'errors' => null,
            ], 403);
        }

        return $next($request);
    }
}