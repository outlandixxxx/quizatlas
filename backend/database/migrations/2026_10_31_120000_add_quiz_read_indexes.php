<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('questions', fn (Blueprint $table) => $table->index(['quiz_id', 'order'], 'questions_quiz_order_idx'));
        Schema::table('choices', fn (Blueprint $table) => $table->index(['question_id', 'order'], 'choices_question_order_idx'));
        Schema::table('quizzes', fn (Blueprint $table) => $table->index('subject_id', 'quizzes_subject_idx'));
        Schema::table('quiz_attempts', fn (Blueprint $table) => $table->index(['quiz_id', 'user_id', 'status', 'id'], 'quiz_attempts_quiz_user_status_id_idx'));
    }

    public function down(): void
    {
        Schema::table('quiz_attempts', fn (Blueprint $table) => $table->dropIndex('quiz_attempts_quiz_user_status_id_idx'));
        Schema::table('quizzes', fn (Blueprint $table) => $table->dropIndex('quizzes_subject_idx'));
        Schema::table('choices', fn (Blueprint $table) => $table->dropIndex('choices_question_order_idx'));
        Schema::table('questions', fn (Blueprint $table) => $table->dropIndex('questions_quiz_order_idx'));
    }
};
