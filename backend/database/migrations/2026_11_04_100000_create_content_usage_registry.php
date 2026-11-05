<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('content_usage_operations', function (Blueprint $t) {
            $t->uuid('id')->primary();
            $t->foreignId('actor_id')->nullable()->constrained('users')->nullOnDelete();
            $t->string('kind', 40);
            $t->string('request_hash', 64);
            $t->enum('status', ['reserved', 'used', 'failed', 'released']);
            $t->unsignedInteger('attempt')->default(1);
            $t->json('parents');
            $t->json('output')->nullable();
            $t->timestampTz('reserved_at');
            $t->timestampTz('expires_at')->index();
            $t->timestampTz('completed_at')->nullable();
            $t->timestampTz('released_at')->nullable();
            $t->timestampsTz();
        });
        Schema::create('content_usage_items', function (Blueprint $t) {
            $t->id();
            $t->foreignUuid('operation_id')->constrained('content_usage_operations')->cascadeOnDelete();
            $t->enum('source_type', ['question', 'fact']);
            $t->unsignedBigInteger('source_id'); // Intentionally not a cascading source FK.
            $t->string('fingerprint', 64)->index();
            $t->string('source_hash', 64);
            $t->enum('status', ['reserved', 'used', 'failed', 'released'])->default('reserved');
            $t->timestampTz('completed_at')->nullable();
            $t->json('identity_keys');
            $t->string('label', 170);
            $t->uuid('parent_operation_id')->nullable();
            $t->unique(['operation_id', 'source_type', 'source_id'], 'content_usage_operation_source');
            $t->index(['source_type', 'source_id']);
        });
        Schema::create('content_usage_claims', function (Blueprint $t) {
            $t->string('identity_key', 150)->primary();
            $t->foreignId('item_id')->constrained('content_usage_items')->cascadeOnDelete();
            $t->foreignUuid('operation_id')->constrained('content_usage_operations')->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('content_usage_claims');
        Schema::dropIfExists('content_usage_items');
        Schema::dropIfExists('content_usage_operations');
    }
};
