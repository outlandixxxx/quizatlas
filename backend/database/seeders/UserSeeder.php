<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Administrator
        User::create([
            'name' => 'System Administrator',
            'email' => 'admin@quizatlas.test',
            'password' => 'password',
            'role' => 'admin',
        ]);

        // Students
        $students = [
            ['Ahmed Benali', 'ahmed@quizatlas.test'],
            ['Sara Amrani', 'sara@quizatlas.test'],
            ['Youssef El Idrissi', 'youssef@quizatlas.test'],
            ['Fatima Zahra', 'fatima@quizatlas.test'],
            ['Omar Alaoui', 'omar@quizatlas.test'],
            ['Meryem Chafik', 'meryem@quizatlas.test'],
            ['Hassan Tazi', 'hassan@quizatlas.test'],
            ['Salma Idrissi', 'salma@quizatlas.test'],
            ['Khalid Bennis', 'khalid@quizatlas.test'],
            ['Aya El Fassi', 'aya@quizatlas.test'],
        ];

        foreach ($students as [$name, $email]) {
            User::create([
                'name' => $name,
                'email' => $email,
                'password' => 'password',
                'role' => 'user',
            ]);
        }
    }
}