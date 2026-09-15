<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        /*
         * Subject slugs are unique within a major, not globally.
         */
        Schema::table('subjects', function (Blueprint $table) {
            $table->dropUnique('subjects_slug_unique');
        });

        /*
         * Normalize legacy Computer Science & IT subject slugs.
         * These subjects currently have zero quizzes.
         */
        $majorId = DB::table('majors')
            ->where('slug', 'computer-science-it')
            ->value('id');

        if ($majorId) {
            DB::table('subjects')
                ->where('major_id', $majorId)
                ->where('slug', 'databases')
                ->update([
                    'name' => 'Databases & SQL',
                    'slug' => 'databases-sql',
                    'description' => 'Relational databases, SQL, database design, queries and database management.',
                    'updated_at' => now(),
                ]);

            DB::table('subjects')
                ->where('major_id', $majorId)
                ->where('slug', 'networking')
                ->update([
                    'name' => 'Computer Networks',
                    'slug' => 'computer-networks',
                    'description' => 'Computer networking fundamentals, TCP/IP, routing, switching, protocols and network architecture.',
                    'updated_at' => now(),
                ]);
        }

        /*
         * Prevent duplicate subjects inside the same major.
         */
        Schema::table('subjects', function (Blueprint $table) {
            $table->unique(['major_id', 'slug'], 'subjects_major_id_slug_unique');
        });
    }

    public function down(): void
    {
        Schema::table('subjects', function (Blueprint $table) {
            $table->dropUnique('subjects_major_id_slug_unique');
        });

        /*
         * Restore the previous CS/IT slugs.
         */
        $majorId = DB::table('majors')
            ->where('slug', 'computer-science-it')
            ->value('id');

        if ($majorId) {
            DB::table('subjects')
                ->where('major_id', $majorId)
                ->where('slug', 'databases-sql')
                ->update([
                    'name' => 'Databases',
                    'slug' => 'databases',
                    'updated_at' => now(),
                ]);

            DB::table('subjects')
                ->where('major_id', $majorId)
                ->where('slug', 'computer-networks')
                ->update([
                    'name' => 'Networking',
                    'slug' => 'networking',
                    'updated_at' => now(),
                ]);
        }

        Schema::table('subjects', function (Blueprint $table) {
            $table->unique('slug', 'subjects_slug_unique');
        });
    }
};
