<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Resources\Auth\UserResource;
use App\Services\AuthService;
use Illuminate\Http\JsonResponse;

class AuthController extends Controller
{
    public function __construct(
        private readonly AuthService $authService
    ) {}

    /**
     * Register a new user.
     */
   public function register(RegisterRequest $request): JsonResponse
{
    $user = $this->authService->register($request->validated());

    $token = auth()->login($user);

    return ApiResponse::success(
        [
            'user' => new UserResource($user),
            'access_token' => $token,
            'token_type' => 'Bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
        ],
        'Registration successful.',
        201
    );
}

    /**
     * Login user.
     */
public function login(LoginRequest $request): JsonResponse
{
    $credentials = $request->validated();

    if (! $token = auth()->attempt($credentials)) {
        return ApiResponse::error(
            'Invalid email or password.',
            null,
            401
        );
    }

    return ApiResponse::success(
        [
            'user' => new UserResource(auth()->user()),
            'access_token' => $token,
            'token_type' => 'Bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
        ],
        'Login successful.'
    );
}  

    /**
     * Get authenticated user.
     */
   public function me(): JsonResponse
{
    return ApiResponse::success(
        new UserResource(auth()->user()),
        'Authenticated user retrieved successfully.'
    );
}

    /**
     * Refresh token.
     */
   public function refresh(): JsonResponse
{
    $token = auth()->refresh();

    return ApiResponse::success(
        [
            'user' => new UserResource(auth()->user()),
            'access_token' => $token,
            'token_type' => 'Bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
        ],
        'Token refreshed successfully.'
    );
}

    /**
     * Logout user.
     */
public function logout(): JsonResponse
{
    auth()->logout();

    return ApiResponse::success(
        null,
        'Successfully logged out.'
    );
}
}