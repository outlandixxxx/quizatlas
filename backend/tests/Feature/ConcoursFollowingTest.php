<?php

namespace Tests\Feature;

use App\Models\Concours;
use App\Models\ConcoursAnnouncement;
use App\Models\ConcoursAnnouncementSource;
use App\Models\ConcoursCategory;
use App\Models\ConcoursFollow;
use App\Models\ConcoursInstitution;
use App\Models\ConcoursNotificationEvent;
use App\Models\ConcoursPushSubscription;
use App\Models\Notification;
use App\Models\User;
use App\Services\ConcoursAnnouncementService;
use App\Services\ConcoursDiscovery\PublicAddressResolver;
use App\Services\ConcoursDiscoveryService;
use App\Services\ConcoursFollowService;
use App\Services\ConcoursNotifications\ConcoursDeliveryService;
use App\Services\ConcoursNotifications\ConcoursEventService;
use App\Services\ConcoursNotifications\ConcoursPushService;
use App\Services\ConcoursNotifications\PushEndpoint;
use App\Services\ConcoursNotifications\WebPushTransport;
use Carbon\Carbon;
use Carbon\CarbonImmutable;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Minishlink\WebPush\VAPID;
use Tests\ConcoursTestCase;

class ConcoursFollowingTest extends ConcoursTestCase
{
    private Concours $concours;

    private User $user;

    private User $admin;

    private const BASE = '/api/v1/me/concours-follows';

    protected function setUp(): void
    {
        parent::setUp();
        Carbon::setTestNow(Carbon::parse('2026-10-26 12:00:00', 'Africa/Casablanca'));
        CarbonImmutable::setTestNow(CarbonImmutable::parse('2026-10-26 12:00:00', 'Africa/Casablanca'));
        config(['concours_notifications.enabled' => true]);
        $this->user = $this->makeUser('follower');
        $this->admin = $this->makeUser('editor', 'admin');
        $category = ConcoursCategory::create(['slug' => 'fixture', 'name_fr' => 'Fixture', 'name_ar' => 'تجربة', 'is_active' => true]);
        $institution = ConcoursInstitution::create(['slug' => 'fixture', 'name_fr' => 'Fixture institution', 'name_ar' => 'تجربة', 'is_active' => true]);
        $this->concours = Concours::create(['slug' => 'fixture', 'name_fr' => 'Concours fixture', 'name_ar' => 'تجربة', 'category_id' => $category->id, 'institution_id' => $institution->id, 'is_active' => true, 'type' => 'recruitment']);
    }

    protected function tearDown(): void
    {
        Carbon::setTestNow();
        CarbonImmutable::setTestNow();
        parent::tearDown();
    }

    private function makeUser(string $name, string $role = 'user'): User
    {
        return User::create(['name' => $name, 'username' => $name, 'email' => $name.'@example.test', 'password' => 'TestOnly123!', 'role' => $role]);
    }

    private function login(?User $user = null): void
    {
        $this->withHeader('Authorization', 'Bearer '.auth('api')->login($user ?? $this->user));
    }

    private function prefs(array $replace = []): array
    {
        return array_replace(['version' => 0, 'active' => true, 'in_app' => true, 'browser_push' => false, 'announcements' => true, 'updates' => true, 'deadlines' => true, 'reminder_days' => [7, 1], 'preparation_option_ids' => []], $replace);
    }

    private function follow(?User $user = null, array $replace = []): ConcoursFollow
    {
        return app(ConcoursFollowService::class)->save($user ?? $this->user, $this->concours, $this->prefs($replace));
    }

    private function draft(array $replace = []): ConcoursAnnouncement
    {
        return app(ConcoursAnnouncementService::class)->save(array_replace(['concours_id' => $this->concours->id, 'title_fr' => 'Official fixture title', 'title_ar' => 'إعلان تجريبي', 'official_source_url' => 'https://www.emploi-public.ma/fixture', 'registration_deadline' => '2026-11-02', 'session_year' => 2026], $replace), $this->admin);
    }

    private function publish(?ConcoursAnnouncement $record = null): ConcoursAnnouncement
    {
        $service = app(ConcoursAnnouncementService::class);
        $record ??= $this->draft();
        $record = $service->transition($record->id, $record->version, 'verify', $this->admin);

        return $service->transition($record->id, $record->version, 'publish', $this->admin);
    }

    private function process(): int
    {
        return app(ConcoursDeliveryService::class)->process();
    }

    public function test_follow_endpoints_require_authentication_and_only_manage_the_current_user(): void
    {
        foreach ([['GET', self::BASE], ['GET', self::BASE.'/configuration'], ['GET', self::BASE.'/1'], ['PUT', self::BASE.'/1'], ['POST', '/api/v1/me/concours-push'], ['DELETE', '/api/v1/me/concours-push/1']] as [$method, $url]) {
            $this->json($method, $url)->assertUnauthorized();
        }
        $other = $this->makeUser('other');
        $theirFollow = $this->follow($other);
        $this->login();
        $this->getJson(self::BASE)->assertOk()->assertJsonPath('data.meta.total', 0);
        $this->getJson(self::BASE.'/'.$this->concours->id)->assertJsonPath('data.version', 0);
        $this->putJson(self::BASE.'/'.$this->concours->id, $this->prefs(['user_id' => $other->id]))->assertOk();
        $this->assertSame(2, ConcoursFollow::count());
        $this->assertSame(1, $theirFollow->fresh()->version);
    }

    public function test_follow_preferences_unfollow_and_refollow_keep_a_unique_subscription(): void
    {
        $this->login();
        $option = $this->concours->preparationOptions()->create(['name_fr' => 'Grade A']);
        $this->putJson(self::BASE.'/'.$this->concours->id, $this->prefs(['preparation_option_ids' => [$option->id]]))->assertOk()->assertJsonPath('data.version', 1);
        $this->putJson(self::BASE.'/'.$this->concours->id, $this->prefs())->assertConflict();
        $this->putJson(self::BASE.'/'.$this->concours->id, $this->prefs(['version' => 1, 'active' => false]))->assertOk()->assertJsonPath('data.active', false);
        $this->getJson(self::BASE)->assertJsonPath('data.meta.total', 0);
        $this->putJson(self::BASE.'/'.$this->concours->id, $this->prefs(['version' => 2]))->assertOk();
        $this->assertSame(1, ConcoursFollow::count());
    }

    public function test_track_validation_rejects_foreign_and_inactive_tracks_and_invalid_reminder_days(): void
    {
        $this->login();
        $other = $this->concours->replicate();
        $other->slug = 'other';
        $other->save();
        $foreign = $other->preparationOptions()->create(['name_fr' => 'Foreign']);
        $inactive = $this->concours->preparationOptions()->create(['name_fr' => 'Inactive', 'is_active' => false]);
        foreach ([['preparation_option_ids' => [$foreign->id]], ['preparation_option_ids' => [$inactive->id]], ['reminder_days' => [999]]] as $bad) {
            $this->putJson(self::BASE.'/'.$this->concours->id, $this->prefs($bad))->assertUnprocessable();
        }
        $this->assertSame(0, ConcoursFollow::count());
    }

    public function test_only_verified_publication_queues_one_notification_per_event_and_user(): void
    {
        $this->follow();
        $draft = $this->draft();
        $this->assertSame(0, ConcoursNotificationEvent::count());
        $service = app(ConcoursAnnouncementService::class);
        $verified = $service->transition($draft->id, $draft->version, 'verify', $this->admin);
        $this->assertSame(0, ConcoursNotificationEvent::count());
        $published = $service->transition($draft->id, $verified->version, 'publish', $this->admin);
        $this->assertSame(0, Notification::count());
        $this->assertSame(1, ConcoursNotificationEvent::count());
        $this->assertSame(1, $this->process());
        $this->process();
        $notification = Notification::sole();
        $this->assertSame('concours_published', $notification->type);
        $this->assertSame($published->slug, $notification->data['announcement_slug']);
        $this->assertSame(1, DB::table('concours_notification_deliveries')->count());
    }

    public function test_rollback_and_uncommitted_state_never_dispatch_notifications(): void
    {
        $this->follow();
        DB::beginTransaction();
        try {
            $this->publish();
            $this->assertSame(0, Notification::count());
            try {
                $this->process();
                $this->fail('Dispatch ran inside a transaction');
            } catch (\LogicException $expected) {
                $this->assertStringContainsString('committed', $expected->getMessage());
            }
        } finally {
            DB::rollBack();
        }
        $this->assertSame(0, ConcoursNotificationEvent::count());
        $this->assertSame(0, $this->process());
    }

    public function test_in_app_failure_rolls_back_the_entire_batch_and_retry_delivers_once(): void
    {
        $this->follow();
        $this->follow($this->makeUser('second'));
        $this->publish();
        $dispatcher = Notification::getEventDispatcher();
        Notification::setEventDispatcher(clone $dispatcher);
        $attempts = 0;
        Notification::creating(function () use (&$attempts) {
            if (++$attempts === 2) {
                throw new \RuntimeException('Controlled in-app persistence failure');
            }
        });
        try {
            $this->process();
            $this->fail('The controlled storage failure was ignored.');
        } catch (\RuntimeException $error) {
            $this->assertSame('Controlled in-app persistence failure', $error->getMessage());
        } finally {
            Notification::setEventDispatcher($dispatcher);
        }
        $this->assertSame(0, Notification::count());
        $this->assertSame(0, DB::table('concours_notification_deliveries')->count());
        $this->assertNull(ConcoursNotificationEvent::sole()->processed_at);
        $this->assertSame(0, ConcoursNotificationEvent::sole()->last_follow_id);
        $this->assertSame(2, $this->process());
        $this->assertSame(0, $this->process());
        $this->assertSame(2, Notification::count());
        $this->assertSame(2, DB::table('concours_notification_deliveries')->count());
    }

    public function test_batch_cursor_resumes_and_rechecks_unsubscribe_between_runs(): void
    {
        config(['concours_notifications.batch_size' => 1]);
        $this->follow();
        $second = $this->makeUser('second');
        $follow = $this->follow($second);
        $this->follow($this->makeUser('third'));
        $this->publish();
        $this->assertSame(1, $this->process());
        $this->assertNull(ConcoursNotificationEvent::sole()->processed_at);
        app(ConcoursFollowService::class)->save($second, $this->concours, $this->prefs(['version' => $follow->version, 'active' => false]));
        $this->assertSame(1, $this->process());
        $this->assertSame(0, $this->process());
        $this->assertNotNull(ConcoursNotificationEvent::sole()->processed_at);
        $this->assertSame(2, Notification::count());
        $this->assertSame(0, Notification::where('user_id', $second->id)->count());
    }

    public function test_track_relevance_includes_parent_children_and_unscoped_notices_without_other_grades(): void
    {
        $root = $this->concours->preparationOptions()->create(['name_fr' => 'Root']);
        $child = $this->concours->preparationOptions()->create(['name_fr' => 'Child', 'parent_id' => $root->id]);
        $other = $this->concours->preparationOptions()->create(['name_fr' => 'Other']);
        $parentUser = $this->makeUser('parent');
        $otherUser = $this->makeUser('other');
        $this->follow($this->user, ['preparation_option_ids' => [$child->id]]);
        $this->follow($parentUser, ['preparation_option_ids' => [$root->id]]);
        $this->follow($otherUser, ['preparation_option_ids' => [$other->id]]);
        $this->publish($this->draft(['preparation_option_ids' => [$child->id]]));
        $this->process();
        $this->assertSame(2, Notification::count());
        $this->assertSame(0, Notification::where('user_id', $otherUser->id)->count());
        $this->publish();
        $this->process();
        $this->assertSame(5, Notification::count());
    }

    public function test_meaningful_verified_updates_notify_but_session_year_and_unchanged_republishing_do_not(): void
    {
        $this->follow();
        $record = $this->publish();
        $this->process();
        $service = app(ConcoursAnnouncementService::class);
        $record = $service->transition($record->id, $record->version, 'withdraw', $this->admin);
        $record = $service->save(['version' => $record->version, 'session_year' => 2027], $this->admin, $record->id);
        $record = $this->publish($record);
        $this->process();
        $this->assertSame(1, ConcoursNotificationEvent::count());
        $record = $service->transition($record->id, $record->version, 'withdraw', $this->admin);
        $record = $service->save(['version' => $record->version, 'registration_deadline' => '2026-11-03'], $this->admin, $record->id);
        $record = $this->publish($record);
        $this->process();
        $this->assertSame(1, Notification::where('type', 'concours_updated')->count());
        $record = $service->transition($record->id, $record->version, 'archive', $this->admin);
        $service->transition($record->id, $record->version, 'publish', $this->admin);
        $this->process();
        $this->assertSame(2, Notification::count());
    }

    public function test_preferences_unfollow_and_late_follow_take_effect_before_queued_delivery(): void
    {
        $follow = $this->follow();
        $this->publish();
        app(ConcoursFollowService::class)->save($this->user, $this->concours, $this->prefs(['version' => $follow->version, 'active' => false]));
        $later = $this->makeUser('later');
        Carbon::setTestNow(now()->addSeconds(2));
        CarbonImmutable::setTestNow(now());
        $this->follow($later);
        $this->assertSame(0, $this->process());
        $this->assertSame(0, Notification::count());
    }

    public function test_archived_withdrawn_superseded_or_hidden_announcements_never_get_pending_alerts(): void
    {
        $this->follow();
        $service = app(ConcoursAnnouncementService::class);
        foreach (['archive', 'withdraw'] as $action) {
            $record = $this->publish();
            $service->transition($record->id, $record->version, $action, $this->admin);
        }
        $old = $this->publish();
        $this->publish($this->draft(['replaces_announcement_id' => $old->id]));
        $this->process();
        $this->assertSame(1, Notification::count()); // Only the verified replacement.
        $this->concours->update(['is_active' => false]);
        $this->login();
        $this->getJson('/api/v1/notifications')->assertOk()->assertJsonPath('data', []);
        $this->assertSame(1, Notification::count()); // Stored history is retained.
    }

    public function test_verified_deadline_reminders_use_casablanca_dates_and_deduplicate(): void
    {
        $this->follow();
        $record = $this->publish();
        $this->process();
        $events = app(ConcoursEventService::class);
        $events->reminders();
        $events->reminders();
        $this->process();
        $this->assertSame(1, Notification::where('type', 'concours_deadline')->count());
        $this->assertSame(7, Notification::where('type', 'concours_deadline')->first()->data['days_before']);
        Carbon::setTestNow(Carbon::parse('2026-11-01 00:30:00', 'Africa/Casablanca'));
        CarbonImmutable::setTestNow(CarbonImmutable::parse('2026-11-01 00:30:00', 'Africa/Casablanca'));
        $this->assertSame('2026-11-01', ConcoursAnnouncement::today());
        $events->reminders();
        $this->process();
        $this->assertSame(2, Notification::where('type', 'concours_deadline')->count());
        $this->assertSame([7, 1], Notification::where('type', 'concours_deadline')->orderBy('id')->get()->map(fn ($notification) => $notification->data['days_before'])->all());
    }

    public function test_missing_draft_withdrawn_and_postponed_deadlines_do_not_generate_reminders(): void
    {
        $this->follow();
        $this->draft();
        $this->publish($this->draft(['registration_deadline' => null]));
        $this->publish($this->draft(['official_decision' => 'postponed']));
        $record = $this->publish();
        app(ConcoursAnnouncementService::class)->transition($record->id, $record->version, 'withdraw', $this->admin);
        $this->assertSame(0, app(ConcoursEventService::class)->reminders());
        $this->assertSame(0, ConcoursNotificationEvent::where('kind', 'deadline')->count());
    }

    public function test_queued_reminders_are_cancelled_when_deadline_changes_or_is_no_longer_due(): void
    {
        $this->follow(null, ['announcements' => false, 'updates' => false]);
        $record = $this->publish();
        app(ConcoursEventService::class)->reminders();
        $record = app(ConcoursAnnouncementService::class)->transition($record->id, $record->version, 'withdraw', $this->admin);
        $record = app(ConcoursAnnouncementService::class)->save(['version' => $record->version, 'registration_deadline' => '2026-11-04'], $this->admin, $record->id);
        $this->publish($record);
        $this->process();
        $this->assertSame(0, Notification::count());
    }

    public function test_legacy_notifications_and_own_read_permissions_are_preserved(): void
    {
        $legacy = Notification::create(['user_id' => $this->user->id, 'type' => 'friend_request', 'data' => ['from_user_id' => $this->admin->id]]);
        $other = Notification::create(['user_id' => $this->admin->id, 'type' => 'new_message', 'data' => ['from_user_id' => $this->user->id]]);
        $this->follow();
        $this->publish();
        $this->process();
        $this->login();
        $this->getJson('/api/v1/notifications/unread-count')->assertJsonPath('data.count', 2);
        $this->postJson('/api/v1/notifications/'.$other->id.'/read')->assertForbidden();
        $this->postJson('/api/v1/notifications/'.$legacy->id.'/read')->assertOk();
        $this->assertSame('friend_request', $legacy->fresh()->type);
    }

    private function enablePush(): void
    {
        config(['concours_notifications.push_enabled' => true, 'concours_notifications.vapid.publicKey' => 'TEST_ONLY', 'concours_notifications.vapid.privateKey' => 'TEST_ONLY']);
    }

    private function device(User $user): ConcoursPushSubscription
    {
        return ConcoursPushSubscription::create(['user_id' => $user->id, 'endpoint_hash' => hash('sha256', 'fixture-'.$user->id), 'endpoint' => 'https://fcm.googleapis.com/fcm/send/fixture-'.$user->id, 'keys' => ['p256dh' => 'TEST_ONLY', 'auth' => 'TEST_ONLY'], 'language' => 'ar', 'active' => true, 'consented_at' => now()]);
    }

    public function test_optional_push_is_idempotent_and_transport_failure_does_not_block_publication_or_in_app_delivery(): void
    {
        $this->enablePush();
        $this->follow(null, ['browser_push' => true]);
        $this->device($this->user);
        $this->mock(WebPushTransport::class, fn ($mock) => $mock->shouldReceive('send')->once()->andThrow(new \RuntimeException('Fixture network failure')));
        $record = $this->publish();
        $this->assertSame('published', $record->publication_status);
        $this->process();
        app(ConcoursPushService::class)->process();
        app(ConcoursPushService::class)->process();
        $this->assertSame(1, Notification::count());
        $this->assertSame('failed', DB::table('concours_push_deliveries')->value('status'));
    }

    public function test_push_rechecks_follow_and_device_permission_before_delivery_and_removes_expired_endpoints(): void
    {
        $this->enablePush();
        $follow = $this->follow(null, ['browser_push' => true]);
        $device = $this->device($this->user);
        $this->publish();
        $this->process();
        $device->update(['active' => false]);
        $this->mock(WebPushTransport::class, fn ($mock) => $mock->shouldNotReceive('send'));
        app(ConcoursPushService::class)->process();
        $this->assertSame('cancelled', DB::table('concours_push_deliveries')->value('status'));
    }

    public function test_expired_push_endpoint_is_disabled_and_in_app_history_is_retained(): void
    {
        $this->enablePush();
        $this->follow(null, ['browser_push' => true]);
        $device = $this->device($this->user);
        $this->mock(WebPushTransport::class, fn ($mock) => $mock->shouldReceive('send')->once()->andReturn('expired'));
        $this->publish();
        $this->process();
        app(ConcoursPushService::class)->process();
        $this->assertFalse($device->fresh()->active);
        $this->assertSame(1, Notification::count());
    }

    public function test_disabled_event_preferences_and_disabled_channels_suppress_delivery(): void
    {
        $this->follow(null, ['announcements' => false, 'updates' => false, 'deadlines' => false]);
        $other = $this->makeUser('no-channels');
        $this->follow($other, ['in_app' => false, 'browser_push' => false]);
        $this->publish();
        app(ConcoursEventService::class)->reminders();
        $this->process();
        $this->assertSame(0, Notification::count());
        $this->assertSame(0, DB::table('concours_notification_deliveries')->count());
    }

    public function test_phase5_discoveries_never_queue_notifications_even_when_delivery_is_enabled(): void
    {
        $this->follow();
        $source = ConcoursAnnouncementSource::create(['key' => 'fixture', 'name' => 'Fixture source', 'official_url' => 'https://www.emploi-public.ma/', 'listing_url' => 'https://www.emploi-public.ma/fr/']);
        $discovery = app(ConcoursDiscoveryService::class)->capture($source, ['title' => 'Unverified discovery fixture', 'official_url' => 'https://www.emploi-public.ma/fixture-discovery']);
        app(ConcoursDiscoveryService::class)->review($discovery->id, ['version' => 1, 'action' => 'reject', 'review_note' => 'Fixture rejection'], $this->admin);
        $this->process();
        $this->assertSame(0, ConcoursNotificationEvent::count());
        $this->assertSame(0, Notification::count());
    }

    public function test_browser_display_capability_rechecks_remote_unfollow_without_a_stored_jwt(): void
    {
        $this->enablePush();
        $follow = $this->follow(null, ['browser_push' => true]);
        $this->device($this->user);
        $payload = null;
        $this->mock(WebPushTransport::class, function ($mock) use (&$payload) {
            $mock->shouldReceive('send')->once()->andReturnUsing(function ($device, $message) use (&$payload) {
                $payload = $message;

                return 'sent';
            });
        });
        $this->publish();
        $this->process();
        app(ConcoursPushService::class)->process();
        $proof = ['delivery_id' => $payload['delivery_id'], 'verification_token' => $payload['verification_token']];
        $this->postJson('/api/v1/public/concours-push/verify', $proof)->assertOk()->assertJsonPath('data.allowed', true);
        $this->postJson('/api/v1/public/concours-push/verify', array_replace($proof, ['verification_token' => str_repeat('a', 64)]))->assertForbidden();
        app(ConcoursFollowService::class)->save($this->user, $this->concours, $this->prefs(['version' => $follow->version, 'active' => false]));
        $this->postJson('/api/v1/public/concours-push/verify', $proof)->assertForbidden()->assertJsonPath('data.allowed', false);
        $this->assertSame(1, Notification::count());
    }

    public function test_push_endpoint_registration_requires_explicit_permission_is_user_scoped_and_hides_secrets(): void
    {
        $this->login();
        $this->enablePush();
        $base64 = fn ($value) => rtrim(strtr(base64_encode($value), '+/', '-_'), '=');
        $payload = ['endpoint' => 'https://fcm.googleapis.com/fcm/send/fixture', 'keys' => ['p256dh' => $base64("\x04".str_repeat('a', 64)), 'auth' => $base64(str_repeat('b', 16))], 'language' => 'fr', 'permission' => 'denied'];
        $this->postJson('/api/v1/me/concours-push', $payload)->assertUnprocessable();
        $payload['permission'] = 'granted';
        $result = $this->postJson('/api/v1/me/concours-push', $payload)->assertOk()->json('data');
        $this->assertArrayNotHasKey('keys', $result);
        $this->assertStringNotContainsString($payload['endpoint'], DB::table('concours_push_subscriptions')->value('endpoint'));
        $this->login($this->admin);
        $this->deleteJson('/api/v1/me/concours-push/'.$result['id'])->assertNotFound();
        $this->postJson('/api/v1/me/concours-push', $payload)->assertConflict();
        $this->login();
        $this->deleteJson('/api/v1/me/concours-push/'.$result['id'])->assertOk();
        $this->assertFalse(ConcoursPushSubscription::first()->active);
    }

    public function test_actual_web_push_transport_encrypts_aes128gcm_and_vapid_without_network(): void
    {
        $keys = VAPID::createVapidKeys();
        config(['concours_notifications.vapid' => ['subject' => 'https://maroquiz.com', 'publicKey' => $keys['publicKey'], 'privateKey' => $keys['privateKey']]]);
        $pair = openssl_pkey_new(['private_key_type' => OPENSSL_KEYTYPE_EC, 'curve_name' => 'prime256v1']);
        $details = openssl_pkey_get_details($pair)['ec'];
        $encode = fn ($bytes) => rtrim(strtr(base64_encode($bytes), '+/', '-_'), '=');
        $device = $this->device($this->user);
        $device->update(['keys' => ['p256dh' => $encode("\x04".str_pad($details['x'], 32, "\0", STR_PAD_LEFT).str_pad($details['y'], 32, "\0", STR_PAD_LEFT)), 'auth' => $encode(random_bytes(16))]]);
        $history = [];
        $stack = HandlerStack::create(new MockHandler([new Response(201)]));
        $stack->push(Middleware::history($history));
        $client = new Client(['handler' => $stack]);
        $resolver = \Mockery::mock(PublicAddressResolver::class);
        $resolver->shouldReceive('resolve')->once()->andReturn('93.184.216.34');
        $transport = \Mockery::mock(WebPushTransport::class, [new PushEndpoint, $resolver])->makePartial()->shouldAllowMockingProtectedMethods();
        $transport->shouldReceive('client')->once()->andReturn($client);
        $this->assertSame('sent', $transport->send($device, ['tag' => 'fixture-once', 'body' => 'PUBLIC FIXTURE TITLE']));
        $this->assertCount(1, $history);
        $request = $history[0]['request'];
        $this->assertSame('aes128gcm', $request->getHeaderLine('Content-Encoding'));
        $this->assertStringStartsWith('vapid ', $request->getHeaderLine('Authorization'));
        $this->assertStringNotContainsString('PUBLIC FIXTURE TITLE', (string) $request->getBody());
        $this->assertSame('60', $request->getHeaderLine('TTL'));
    }

    public function test_push_url_validation_blocks_ssrf_and_disabled_configuration_does_not_deliver(): void
    {
        foreach (['http://fcm.googleapis.com/a', 'https://127.0.0.1/a', 'https://evil.test/a', 'https://fcm.googleapis.com.evil.test/a', 'https://user:pass@fcm.googleapis.com/a', 'https://web.push.apple.com:8080/a'] as $url) {
            try {
                app(PushEndpoint::class)->validate($url);
                $this->fail('Unsafe endpoint accepted');
            } catch (ValidationException $expected) {
                $this->assertArrayHasKey('endpoint', $expected->errors());
            }
        }
        config(['concours_notifications.enabled' => false]);
        $this->follow();
        $this->publish();
        Artisan::call('concours:notify');
        $this->assertSame(0, Notification::count());
        $this->assertSame(0, ConcoursNotificationEvent::count());
    }
}
