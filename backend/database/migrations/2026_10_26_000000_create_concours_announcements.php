<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('concours_announcements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('concours_id')->constrained('concours')->restrictOnDelete();
            $table->foreignId('institution_id')->nullable()->constrained('concours_institutions')->restrictOnDelete();
            $table->string('slug', 160)->unique();
            foreach (['fr', 'ar'] as $language) {
                $table->string('title_'.$language)->nullable();
                foreach (['description', 'eligibility', 'required_documents'] as $field) {
                    $table->text($field.'_'.$language)->nullable();
                }
            }
            $table->json('specialties')->nullable();
            $table->json('regions')->nullable();
            $table->unsignedInteger('positions')->nullable();
            foreach (['official_publication_date', 'registration_opens_on', 'registration_deadline', 'examination_date'] as $field) {
                $table->date($field)->nullable();
            }
            $table->string('application_url', 2048)->nullable();
            $table->string('official_source_url', 2048)->nullable();
            $table->enum('verification_status', ['draft', 'unverified', 'verified'])->default('draft');
            $table->timestampTz('verified_at')->nullable();
            $table->foreignId('verified_by')->nullable()->constrained('users')->restrictOnDelete();
            $table->enum('publication_status', ['draft', 'published', 'archived', 'withdrawn'])->default('draft');
            $table->enum('official_decision', ['postponed', 'cancelled'])->nullable();
            $table->timestampTz('first_published_at')->nullable();
            $table->timestampTz('published_at')->nullable();
            $table->timestampTz('archived_at')->nullable();
            $table->timestampTz('withdrawn_at')->nullable();
            $table->unsignedInteger('version')->default(1);
            $table->timestampsTz();
            $table->index(['publication_status', 'verification_status', 'published_at'], 'announcements_public_feed');
            $table->index('registration_deadline');
        });
        Schema::create('concours_announcement_revisions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('announcement_id')->constrained('concours_announcements')->restrictOnDelete();
            $table->unsignedInteger('version');
            $table->string('action', 30);
            $table->foreignId('actor_id')->nullable()->constrained('users')->nullOnDelete();
            $table->json('changes');
            $table->json('verified_changes')->nullable();
            $table->json('events');
            $table->json('snapshot');
            $table->timestampTz('created_at');
            $table->unique(['announcement_id', 'version']);
        });
        // PostgreSQL is the deployment database. SQLite fixtures also enforce enums/FKs/uniqueness.
        if (DB::getDriverName() === 'pgsql') {
            DB::statement("ALTER TABLE concours_announcements ADD CONSTRAINT announcement_version CHECK (version >= 1), ADD CONSTRAINT announcement_positions CHECK (positions IS NULL OR positions > 0), ADD CONSTRAINT announcement_date_order CHECK (registration_opens_on IS NULL OR registration_deadline IS NULL OR registration_opens_on <= registration_deadline), ADD CONSTRAINT announcement_verification CHECK (verification_status <> 'verified' OR (verified_at IS NOT NULL AND verified_by IS NOT NULL AND institution_id IS NOT NULL AND official_source_url IS NOT NULL)), ADD CONSTRAINT announcement_publication CHECK (publication_status <> 'published' OR (verification_status = 'verified' AND published_at IS NOT NULL AND first_published_at IS NOT NULL))");
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('concours_announcement_revisions');
        Schema::dropIfExists('concours_announcements');
    }
};
