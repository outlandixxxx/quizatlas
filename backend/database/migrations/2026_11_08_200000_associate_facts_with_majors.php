<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Query raw rows, including soft-deleted Facts/Subjects/Majors. Never guess.
        $unmapped = DB::table('facts as f')
            ->leftJoin('subjects as s', 's.id', '=', 'f.subject_id')
            ->leftJoin('majors as m', 'm.id', '=', 's.major_id')
            ->whereNull('m.id')->pluck('f.id');
        if ($unmapped->isNotEmpty()) {
            throw new RuntimeException('Facts need explicit Major mapping before migration: '.$unmapped->implode(', '));
        }

        Schema::table('facts', function (Blueprint $table) {
            $table->foreignId('major_id')->nullable()->constrained('majors')->restrictOnDelete();
        });
        // Query Builder updates do not touch timestamps or fire model events.
        DB::table('facts')->update(['major_id' => DB::raw('(SELECT major_id FROM subjects WHERE subjects.id = facts.subject_id)')]);
        Schema::table('facts', function (Blueprint $table) {
            $table->unsignedBigInteger('major_id')->nullable(false)->change();
            $table->unsignedBigInteger('subject_id')->nullable()->change();
            $table->index(['major_id', 'is_verified']);
        });
        // Retain the legacy link, but a Subject deletion must no longer delete a Fact.
        Schema::table('facts', fn (Blueprint $table) => $table->dropForeign(['subject_id']));
        Schema::table('facts', fn (Blueprint $table) => $table->foreign('subject_id')->references('id')->on('subjects')->nullOnDelete());
    }

    public function down(): void
    {
        $incompatible = DB::table('facts as f')->leftJoin('subjects as s', 's.id', '=', 'f.subject_id')
            ->where(fn ($q) => $q->whereNull('s.id')->orWhereColumn('s.major_id', '!=', 'f.major_id'))->exists();
        if ($incompatible) {
            throw new RuntimeException('Rollback refused: Major-only Facts cannot be mapped back to Subjects automatically.');
        }
        Schema::table('facts', fn (Blueprint $table) => $table->dropForeign(['subject_id']));
        Schema::table('facts', function (Blueprint $table) {
            $table->unsignedBigInteger('subject_id')->nullable(false)->change();
            $table->foreign('subject_id')->references('id')->on('subjects')->cascadeOnDelete();
            $table->dropIndex(['major_id', 'is_verified']);
            $table->dropForeign(['major_id']);
            $table->dropColumn('major_id');
        });
    }
};
