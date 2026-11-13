<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Published YouTube catalogue; deliberately independent of local render jobs.
        Schema::create('video_library_entries', function (Blueprint $table) {
            $table->id();
            $table->string('youtube_id', 11)->unique();
            $table->string('title', 250);
            $table->string('format', 8);
            $table->string('category', 8);
            $table->string('template', 32)->default('general');
            $table->string('language', 2);
            $table->string('status', 12)->default('draft');
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
            $table->index(['status', 'format', 'published_at'], 'video_library_public_listing');
            $table->index(['category', 'template', 'language'], 'video_library_classification');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('video_library_entries');
    }
};
