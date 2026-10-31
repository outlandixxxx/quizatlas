<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('exam_pdfs', function (Blueprint $table) {
            $table->foreignId('corrects_exam_pdf_id')->nullable()->constrained('exam_pdfs')->restrictOnDelete();
            // Existing approved documents retain their established download access.
            $table->boolean('download_allowed')->default(true);
            $table->unsignedInteger('version')->default(1);
        });
        if (DB::getDriverName() === 'pgsql') {
            DB::statement("ALTER TABLE exam_pdfs ADD CONSTRAINT correction_document_link CHECK (version > 0 AND (corrects_exam_pdf_id IS NULL OR (document_type = 'correction' AND corrects_exam_pdf_id <> id)))");
        }
    }

    public function down(): void
    {
        if (DB::getDriverName() === 'pgsql') {
            DB::statement('ALTER TABLE exam_pdfs DROP CONSTRAINT correction_document_link');
        }
        Schema::table('exam_pdfs', function (Blueprint $table) {
            $table->dropConstrainedForeignId('corrects_exam_pdf_id');
            $table->dropColumn(['download_allowed', 'version']);
        });
    }
};
