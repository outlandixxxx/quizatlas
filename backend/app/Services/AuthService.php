<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Arr;

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
    'xp'       => 0,
    'current_streak' => 0,
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
            $token = Auth::attempt(Arr::only($credentials, ['email', 'password']));

            if (! $token) {
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


    /**
 * Send password reset link.
 */
public function forgotPassword(string $email): void
{
    Password::sendResetLink([
        'email' => $email,
    ]);
}

/**
 * Reset password.
 */
public function resetPassword(array $data): void
{
    $status = Password::reset(
        $data,
        function (User $user, string $password) {
            $user->forceFill([
                'password' => Hash::make($password),
                'remember_token' => Str::random(60),
                'password_changed_at' => now(),
            ])->save();

            event(new PasswordReset($user));
        }
    );

    if ($status !== Password::PASSWORD_RESET) {
        abort(422, __($status));
    }
}


/**
 * Find or create a user from a verified social provider payload,
 * and log them in.
 */
public function loginOrRegisterSocial(string $provider, string $providerId, string $email, string $name): array
{
    $user = User::where('provider', $provider)
        ->where('provider_id', $providerId)
        ->first();

    if (! $user) {
        // Link to an existing account with the same email (e.g. registered via password before)
        $user = User::where('email', $email)->first();

        if ($user) {
            $user->forceFill([
                'provider'    => $provider,
                'provider_id' => $providerId,
            ])->save();
        } else {
            $user = User::create([
                'name'        => $name,
                'email'       => $email,
                'password'    => Hash::make(Str::random(40)),
                'role'        => 'user',
                'provider'    => $provider,
                'provider_id' => $providerId,
            ]);
        }
    }

    $token = Auth::login($user);

    return [
        'user'  => $user,
        'token' => $token,
    ];
}
}