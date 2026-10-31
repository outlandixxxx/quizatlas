<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class ProductionAdminSeeder extends Seeder
{
    public function run(): void
    {
        if (!app()->environment('production')) {
            throw new \RuntimeException('Administrator bootstrap requires an explicit production environment.');
        }
        $data = Validator::make(config('bootstrap_admin'), [
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:150'],
            'username' => ['required', 'string', 'regex:/^[A-Za-z][A-Za-z0-9]{2,19}$/'],
            'password' => ['required', 'string', Password::min(16)->mixedCase()->numbers()->symbols()],
        ])->validate();

        DB::transaction(function () use ($data) {
            $existing = User::whereRaw('LOWER(email) = ?', [strtolower($data['email'])])->lockForUpdate()->first();
            if ($existing) {
                if (!$existing->isAdmin()) {
                    throw ValidationException::withMessages(['email' => 'Bootstrap cannot promote an existing account.']);
                }
                return; // Never rotate credentials or overwrite an existing administrator.
            }
            if (User::whereRaw('LOWER(username) = ?', [strtolower($data['username'])])->exists()) {
                throw ValidationException::withMessages(['username' => 'Choose an unused administrator username.']);
            }
            $user = new User($data + ['role' => 'admin']);
            $user->email_verified_at = now();
            $user->save(); // User's existing hashed-password cast applies.
        });
    }
}
