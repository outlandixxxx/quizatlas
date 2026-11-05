<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('concours', function (Blueprint $table) {
            $table->foreignId('official_announcement_id')->nullable()
                ->constrained('concours_announcements')->nullOnDelete();
        });
        // No backfill: designation is always an explicit administrator decision.
    }

    public function down(): void
    {
        Schema::table('concours', fn (Blueprint $table) => $table->dropConstrainedForeignId('official_announcement_id'));
    }
};
