<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('video_sets', function (Blueprint $table) {
            $table->id();

            $table->foreignId('video_batch_id')
                ->constrained('video_batches')
                ->cascadeOnDelete();

            $table->foreignId('subject_id')
                ->constrained('subjects')
                ->restrictOnDelete();

            // Video number within this subject and batch.
            $table->unsignedSmallInteger('video_number');

            $table->string('title');
            $table->string('status', 30)->default('draft');

            // Optional metadata for generation and review.
            $table->json('settings')->nullable();

            $table->timestamps();

            $table->unique(
                ['video_batch_id', 'subject_id', 'video_number'],
                'video_sets_batch_subject_num_unique'
            );
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('video_sets');
    }
};