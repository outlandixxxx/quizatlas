<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('username', 20)->nullable()->unique()->after('name');
        });

        // Backfill existing users with random usernames (never derived from real names)
        DB::table('users')->whereNull('username')->orderBy('id')->each(function ($user) {
            do {
                $candidate = 'player_' . Str::lower(Str::random(6));
            } while (DB::table('users')->where('username', $candidate)->exists());

            DB::table('users')->where('id', $user->id)->update(['username' => $candidate]);
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropUnique(['username']);
            $table->dropColumn('username');
        });
    }
};