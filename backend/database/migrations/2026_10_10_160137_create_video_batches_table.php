
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('video_batches', function (Blueprint $table) {
            $table->id();

            $table->foreignId('major_id')
                ->constrained('majors')
                ->restrictOnDelete();

            $table->string('name')->nullable();
            $table->string('status', 30)->default('draft');

            $table->unsignedSmallInteger('target_video_count')
                ->default(10);

            $table->unsignedSmallInteger('questions_per_video')
                ->default(20);

            $table->string('difficulty_filter')->nullable();

            // Stores selected subject IDs and selector settings.
            $table->json('settings')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('video_batches');
    }
};