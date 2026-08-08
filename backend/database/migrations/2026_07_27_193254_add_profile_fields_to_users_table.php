<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('avatar_url')->nullable()->after('email');
            $table->string('university')->nullable()->after('avatar_url');
            $table->string('major')->nullable()->after('university');
            $table->string('academic_year')->nullable()->after('major');
            $table->date('target_exam_date')->nullable()->after('academic_year');
            $table->text('bio')->nullable()->after('target_exam_date');
            $table->json('preferences')->nullable()->after('bio');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'avatar_url',
                'university',
                'major',
                'academic_year',
                'target_exam_date',
                'bio',
                'preferences',
            ]);
        });
    }
};