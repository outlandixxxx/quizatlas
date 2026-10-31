<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('concours_follows', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('concours_id')->constrained('concours')->restrictOnDelete();
            $table->boolean('active')->default(true);
            $table->boolean('in_app')->default(true);
            $table->boolean('browser_push')->default(false);
            $table->boolean('announcements')->default(true);
            $table->boolean('updates')->default(true);
            $table->boolean('deadlines')->default(true);
            $table->json('reminder_days');
            $table->unsignedInteger('version')->default(1);
            $table->timestampTz('followed_at', 6);
            $table->timestampsTz(6);
            $table->unique(['user_id', 'concours_id']);
            $table->unique(['id', 'concours_id'], 'follow_concours_scope');
            $table->index(['concours_id', 'active', 'id']);
        });
        Schema::create('concours_follow_preparation_option', function (Blueprint $table) {
            $table->unsignedBigInteger('follow_id');
            $table->unsignedBigInteger('concours_id');
            $table->unsignedBigInteger('preparation_option_id');
            $table->primary(['follow_id', 'preparation_option_id'], 'follow_preparation_pk');
            $table->foreign(['follow_id', 'concours_id'], 'follow_option_follow_scope')->references(['id', 'concours_id'])->on('concours_follows')->cascadeOnDelete();
            $table->foreign(['preparation_option_id', 'concours_id'], 'follow_option_scope')->references(['id', 'concours_id'])->on('concours_preparation_options')->restrictOnDelete();
        });
        Schema::create('concours_notification_events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('announcement_id')->constrained('concours_announcements')->restrictOnDelete();
            $table->foreignId('concours_id')->constrained('concours')->restrictOnDelete();
            $table->enum('kind', ['published', 'updated', 'deadline']);
            $table->string('event_key', 64)->unique();
            $table->string('fingerprint', 64);
            $table->json('snapshot');
            $table->timestampTz('occurred_at', 6);
            $table->unsignedBigInteger('last_follow_id')->default(0);
            $table->timestampTz('processed_at')->nullable();
            $table->index(['processed_at', 'id']);
        });
        Schema::create('concours_notification_deliveries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->constrained('concours_notification_events')->restrictOnDelete();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('notification_id')->nullable()->constrained('notifications')->nullOnDelete();
            $table->timestampTz('created_at');
            $table->unique(['event_id', 'user_id'], 'concours_event_user_once');
        });
        Schema::create('concours_push_subscriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->string('endpoint_hash', 64)->unique();
            $table->text('endpoint');
            $table->text('keys');
            $table->string('language', 2)->default('fr');
            $table->unsignedInteger('generation')->default(1);
            $table->timestampTz('consented_at', 6);
            $table->boolean('active')->default(true);
            $table->timestampsTz(6);
            $table->index(['user_id', 'active']);
        });
        Schema::create('concours_push_deliveries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('delivery_id')->constrained('concours_notification_deliveries')->cascadeOnDelete();
            $table->foreignId('subscription_id')->constrained('concours_push_subscriptions')->cascadeOnDelete();
            $table->unsignedInteger('subscription_generation')->default(1);
            $table->enum('status', ['pending', 'sent', 'failed', 'cancelled'])->default('pending');
            $table->timestampTz('attempted_at')->nullable();
            $table->string('verification_hash', 64)->nullable();
            $table->unique(['delivery_id', 'subscription_id'], 'concours_push_once');
            $table->index(['status', 'id']);
        });
    }

    public function down(): void
    {
        foreach (['concours_push_deliveries', 'concours_push_subscriptions', 'concours_notification_deliveries', 'concours_notification_events', 'concours_follow_preparation_option', 'concours_follows'] as $table) {
            Schema::dropIfExists($table);
        }
    }
};
