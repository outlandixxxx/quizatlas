<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('concours_preparation_options', function (Blueprint $table) {
            $table->id();
            $table->foreignId('concours_id')->constrained('concours')->restrictOnDelete();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->string('name_fr');
            $table->string('name_en')->nullable();
            $table->string('name_ar')->nullable();
            $table->unsignedInteger('display_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->unique(['id', 'concours_id'], 'preparation_option_scope');
            $table->foreign(['parent_id', 'concours_id'], 'preparation_option_parent_scope')
                ->references(['id', 'concours_id'])->on('concours_preparation_options')->restrictOnDelete();
        });
        Schema::create('exam_pdf_preparation_option', function (Blueprint $table) {
            $table->foreignId('exam_pdf_id')->constrained('exam_pdfs')->restrictOnDelete();
            $table->foreignId('preparation_option_id')->constrained('concours_preparation_options')->restrictOnDelete();
            $table->primary(['exam_pdf_id', 'preparation_option_id'], 'exam_pdf_preparation_option_pk');
            $table->index('preparation_option_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('exam_pdf_preparation_option');
        Schema::dropIfExists('concours_preparation_options');
    }
};
