<?php

namespace Database\Seeders;

use App\Models\Major;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Seed the application's subjects.
     */
    public function run(): void
    {
        $computerScience = Major::where('name', 'Computer Science')->firstOrFail();
        $mathematics = Major::where('name', 'Mathematics')->firstOrFail();

        $subjects = [

            [
                'major_id' => $computerScience->id,
                'name' => 'Programming Fundamentals',
                'description' => 'Introduction to programming concepts, algorithms, and problem solving.',
            ],

            [
                'major_id' => $computerScience->id,
                'name' => 'Database Systems',
                'description' => 'Introduction to relational databases and SQL.',
            ],

            [
                'major_id' => $mathematics->id,
                'name' => 'Algebra',
                'description' => 'Study of equations, functions, and algebraic structures.',
            ],

            [
                'major_id' => $mathematics->id,
                'name' => 'Calculus',
                'description' => 'Study of limits, derivatives, and integrals.',
            ],

        ];

        foreach ($subjects as $subject) {
            Subject::create([
                'major_id' => $subject['major_id'],
                'name' => $subject['name'],
                'description' => $subject['description'],
                'is_active' => true,
            ]);
        }
    }
}