<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Seed the educational data.
     */
    public function run(): void
    {
        $this->call([
            MajorSeeder::class,
            SubjectSeeder::class,
            QuizSeeder::class,
            QuestionSeeder::class,
            ChoiceSeeder::class,
        ]);
    }
}