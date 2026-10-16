
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('video_set_questions', function (Blueprint $table) {
            $table->id();

            $table->foreignId('video_set_id')
                ->constrained('video_sets')
                ->cascadeOnDelete();

            $table->foreignId('question_id')
                ->constrained('questions')
                ->restrictOnDelete();

            $table->unsignedSmallInteger('question_order');

            // Transparent score calculated by our selector.
            $table->decimal('selection_score', 5, 2)->nullable();

            // Optional details explaining the selection.
            $table->json('selection_metadata')->nullable();

            $table->timestamps();

            $table->unique(
                ['video_set_id', 'question_id'],
                'video_set_questions_video_question_unique'
            );

            $table->unique(
                ['video_set_id', 'question_order'],
                'video_set_questions_video_order_unique'
            );

            $table->index('question_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('video_set_questions');
    }
};