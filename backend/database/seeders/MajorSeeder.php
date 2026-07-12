<?php

namespace Database\Seeders;

use App\Models\Major;
use Illuminate\Database\Seeder;

class MajorSeeder extends Seeder
{
    /**
     * Seed the application's majors.
     */
    public function run(): void
    {
        $majors = [
            [
                'name' => 'Computer Science',
                'description' => 'Study of computers, programming, software development, and information systems.',
            ],
            [
                'name' => 'Mathematics',
                'description' => 'Study of numbers, algebra, calculus, geometry, and mathematical reasoning.',
            ],
        ];

        foreach ($majors as $major) {
            Major::create([
                'name' => $major['name'],
                'description' => $major['description'],
                'is_active' => true,
            ]);
        }
    }
}