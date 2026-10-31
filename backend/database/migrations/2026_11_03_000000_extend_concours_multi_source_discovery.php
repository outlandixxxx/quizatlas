<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('concours_announcement_sources', function (Blueprint $table) {
            $table->enum('source_kind', ['official', 'third_party'])->default('official');
        });
        Schema::table('concours_discoveries', function (Blueprint $table) {
            // A third-party article is never stored as an official announcement URL.
            $table->string('official_url', 2048)->nullable()->change();
            $table->string('source_article_url', 2048)->nullable();
            $table->enum('candidate_category', ['unknown', 'employment', 'academic', 'excluded'])->default('unknown');
            $table->enum('candidate_type', ['unknown', 'opening', 'results', 'preselection', 'amendment'])->default('unknown');
            $table->string('classification_reason', 100)->nullable();
            $table->timestampTz('official_verified_at')->nullable();
            $table->foreignId('official_verified_by')->nullable()->constrained('users')->restrictOnDelete();
            $table->string('official_identifier')->nullable()->index();
            $table->json('verified_identity')->nullable();
            $table->string('verified_url_hash', 64)->nullable()->index();
            $table->string('verified_identity_hash', 64)->nullable()->index();
        });
        Schema::create('concours_discovery_matches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('left_id')->constrained('concours_discoveries')->restrictOnDelete();
            $table->foreignId('right_id')->constrained('concours_discoveries')->restrictOnDelete();
            $table->string('left_fingerprint', 64);
            $table->string('right_fingerprint', 64);
            $table->enum('decision', ['confirmed', 'rejected']);
            $table->string('reason', 40);
            $table->string('note', 1000);
            $table->foreignId('actor_id')->constrained('users')->restrictOnDelete();
            $table->timestampTz('created_at');
            // Decisions are append-only and scoped to the observed content/proof.
            $table->index(['left_id', 'right_id', 'id']);
        });
        if (DB::getDriverName() === 'pgsql') {
            DB::statement('ALTER TABLE concours_discovery_matches ADD CONSTRAINT discovery_match_order CHECK (left_id < right_id)');
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('concours_discovery_matches');
        Schema::table('concours_discoveries', function (Blueprint $table) {
            $table->dropForeign(['official_verified_by']);
            $table->dropIndex(['verified_url_hash']);
            $table->dropIndex(['verified_identity_hash']);
            $table->dropIndex(['official_identifier']);
            $table->dropColumn(['source_article_url', 'candidate_category', 'candidate_type', 'classification_reason',
                'official_verified_at', 'official_verified_by', 'official_identifier', 'verified_identity', 'verified_url_hash', 'verified_identity_hash']);
            // Keep official_url nullable: rolling back must not invent URLs for retained data.
        });
        Schema::table('concours_announcement_sources', fn (Blueprint $table) => $table->dropColumn('source_kind'));
    }
};
