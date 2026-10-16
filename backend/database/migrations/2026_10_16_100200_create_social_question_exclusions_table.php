<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Questions the admin marked "Never use" on social media
        // (too easy, badly worded, not interesting...).
        Schema::create('social_question_exclusions', function (Blueprint $table) {
            $table->id();

            $table->foreignId('question_id')
                ->unique()
                ->constrained('questions')
                ->cascadeOnDelete();

            $table->string('reason', 255)->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('social_question_exclusions');
    }
};
