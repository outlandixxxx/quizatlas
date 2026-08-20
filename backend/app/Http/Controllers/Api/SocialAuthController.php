<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Services\AuthService;
use App\Http\Resources\Auth\UserResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SocialAuthController extends Controller
{
    public function __construct(
        private readonly AuthService $authService
    ) {}

    /**
     * Login/Register via Google (ID token issued by Google Identity Services on the frontend).
     */
    public function google(Request $request): JsonResponse
    {
        $request->validate([
            'credential' => 'required|string',
        ]);

        // Verify the ID token directly with Google — never trust the frontend payload alone.
        $response = Http::get('https://oauth2.googleapis.com/tokeninfo', [
            'id_token' => $request->input('credential'),
        ]);

        if ($response->failed()) {
            return ApiResponse::error('Invalid Google token.', null, 401);
        }

        $payload = $response->json();

        // Confirm the token was issued for OUR app, not some other client.
        if (($payload['aud'] ?? null) !== config('services.google.client_id')) {
            return ApiResponse::error('Invalid Google token audience.', null, 401);
        }

        if (empty($payload['email_verified']) || $payload['email_verified'] !== 'true') {
            return ApiResponse::error('Google email not verified.', null, 401);
        }

        $result = $this->authService->loginOrRegisterSocial(
            provider: 'google',
            providerId: $payload['sub'],
            email: $payload['email'],
            name: $payload['name'] ?? explode('@', $payload['email'])[0],
        );

        return ApiResponse::success(
            [
                'user' => new UserResource($result['user']),
                'access_token' => $result['token'],
                'token_type' => 'Bearer',
                'expires_in' => auth()->factory()->getTTL() * 60,
            ],
            'Google login successful.'
        );
    }

    public function facebook(Request $request): JsonResponse
{
    $request->validate([
        'access_token' => 'required|string',
    ]);

    // Verify the token by asking Facebook directly for the profile it belongs to.
    $response = Http::get('https://graph.facebook.com/me', [
        'fields' => 'id,name,email',
        'access_token' => $request->input('access_token'),
    ]);

    if ($response->failed()) {
        return ApiResponse::error('Invalid Facebook token.', null, 401);
    }

    $payload = $response->json();

    if (empty($payload['email'])) {
        return ApiResponse::error('Facebook account has no verified email.', null, 401);
    }

    $result = $this->authService->loginOrRegisterSocial(
        provider: 'facebook',
        providerId: $payload['id'],
        email: $payload['email'],
        name: $payload['name'] ?? explode('@', $payload['email'])[0],
    );

    return ApiResponse::success(
        [
            'user' => new UserResource($result['user']),
            'access_token' => $result['token'],
            'token_type' => 'Bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
        ],
        'Facebook login successful.'
    );
}
}