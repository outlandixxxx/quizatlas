<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        foreach (['quiz' => 'quizzes', 'subject' => 'subjects'] as $kind => $target) {
            Schema::create('concours_'.$kind.'_links', function (Blueprint $table) use ($kind, $target) {
                $table->id();
                $table->foreignId('concours_id')->constrained('concours')->restrictOnDelete();
                $table->foreignId($kind.'_id')->constrained($target)->restrictOnDelete();
                $table->unsignedInteger('version')->default(1);
                $table->timestamps();
                $table->unique(['concours_id', $kind.'_id']);
                $table->unique(['id', 'concours_id'], 'cqcm_'.$kind.'_scope');
            });
            Schema::create('concours_'.$kind.'_link_options', function (Blueprint $table) use ($kind) {
                $table->unsignedBigInteger('link_id');
                $table->unsignedBigInteger('concours_id');
                $table->unsignedBigInteger('preparation_option_id');
                $table->primary(['link_id', 'preparation_option_id'], 'cqcm_'.$kind.'_option_pk');
                $table->foreign(['link_id', 'concours_id'], 'cqcm_'.$kind.'_link_fk')->references(['id', 'concours_id'])->on('concours_'.$kind.'_links')->cascadeOnDelete();
                $table->foreign(['preparation_option_id', 'concours_id'], 'cqcm_'.$kind.'_option_fk')->references(['id', 'concours_id'])->on('concours_preparation_options')->restrictOnDelete();
                $table->index(['preparation_option_id', 'concours_id'], 'cqcm_'.$kind.'_option_lookup');
            });
        }
    }

    public function down(): void
    {
        foreach (['quiz', 'subject'] as $kind) {
            Schema::dropIfExists('concours_'.$kind.'_link_options');
            Schema::dropIfExists('concours_'.$kind.'_links');
        }
    }
};
