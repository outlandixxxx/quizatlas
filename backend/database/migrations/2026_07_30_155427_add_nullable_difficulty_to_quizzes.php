<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
     public function up(): void
    {
        Schema::table('quizzes', function (Blueprint $table) {
            $table->enum('difficulty', ['Beginner', 'Intermediate', 'Advanced'])
                ->nullable()
                ->after('total_marks');
        });
    }

    public function down(): void
    {
        Schema::table('quizzes', function (Blueprint $table) {
            $table->dropColumn('difficulty');
        });
    }
};
