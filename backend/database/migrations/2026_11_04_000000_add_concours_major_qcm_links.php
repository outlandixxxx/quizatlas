<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('concours_major_links', function (Blueprint $table) {
            $table->id();
            $table->foreignId('concours_id')->constrained('concours')->restrictOnDelete();
            $table->foreignId('major_id')->constrained('majors')->restrictOnDelete();
            $table->unsignedInteger('version')->default(1);
            $table->timestamps();
            $table->unique(['concours_id', 'major_id']);
            $table->unique(['id', 'concours_id'], 'cqcm_major_scope');
        });

        Schema::create('concours_major_link_options', function (Blueprint $table) {
            $table->unsignedBigInteger('link_id');
            $table->unsignedBigInteger('concours_id');
            $table->unsignedBigInteger('preparation_option_id');
            $table->primary(['link_id', 'preparation_option_id'], 'cqcm_major_option_pk');
            $table->foreign(['link_id', 'concours_id'], 'cqcm_major_link_fk')
                ->references(['id', 'concours_id'])->on('concours_major_links')->cascadeOnDelete();
            $table->foreign(['preparation_option_id', 'concours_id'], 'cqcm_major_option_fk')
                ->references(['id', 'concours_id'])->on('concours_preparation_options')->restrictOnDelete();
            $table->index(['preparation_option_id', 'concours_id'], 'cqcm_major_option_lookup');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('concours_major_link_options');
        Schema::dropIfExists('concours_major_links');
    }
};
