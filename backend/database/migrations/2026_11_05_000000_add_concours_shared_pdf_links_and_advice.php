<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('concours', function (Blueprint $table) {
            $table->text('advice_fr')->nullable();
            $table->text('advice_ar')->nullable();
        });

        Schema::create('concours_exam_pdf_links', function (Blueprint $table) {
            $table->id();
            $table->foreignId('concours_id')->constrained('concours')->cascadeOnDelete();
            $table->foreignId('exam_pdf_id')->constrained('exam_pdfs')->cascadeOnDelete();
            $table->timestamps();
            $table->unique(['concours_id', 'exam_pdf_id'], 'concours_pdf_unique');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('concours_exam_pdf_links');
        Schema::table('concours', fn (Blueprint $table) => $table->dropColumn(['advice_fr', 'advice_ar']));
    }
};
