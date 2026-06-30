<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
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
        $result = $this->authService->register($request->validated());

        return ApiResponse::success(
            $result,
            'User registered successfully.',
            201
        );
    }

    /**
     * Login user.
     */
public function login(LoginRequest $request): JsonResponse
{
    $token = $this->authService->login($request->validated());

    return response()->json([
        'token' => $token,
    ]);
}   

    /**
     * Get authenticated user.
     */
    public function me(): JsonResponse
    {
        return ApiResponse::success(
            $this->authService->me(),
            'User retrieved successfully.'
        );
    }

    /**
     * Refresh token.
     */
    public function refresh(): JsonResponse
    {
        return ApiResponse::success(
            ['token' => $this->authService->refresh()],
            'Token refreshed successfully.'
        );
    }

    /**
     * Logout user.
     */
    public function logout(): JsonResponse
    {
        $this->authService->logout();

        return ApiResponse::success(
            null,
            'Logged out successfully.'
        );
    }
}