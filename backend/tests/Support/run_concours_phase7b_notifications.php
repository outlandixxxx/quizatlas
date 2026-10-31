<?php

// Included only by the guarded Phase 7B fixture entry point, never the live app.
use App\Models\Concours;
use App\Models\ConcoursAnnouncement;
use App\Models\ConcoursFollow;
use App\Models\ConcoursNotificationEvent;
use App\Models\Notification;
use App\Models\User;
use App\Services\ConcoursAnnouncementService;
use App\Services\ConcoursFollowService;
use App\Services\ConcoursNotifications\ConcoursDeliveryService;
use App\Services\ConcoursNotifications\ConcoursEventService;
use Carbon\Carbon;
use Carbon\CarbonImmutable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

if (! isset($app) || DB::getDatabaseName() !== 'maroquiz_phase7b_acceptance') {
    throw new RuntimeException('Isolated fixture database required.');
}
$checks = [];
$expect = function (bool $condition, string $name) use (&$checks): void {
    if (! $condition) {
        throw new RuntimeException('Notification acceptance failed: '.$name);
    }
    $checks[] = ['feature' => $name, 'status' => 'PASS'];
};
$clock = CarbonImmutable::parse('2026-10-27 12:00:00', 'Africa/Casablanca');
$setClock = function (CarbonImmutable $date): void {
    Carbon::setTestNow($date);
    CarbonImmutable::setTestNow($date);
};
$setClock($clock);
$actor = User::where('email', 'phase7b-admin@example.test')->firstOrFail();
$concours = Concours::where('slug', 'education-preparation')->firstOrFail();
$gradeA = $concours->preparationOptions()->where('name_fr', 'Grade test A')->firstOrFail()->id;
$gradeB = $concours->preparationOptions()->where('name_fr', 'Grade test B')->firstOrFail()->id;
$expect(! config('concours_notifications.enabled') && ! config('concours_notifications.push_enabled'), 'Fixture API defaults remain delivery/push disabled');
$expect(ConcoursNotificationEvent::count() === 0 && Notification::count() === 0, 'UI publication with disabled delivery staged no notification work');
$expect(! ConcoursAnnouncement::where('slug', 'phase7b-notification-fixture')->exists(), 'Fresh notification fixture scenario');

try {
    // Process-local only: neither .env nor the web/API fixture config is changed.
    config(['concours_notifications.enabled' => true, 'concours_notifications.push_enabled' => false]);
    $follows = app(ConcoursFollowService::class);
    $users = [];
    foreach (['user', 'admin', 'other', 'manager'] as $role) {
        $user = User::where('email', 'phase7b-'.$role.'@example.test')->firstOrFail();
        $users[$role] = $user;
        $follow = ConcoursFollow::where('user_id', $user->id)->where('concours_id', $concours->id)->first();
        $follows->save($user, $concours, ['version' => $follow?->version ?? 0, 'active' => true, 'in_app' => true, 'browser_push' => false,
            'announcements' => true, 'updates' => true, 'deadlines' => true, 'reminder_days' => [7, 1], 'preparation_option_ids' => [$role === 'other' ? $gradeB : $gradeA]]);
    }
    $setClock($clock->addSeconds(2));
    $service = app(ConcoursAnnouncementService::class);
    $record = $service->save(['concours_id' => $concours->id, 'institution_id' => 2, 'title_fr' => 'PHASE 7B — notification fixture',
        'slug' => 'phase7b-notification-fixture', 'session_year' => 2027, 'official_source_url' => 'https://www.emploi-public.ma/phase7b-notification-fixture',
        'registration_opens_on' => '2026-10-01', 'registration_deadline' => '2026-11-03', 'preparation_option_ids' => [$gradeA]], $actor);
    $expect(ConcoursNotificationEvent::count() === 0, 'Draft does not stage an alert');
    $record = $service->transition($record->id, $record->version, 'verify-publish', $actor);
    $expect(ConcoursNotificationEvent::where('kind', 'published')->count() === 1, 'Verified first publication stages one committed event');
    $manager = ConcoursFollow::where('user_id', $users['manager']->id)->where('concours_id', 1)->firstOrFail();
    $manager->update(['active' => false, 'version' => $manager->version + 1]);
    $delivery = app(ConcoursDeliveryService::class);
    $expect($delivery->process() === 2, 'Only two eligible grade-A subscribers receive publication');
    $expect(Notification::where('user_id', $users['other']->id)->count() === 0, 'Grade-B subscriber is excluded');
    $expect(Notification::where('user_id', $users['manager']->id)->count() === 0, 'Unsubscribe before dispatch suppresses pending delivery');
    $expect($delivery->process() === 0 && Notification::count() === 2, 'Retry does not duplicate publication notifications');

    $record = $service->transition($record->id, $record->version, 'withdraw', $actor);
    $record = $service->save(['version' => $record->version, 'title_fr' => 'PHASE 7B — notification fixture updated'], $actor, $record->id);
    $record = $service->transition($record->id, $record->version, 'verify-publish', $actor);
    $expect(ConcoursNotificationEvent::where('kind', 'updated')->count() === 1 && $delivery->process() === 2, 'Meaningful verified update delivers once to current eligible followers');
    $record = $service->transition($record->id, $record->version, 'withdraw', $actor);
    $record = $service->save(['version' => $record->version, 'session_year' => 2028], $actor, $record->id);
    $record = $service->transition($record->id, $record->version, 'verify-publish', $actor);
    $expect(ConcoursNotificationEvent::where('kind', 'updated')->count() === 1, 'Year-only republication produces no update event');

    $events = app(ConcoursEventService::class);
    $expect($events->reminders() === 1 && $delivery->process() === 2, 'J-7 Moroccan calendar reminder delivered');
    $expect($events->reminders() === 0 && $delivery->process() === 0, 'Repeated J-7 check is idempotent');
    $setClock($clock->addDays(6));
    $expect($events->reminders() === 1 && $delivery->process() === 2, 'J-1 Moroccan calendar reminder delivered');
    $expect($events->reminders() === 0 && $delivery->process() === 0, 'Repeated J-1 check is idempotent');
    $expect(ConcoursNotificationEvent::where('kind', 'deadline')->get()->pluck('snapshot')->pluck('days_before')->all() === [7, 1], 'Exactly the configured 7-day and 1-day reminder offsets used');
    $expect(DB::table('concours_notification_deliveries')->count() === 8 && Notification::count() === 8, 'Four events produce exactly eight delivery/notification pairs');
    $expect(DB::table('concours_push_subscriptions')->count() === 0 && DB::table('concours_push_deliveries')->count() === 0, 'No push registration or transmission work created');
    foreach (['friend_request', 'new_message', 'blog_response'] as $type) {
        Notification::create(['user_id' => $users['user']->id, 'type' => $type, 'data' => ['from_user_name' => 'Phase 7B fixture peer', 'from_user_id' => $users['other']->id]]);
    }
    $expect(Notification::available()->where('user_id', $users['user']->id)->count() === 7, 'Legacy friend/chat/blog notifications coexist with Concours alerts');
    Http::assertNothingSent();
    $result = ['database' => DB::getDatabaseName(), 'clock_fixture' => '2026-10-27 / 2026-11-02 Africa/Casablanca',
        'process_local_delivery_only' => true, 'push_enabled' => false, 'outgoing_http' => 0,
        'notification_announcement_id' => $record->id, 'results' => $checks];
    file_put_contents(__DIR__.'/../../artifacts/concours-phase7b/notification-regression.json', json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR)."\n");
    echo json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR)."\n";
} finally {
    Carbon::setTestNow();
    CarbonImmutable::setTestNow();
    config(['concours_notifications.enabled' => false]);
}
