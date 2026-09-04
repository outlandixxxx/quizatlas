<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Resources\Auth\UserResource;
use App\Services\AuthService;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\Auth\ForgotPasswordRequest;
use App\Http\Requests\Auth\ResetPasswordRequest;
use Illuminate\Support\Arr;


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
    $result = $this->authService->register($request->validated());

    return ApiResponse::success(
        [
            'user' => new UserResource($result['user']),
            'access_token' => $result['token'],
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
    $token = $this->authService->login($request->validated());

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
 * Send password reset link.
 */
public function forgotPassword(
    ForgotPasswordRequest $request
): JsonResponse {

    $this->authService->forgotPassword(
        $request->validated()['email']
    );

    return ApiResponse::success(
        null,
        'Password reset link sent successfully.'
    );

}

/**
 * Reset password.
 */
public function resetPassword(
    ResetPasswordRequest $request
): JsonResponse {

    $this->authService->resetPassword(
        $request->validated()
    );

    return ApiResponse::success(
        null,
        'Password reset successfully.'
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