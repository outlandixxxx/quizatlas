<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('concours_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_id')->nullable()->constrained('concours_categories')->restrictOnDelete();
            $table->string('slug', 160)->unique();
            $table->string('name_fr');
            $table->string('name_ar');
            $table->text('description_fr')->nullable();
            $table->text('description_ar')->nullable();
            $table->unsignedInteger('display_order')->default(0);
            $table->boolean('is_active')->default(false);
            $table->timestamps();
            $table->index(['is_active', 'display_order']);
        });

        Schema::create('concours_institutions', function (Blueprint $table) {
            $table->id();
            $table->string('slug', 160)->unique();
            $table->string('name_fr');
            $table->string('name_ar');
            $table->string('website_url', 2048)->nullable();
            $table->boolean('is_active')->default(false);
            $table->timestamps();
            $table->index('is_active');
        });

        Schema::create('concours', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('concours_categories')->restrictOnDelete();
            $table->foreignId('institution_id')->nullable()->constrained('concours_institutions')->restrictOnDelete();
            $table->string('slug', 160)->unique();
            $table->string('name_fr');
            $table->string('name_ar');
            $table->text('description_fr')->nullable();
            $table->text('description_ar')->nullable();
            $table->enum('type', ['recruitment', 'admission', 'examination']);
            $table->json('exam_formats')->nullable();
            $table->boolean('is_active')->default(false);
            $table->unsignedInteger('display_order')->default(0);
            $table->timestamps();
            $table->index(['is_active', 'type', 'display_order']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('concours');
        Schema::dropIfExists('concours_institutions');
        Schema::dropIfExists('concours_categories');
    }
};
