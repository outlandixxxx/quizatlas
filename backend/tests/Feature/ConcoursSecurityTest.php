<?php

namespace Tests\Feature;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Contracts\Validation\UncompromisedVerifier;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Tests\ConcoursTestCase;

class ConcoursSecurityTest extends ConcoursTestCase
{
    public function test_password_reset_revokes_old_jwts_on_private_and_admin_endpoints(): void
    {
        Carbon::setTestNow('2026-10-26 12:00:00');
        try {
            $user = User::create(['name' => 'Security fixture', 'username' => 'securityfixture', 'email' => 'security@example.test', 'password' => 'FixtureOnly123!', 'role' => 'admin']);
            $oldToken = auth('api')->login($user);
            Carbon::setTestNow(now()->addSeconds(2));
            $user->forceFill(['password_changed_at' => now()])->save();
            foreach ([['GET', '/api/v1/me/concours-follows'], ['GET', '/api/v1/me/concours-follows/configuration'],
                ['GET', '/api/v1/admin/concours-announcements'], ['GET', '/api/v1/admin/concours-discovery/sources'],
                ['GET', '/api/v1/admin/concours-directory/concours'], ['GET', '/api/v1/notifications'],
                ['GET', '/api/v1/auth/me'], ['POST', '/api/v1/auth/refresh']] as [$method, $url]) {
                auth()->forgetGuards();
                $this->withHeader('Authorization', 'Bearer '.$oldToken)->json($method, $url)->assertUnauthorized();
            }
            auth()->forgetGuards();
            $newToken = auth('api')->login($user->fresh());
            auth()->forgetGuards();
            $this->withHeader('Authorization', 'Bearer '.$newToken)->getJson('/api/v1/me/concours-follows')->assertOk();
        } finally {
            Carbon::setTestNow();
        }
    }

    public function test_disabled_commands_do_not_request_network_or_create_delivery_work(): void
    {
        config(['concours_discovery.automation_enabled' => false, 'concours_notifications.enabled' => false, 'concours_notifications.push_enabled' => false]);
        Http::preventStrayRequests();
        $this->artisan('concours:discover')->expectsOutput('Concours discovery automation is disabled.')->assertSuccessful();
        $this->artisan('concours:notify')->expectsOutput('Concours notifications are disabled.')->assertSuccessful();
        Http::assertNothingSent();
        foreach (['concours_discoveries', 'concours_notification_events', 'concours_notification_deliveries', 'concours_push_deliveries', 'notifications'] as $table) {
            $this->assertDatabaseCount($table, 0);
        }
    }

    public function test_authenticated_password_change_persists_revocation_and_blocks_the_previous_token(): void
    {
        Carbon::setTestNow('2026-10-26 12:00:00');
        try {
            $this->mock(UncompromisedVerifier::class)->shouldReceive('verify')->andReturn(true);
            $user = User::create(['name' => 'Password fixture', 'username' => 'passwordfixture', 'email' => 'password@example.test', 'password' => 'FixtureOnly123!', 'role' => 'user']);
            $token = auth('api')->login($user);
            $this->withHeader('Authorization', 'Bearer '.$token)->putJson('/api/v1/user/change-password', [
                'currentPassword' => 'FixtureOnly123!', 'newPassword' => 'SaferFixturePassword42!',
            ])->assertOk();
            $this->assertSame(now()->toDateTimeString(), $user->fresh()->password_changed_at->toDateTimeString());
            $this->assertTrue(Hash::check('SaferFixturePassword42!', $user->fresh()->password));
            auth()->forgetGuards();
            $this->getJson('/api/v1/notifications/unread-count')->assertUnauthorized();
            $newToken = auth('api')->login($user->fresh());
            auth()->forgetGuards();
            $refreshed = $this->withHeader('Authorization', 'Bearer '.$newToken)->postJson('/api/v1/auth/refresh')->assertOk()->json('data.access_token');
            auth()->forgetGuards();
            $this->withHeader('Authorization', 'Bearer '.$refreshed)->getJson('/api/v1/me/concours-follows')->assertOk();
        } finally {
            Carbon::setTestNow();
        }
    }

    public function test_legacy_signed_tokens_keep_access_until_a_password_change(): void
    {
        $user = User::create(['name' => 'Legacy fixture', 'username' => 'legacyfixture', 'email' => 'legacy@example.test', 'password' => 'FixtureOnly123!', 'role' => 'user']);
        $legacyToken = auth('api')->claims(['password_version' => null])->login($user);
        auth()->forgetGuards();
        $this->withHeader('Authorization', 'Bearer '.$legacyToken)->getJson('/api/v1/me/concours-follows')->assertOk();
        $user->forceFill(['password' => 'ReplacementPassword42!', 'password_changed_at' => now()])->save();
        auth()->forgetGuards();
        $this->getJson('/api/v1/me/concours-follows')->assertUnauthorized();
    }
}
