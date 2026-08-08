<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
     public function up(): void
    {
        Schema::table('subjects', function (Blueprint $table) {
$table->string('year')->default('N/A')->after('major_id');
            $table->string('code')->nullable()->after('year');
        });
    }

    public function down(): void
    {
        Schema::table('subjects', function (Blueprint $table) {
            $table->dropColumn(['year', 'code']);
        });
    }
};
