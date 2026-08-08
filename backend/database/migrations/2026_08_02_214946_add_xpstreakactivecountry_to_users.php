<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
   public function up(): void {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedInteger('xp')->default(0)->after('email');
            $table->unsignedInteger('current_streak')->default(0)->after('xp');
            $table->date('last_active_date')->nullable()->after('current_streak');
            $table->string('country')->nullable()->after('last_active_date');
        });
    }
    public function down(): void {
        Schema::table('users', fn (Blueprint $t) => $t->dropColumn(['xp', 'current_streak', 'last_active_date', 'country']));
    }
};
