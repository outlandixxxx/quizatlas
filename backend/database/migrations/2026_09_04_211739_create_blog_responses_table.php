<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blog_responses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('blog_ask_id')->constrained('blog_asks')->cascadeOnDelete();
            $table->foreignId('author_id')->constrained('users')->cascadeOnDelete();
            $table->text('body');
            $table->boolean('is_accepted')->default(false);
            $table->timestamps();

            $table->index('blog_ask_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blog_responses');
    }
};