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
            // Null means an existing authenticated-library document. No records are reclassified.
            $table->enum('document_type', ['official_announcement', 'previous_exam', 'correction', 'summary', 'preparation_guide'])->nullable();
            $table->foreignId('concours_id')->nullable()->constrained('concours')->restrictOnDelete();
            $table->foreignId('announcement_id')->nullable()->constrained('concours_announcements')->restrictOnDelete();
            $table->string('specialty')->nullable();
            $table->string('source_url', 2048)->nullable();
            $table->text('attribution')->nullable();
            $table->string('sha256', 64)->nullable();
            $table->string('distribution_permission', 40)->nullable();
            $table->timestampTz('distribution_confirmed_at')->nullable();
            $table->timestampTz('approved_at')->nullable();
            $table->foreignId('approved_by')->nullable()->constrained('users')->restrictOnDelete();
            $table->index(['concours_id', 'document_type', 'is_active'], 'exam_pdf_concours_resources');
        });
        Schema::table('concours_announcements', function (Blueprint $table) {
            $table->unsignedSmallInteger('session_year')->nullable();
            $table->foreignId('official_pdf_id')->nullable()->constrained('exam_pdfs')->restrictOnDelete();
            $table->string('official_pdf_sha256', 64)->nullable();
        });
        if (DB::getDriverName() === 'pgsql') {
            DB::statement('ALTER TABLE concours_announcements DROP CONSTRAINT announcement_verification');
            DB::statement("ALTER TABLE concours_announcements ADD CONSTRAINT announcement_verification CHECK (verification_status <> 'verified' OR (verified_at IS NOT NULL AND verified_by IS NOT NULL AND institution_id IS NOT NULL AND (official_source_url IS NOT NULL OR official_pdf_id IS NOT NULL)))");
            DB::statement("ALTER TABLE exam_pdfs ADD CONSTRAINT concours_pdf_ownership CHECK (document_type IS NULL OR (concours_id IS NOT NULL AND ((document_type = 'official_announcement' AND announcement_id IS NOT NULL) OR (document_type <> 'official_announcement' AND announcement_id IS NULL))))");
        }
    }

    public function down(): void
    {
        // Keep URL-only verification valid when rolling code back; no document files are removed.
        if (DB::getDriverName() === 'pgsql') {
            DB::statement('ALTER TABLE concours_announcements DROP CONSTRAINT announcement_verification');
            DB::statement("ALTER TABLE concours_announcements ADD CONSTRAINT announcement_verification CHECK (verification_status <> 'verified' OR (verified_at IS NOT NULL AND verified_by IS NOT NULL AND institution_id IS NOT NULL))");
            DB::statement('ALTER TABLE exam_pdfs DROP CONSTRAINT concours_pdf_ownership');
        }
        Schema::table('concours_announcements', function (Blueprint $table) {
            $table->dropConstrainedForeignId('official_pdf_id');
            $table->dropColumn(['session_year', 'official_pdf_sha256']);
        });
        Schema::table('exam_pdfs', function (Blueprint $table) {
            $table->dropIndex('exam_pdf_concours_resources');
            foreach (['concours_id', 'announcement_id', 'approved_by'] as $field) {
                $table->dropConstrainedForeignId($field);
            }
            $table->dropColumn(['document_type', 'specialty', 'source_url', 'attribution', 'sha256', 'distribution_permission', 'distribution_confirmed_at', 'approved_at']);
        });
    }
};
