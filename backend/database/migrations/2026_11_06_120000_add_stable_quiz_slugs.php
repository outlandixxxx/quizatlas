<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Some installations already have this optional column. Never rewrite their slugs.
        if (! Schema::hasColumn('quizzes', 'slug')) {
            Schema::table('quizzes', function (Blueprint $table): void {
                $table->string('slug', 191)->nullable()->unique('quizzes_stable_slug_unique');
            });
        }
    }

    public function down(): void
    {
        // Only remove a column created by this migration, identified by its own index.
        if (Schema::hasIndex('quizzes', 'quizzes_stable_slug_unique')) {
            Schema::table('quizzes', function (Blueprint $table): void {
                $table->dropUnique('quizzes_stable_slug_unique');
                $table->dropColumn('slug');
            });
        }
    }
};
