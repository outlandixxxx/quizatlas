<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('concours_announcements', function (Blueprint $table) {
            $table->softDeletesTz();
            $table->json('additional_official_urls')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('concours_announcements', function (Blueprint $table) {
            $table->dropColumn(['deleted_at', 'additional_official_urls']);
        });
    }
};
