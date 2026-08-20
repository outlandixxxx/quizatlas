<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('quiz_share_enrollments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('quiz_share_id')->constrained()->cascadeOnDelete();
            $table->foreignId('student_id')->constrained('users')->cascadeOnDelete();
            $table->timestamp('joined_at');
            $table->unique(['quiz_share_id', 'student_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quiz_share_enrollments');
    }
};