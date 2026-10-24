<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\Support\SeededCommunity;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    private const PASSWORD = 'Password**1991';

    public function run(): void
    {
        $password = Hash::make(self::PASSWORD);

        DB::transaction(function () use ($password): void {
            $this->seedUser('System Administrator', 'admin', 'admin@maroquiz.test', 'admin', $password);
            $this->seedUser('Manager User', 'manager', 'manager@maroquiz.com', 'manager', $password);

            foreach (SeededCommunity::students() as $index => $student) {
                $profile = SeededCommunity::activity($index);
                $this->seedUser($student['name'], $student['username'], $student['email'], 'user', $password, [
                    'country' => $profile['country'],
                    'avatar_url' => $profile['avatar_url'],
                    'bio' => $profile['bio'],
                ]);
            }
        });
    }

    private function seedUser(string $name, string $username, string $email, string $role, string $password, array $profile = []): void
    {
        $user = User::firstOrNew(['email' => $email]);
        // A fixture email must never demote an account with a different role.
        if ($user->exists && $user->role !== $role) {
            return;
        }

        $user->name = $name;
        $user->username = $this->availableUsername($username, $email);

        if (! $user->exists) {
            $user->forceFill($profile + [
                'password' => $password,
                'role' => $role,
                'email_verified_at' => now(),
                'xp' => 0,
                'current_streak' => 0,
            ]);
        }

        // Existing passwords, profiles, earned XP and history survive a rerun.
        $user->save();
    }

    private function availableUsername(string $desired, string $email): string
    {
        $candidate = $desired;
        for ($suffix = 2; User::whereRaw('LOWER(username) = ?', [strtolower($candidate)])->where('email', '!=', $email)->exists(); $suffix++) {
            $candidate = substr($desired, 0, 20 - strlen((string) $suffix)).$suffix;
        }

        return $candidate;
    }
}
