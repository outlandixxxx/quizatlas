<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('concours', function (Blueprint $table) {
            $table->unsignedSmallInteger('session_year')->nullable();
            $table->enum('session_policy', ['manual', 'annual'])->default('manual');
            // First approved boundary: the base year advances by one on this date,
            // then on its anniversary. No national/shared calendar is assumed.
            $table->date('session_rollover_on')->nullable();
            $table->unsignedSmallInteger('session_year_override')->nullable();
        });
        Schema::table('concours_announcements', function (Blueprint $table) {
            $table->foreignId('replaces_announcement_id')->nullable()->constrained('concours_announcements')->restrictOnDelete();
            $table->timestampTz('superseded_at')->nullable();
            $table->index(['concours_id', 'session_year', 'superseded_at'], 'announcements_session_selection');
        });
        if (DB::getDriverName() === 'pgsql') {
            DB::statement("ALTER TABLE concours ADD CONSTRAINT concours_session_year CHECK (session_year IS NULL OR session_year BETWEEN 1990 AND 2100), ADD CONSTRAINT concours_session_override CHECK (session_year_override IS NULL OR session_year_override BETWEEN 1990 AND 2100), ADD CONSTRAINT concours_session_policy CHECK (session_policy <> 'annual' OR (session_year IS NOT NULL AND session_rollover_on IS NOT NULL AND NOT (EXTRACT(MONTH FROM session_rollover_on) = 2 AND EXTRACT(DAY FROM session_rollover_on) = 29)))");
            DB::statement('ALTER TABLE concours_announcements ADD CONSTRAINT announcement_not_self_replacing CHECK (replaces_announcement_id IS NULL OR replaces_announcement_id <> id)');
        }
        // No updates, backfills, PDF reclassification or record replacement.
    }

    public function down(): void
    {
        if (DB::getDriverName() === 'pgsql') {
            DB::statement('ALTER TABLE concours DROP CONSTRAINT concours_session_year, DROP CONSTRAINT concours_session_override, DROP CONSTRAINT concours_session_policy');
            DB::statement('ALTER TABLE concours_announcements DROP CONSTRAINT announcement_not_self_replacing');
        }
        Schema::table('concours_announcements', function (Blueprint $table) {
            $table->dropIndex('announcements_session_selection');
            $table->dropConstrainedForeignId('replaces_announcement_id');
            $table->dropColumn('superseded_at');
        });
        Schema::table('concours', fn (Blueprint $table) => $table->dropColumn(['session_year', 'session_policy', 'session_rollover_on', 'session_year_override']));
    }
};
