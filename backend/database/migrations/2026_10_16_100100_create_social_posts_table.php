<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // One row per question or fact published on social media.
        // Used to avoid posting the same content twice.
        Schema::create('social_posts', function (Blueprint $table) {
            $table->id();

            $table->date('post_date');

            // question_du_jour | quiz_short | facebook_group | fact_short | fact_video
            $table->string('format', 40);

            $table->foreignId('subject_id')
                ->nullable()
                ->constrained('subjects')
                ->nullOnDelete();

            $table->foreignId('question_id')
                ->nullable()
                ->constrained('questions')
                ->nullOnDelete();

            $table->foreignId('fact_id')
                ->nullable()
                ->constrained('facts')
                ->nullOnDelete();

            // "#12" shown in the caption, for numbered series.
            $table->unsignedInteger('series_number')->nullable();

            // Order inside a multi-item post (Facebook mini-quiz, fact video).
            $table->unsignedSmallInteger('position')->default(1);

            $table->timestamps();

            $table->index(['format', 'post_date']);
            $table->index('question_id');
            $table->index('fact_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('social_posts');
    }
};
