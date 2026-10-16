<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    private const PASSWORD = 'Password**1991';

    public function run(): void
    {
        // Hash once and reuse it (100 separate bcrypt hashes would be slow).
        $password = Hash::make(self::PASSWORD);

        // Administrator and manager
        $this->seedUser('System Administrator', 'admin', 'admin@maroquiz.test', 'admin', $password);
        $this->seedUser('Manager User', 'manager', 'manager@maroquiz.com', 'manager', $password);

        // 100 students
        foreach ($this->students() as [$name, $username, $email]) {
            $this->seedUser($name, $username, $email, 'user', $password);
        }
    }

    private function seedUser(string $name, string $username, string $email, string $role, string $password): void
    {
        // Safe to run more than once: existing users are updated, not duplicated.
        $user = User::firstOrNew(['email' => $email]);
        $isNew = ! $user->exists;

        $user->forceFill([
            'name'              => $name,
            'username'          => $username,
            'password'          => $password,
            'role'              => $role,
            'email_verified_at' => now(),
        ]);

        // Only set on creation, so re-running never wipes leaderboard data.
        if ($isNew) {
            $user->xp = 0;
            $user->current_streak = 0;
        }

        $user->save();
    }

    /**
     * @return array<int, array{0: string, 1: string, 2: string}> [name, username, email]
     */
    private function students(): array
    {
        // The 10 original students
        $students = [
            ['Ahmed Benali',       'ahmed_benali',   'ahmed@maroquiz.test'],
            ['Sara Amrani',        'sara_amrani',    'sara@maroquiz.test'],
            ['Youssef El Idrissi', 'youssef_idrissi','youssef@maroquiz.test'],
            ['Fatima Zahra',       'fatima_zahra',   'fatima@maroquiz.test'],
            ['Omar Alaoui',        'omar_alaoui',    'omar@maroquiz.test'],
            ['Meryem Chafik',      'meryem_chafik',  'meryem@maroquiz.test'],
            ['Hassan Tazi',        'hassan_tazi',    'hassan@maroquiz.test'],
            ['Salma Idrissi',      'salma_idrissi',  'salma@maroquiz.test'],
            ['Khalid Bennis',      'khalid_bennis',  'khalid@maroquiz.test'],
            ['Aya El Fassi',       'aya_fassi',      'aya@maroquiz.test'],
        ];

        // 90 generated students (none of these first names are used above,
        // so usernames and emails can never collide with the originals)
        $firstNames = [
            'Mohammed', 'Zakaria', 'Imane', 'Nadia', 'Rachid', 'Soufiane', 'Houda', 'Karim', 'Leila', 'Mehdi',
            'Amina', 'Anas', 'Btissam', 'Driss', 'Ghita', 'Hamza', 'Ilyas', 'Jamal', 'Kenza', 'Lamia',
            'Mourad', 'Nour', 'Othmane', 'Rania', 'Said', 'Tarik', 'Widad', 'Yassine', 'Zineb', 'Adil',
        ];

        $lastNames = [
            'Berrada', 'Lahlou', 'Mansouri', 'Benjelloun', 'Skalli','madani', 'ElFassi', 'ElGhazali', 'ElIdrissi', 'ElOuazzani',
            'Tahiri', 'Bouzid', 'Naciri', 'Zniber', 'Kettani','', 'ElAmrani', 'ElAlaoui', 'ElBakkali',
             'ElBouzidi', 'ElFadli','Younssi','Farihi','Hansali','ahmadi',
        ];

        for ($i = 0; $i < 225; $i++) {
            $first = $firstNames[$i % 30];
            $last  = $lastNames[($i + intdiv($i, 30)) % 10]; // every first/last pair is unique

            $students[] = [
                "{$first} {$last}",
                strtolower($first) . '_' . strtolower($last),
                strtolower($first) . '.' . strtolower($last) . '@maroquiz.test',
            ];
        }

        return $students;
    }
}