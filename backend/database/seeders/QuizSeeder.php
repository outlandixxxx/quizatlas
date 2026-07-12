<?php

namespace Database\Seeders;

use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    /**
     * Seed the application's quizzes.
     */
    public function run(): void
    {
        $programming = Subject::where('name', 'Programming Fundamentals')->firstOrFail();
        $database = Subject::where('name', 'Database Systems')->firstOrFail();
        $algebra = Subject::where('name', 'Algebra')->firstOrFail();
        $calculus = Subject::where('name', 'Calculus')->firstOrFail();

        $quizzes = [

            // Programming Fundamentals
            [
                'subject_id' => $programming->id,
                'title' => 'PHP Basics',
                'description' => 'Basic PHP syntax and programming concepts.',
            ],
            [
                'subject_id' => $programming->id,
                'title' => 'Algorithms',
                'description' => 'Introduction to algorithms and problem solving.',
            ],

            // Database Systems
            [
                'subject_id' => $database->id,
                'title' => 'SQL Basics',
                'description' => 'Basic SQL queries and database manipulation.',
            ],
            [
                'subject_id' => $database->id,
                'title' => 'Database Design',
                'description' => 'Relational database design concepts.',
            ],

            // Algebra
            [
                'subject_id' => $algebra->id,
                'title' => 'Linear Equations',
                'description' => 'Solving linear equations.',
            ],
            [
                'subject_id' => $algebra->id,
                'title' => 'Functions',
                'description' => 'Understanding mathematical functions.',
            ],

            // Calculus
            [
                'subject_id' => $calculus->id,
                'title' => 'Limits',
                'description' => 'Introduction to limits.',
            ],
            [
                'subject_id' => $calculus->id,
                'title' => 'Derivatives',
                'description' => 'Basic derivative rules.',
            ],

        ];

        foreach ($quizzes as $quiz) {
            Quiz::create([
                'subject_id' => $quiz['subject_id'],
                'title' => $quiz['title'],
                'description' => $quiz['description'],
                'duration' => 30,
                'passing_score' => 60,
                'total_marks' => 5,
                'is_active' => true,
            ]);
        }
    }
}