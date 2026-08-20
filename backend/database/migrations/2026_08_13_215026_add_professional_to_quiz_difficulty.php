<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        DB::statement('
            ALTER TABLE quizzes
            DROP CONSTRAINT IF EXISTS quizzes_difficulty_check
        ');

        DB::statement("
            ALTER TABLE quizzes
            ADD CONSTRAINT quizzes_difficulty_check
            CHECK (
                difficulty IS NULL
                OR difficulty IN (
                    'Beginner',
                    'Intermediate',
                    'Advanced',
                    'Professional'
                )
            )
        ");
    }

    public function down(): void
    {
        // Convert Professional values before restoring the old constraint
        DB::table('quizzes')
            ->where('difficulty', 'Professional')
            ->update(['difficulty' => 'Advanced']);

        DB::statement('
            ALTER TABLE quizzes
            DROP CONSTRAINT IF EXISTS quizzes_difficulty_check
        ');

        DB::statement("
            ALTER TABLE quizzes
            ADD CONSTRAINT quizzes_difficulty_check
            CHECK (
                difficulty IS NULL
                OR difficulty IN (
                    'Beginner',
                    'Intermediate',
                    'Advanced'
                )
            )
        ");
    }
};