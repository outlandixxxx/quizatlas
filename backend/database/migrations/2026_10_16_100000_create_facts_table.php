<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('facts', function (Blueprint $table) {
            $table->id();

            $table->foreignId('subject_id')
                ->constrained('subjects')
                ->cascadeOnDelete();

            // The same fact in the three languages used by the fact shorts.
            $table->text('text_fr');
            $table->text('text_en');
            $table->text('text_ar');

            // Where the fact can be checked. Strongly recommended.
            $table->string('source_url', 1000)->nullable();

            // Only verified facts are ever selected for videos.
            $table->boolean('is_verified')->default(false);
            $table->timestamp('verified_at')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->index(['subject_id', 'is_verified']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('facts');
    }
};
