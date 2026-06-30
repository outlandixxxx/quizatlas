<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthService
{
    /**
     * Register a new user.
     */
    public function register(array $data): array
    {
        $user = User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => Hash::make($data['password']),
            'role'     => 'user',
        ]);

        $token = Auth::login($user);

        return [
            'user'  => $user,
            'token' => $token,
        ];
    }

    /**
     * Login user.
     */
    public function login(array $credentials): string
    {
        if (! $token = Auth::attempt($credentials)) {
            abort(401, 'Invalid email or password.');
        }

        return $token;
    }

    /**
     * Logout current user.
     */
    public function logout(): void
    {
        Auth::logout();
    }

    /**
     * Get authenticated user.
     */
    public function me(): User
    {
        return Auth::user();
    }

    /**
     * Refresh JWT token.
     */
    public function refresh(): string
    {
        return Auth::refresh();
    }
}