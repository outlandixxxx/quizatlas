<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('concours_announcement_sources', function (Blueprint $table) {
            $table->id();
            $table->string('key', 100)->unique();
            $table->string('name');
            $table->string('official_url', 2048);
            $table->string('listing_url', 2048);
            $table->enum('collection_method', ['manual', 'json_feed', 'rss_atom'])->default('manual');
            $table->boolean('enabled')->default(false);
            $table->enum('permission_status', ['unknown', 'allowed', 'denied'])->default('unknown');
            $table->string('permission_evidence', 2048)->nullable();
            $table->timestampTz('permission_checked_at')->nullable();
            $table->unsignedInteger('check_interval_minutes')->default(720);
            $table->timestampTz('last_attempt_at')->nullable();
            $table->timestampTz('last_success_at')->nullable();
            $table->string('last_error')->nullable();
            $table->unsignedInteger('version')->default(1);
            $table->timestampsTz();
        });
        Schema::create('concours_discoveries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('source_id')->constrained('concours_announcement_sources')->restrictOnDelete();
            $table->string('identity_hash', 64);
            $table->string('source_identifier', 255)->nullable();
            $table->string('title');
            $table->string('official_url', 2048);
            $table->string('normalized_url', 2048);
            $table->string('metadata_hash', 64);
            $table->date('publication_date')->nullable();
            $table->date('application_deadline')->nullable();
            $table->string('institution')->nullable();
            $table->unsignedSmallInteger('session_year')->nullable();
            $table->string('grade')->nullable();
            $table->string('specialty')->nullable();
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->unsignedInteger('version')->default(1);
            $table->foreignId('announcement_id')->nullable()->constrained('concours_announcements')->restrictOnDelete();
            $table->foreignId('reviewed_by')->nullable()->constrained('users')->restrictOnDelete();
            $table->timestampTz('reviewed_at')->nullable();
            $table->string('review_note', 1000)->nullable();
            $table->timestampTz('first_seen_at');
            $table->timestampTz('last_seen_at');
            $table->timestampsTz();
            $table->unique(['source_id', 'identity_hash'], 'discovery_source_identity');
            $table->index(['status', 'first_seen_at']);
            $table->index(['source_id', 'publication_date']);
        });
        Schema::create('concours_discovery_revisions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('discovery_id')->constrained('concours_discoveries')->restrictOnDelete();
            $table->unsignedInteger('version');
            $table->string('action', 40);
            $table->foreignId('actor_id')->nullable()->constrained('users')->restrictOnDelete();
            $table->json('snapshot');
            $table->timestampTz('created_at');
            $table->unique(['discovery_id', 'version']);
        });
        Schema::create('concours_announcement_preparation_option', function (Blueprint $table) {
            $table->unsignedBigInteger('announcement_id');
            $table->unsignedBigInteger('concours_id');
            $table->unsignedBigInteger('preparation_option_id');
            $table->primary(['announcement_id', 'preparation_option_id'], 'announcement_preparation_pk');
            $table->foreign('announcement_id')->references('id')->on('concours_announcements')->restrictOnDelete();
            $table->foreign(['preparation_option_id', 'concours_id'], 'announcement_option_scope')
                ->references(['id', 'concours_id'])->on('concours_preparation_options')->restrictOnDelete();
        });
        // Composite FK prevents attaching tracks from another permanent concours.
        Schema::table('concours_announcements', fn (Blueprint $table) => $table->unique(['id', 'concours_id'], 'announcement_concours_scope'));
        Schema::table('concours_announcement_preparation_option', function (Blueprint $table) {
            $table->foreign(['announcement_id', 'concours_id'], 'announcement_track_scope')
                ->references(['id', 'concours_id'])->on('concours_announcements')->restrictOnDelete();
        });
        if (DB::getDriverName() === 'pgsql') {
            DB::statement('ALTER TABLE concours_announcement_sources ADD CONSTRAINT source_interval CHECK (check_interval_minutes BETWEEN 60 AND 10080), ADD CONSTRAINT source_version CHECK (version > 0)');
            DB::statement('ALTER TABLE concours_discoveries ADD CONSTRAINT discovery_year CHECK (session_year IS NULL OR session_year BETWEEN 1990 AND 2100), ADD CONSTRAINT discovery_version CHECK (version > 0)');
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('concours_announcement_preparation_option');
        Schema::table('concours_announcements', fn (Blueprint $table) => $table->dropUnique('announcement_concours_scope'));
        Schema::dropIfExists('concours_discovery_revisions');
        Schema::dropIfExists('concours_discoveries');
        Schema::dropIfExists('concours_announcement_sources');
    }
};
