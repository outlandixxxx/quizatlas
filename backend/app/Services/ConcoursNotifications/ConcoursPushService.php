<?php

namespace App\Services\ConcoursNotifications;

use App\Models\ConcoursFollow;
use App\Models\ConcoursNotificationDelivery;
use App\Models\ConcoursPushSubscription;
use Carbon\CarbonImmutable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ConcoursPushService
{
    public function __construct(private ConcoursEventService $events, private ConcoursDeliveryService $delivery, private WebPushTransport $transport) {}

    public function process(): int
    {
        if (DB::transactionLevel() !== 0) {
            throw new \LogicException('Browser dispatch requires committed database state.');
        }
        if (! config('concours_notifications.enabled') || ! config('concours_notifications.push_enabled')
            || ! config('concours_notifications.vapid.publicKey') || ! config('concours_notifications.vapid.privateKey')) {
            return 0;
        }
        $count = 0;
        foreach (DB::table('concours_push_deliveries')->where('status', 'pending')->orderBy('id')->limit(20)->pluck('id') as $id) {
            $job = DB::transaction(function () use ($id) {
                $row = DB::table('concours_push_deliveries')->where('id', $id)->lockForUpdate()->first();
                if (! $row || $row->status !== 'pending') {
                    return null;
                }
                $delivery = ConcoursNotificationDelivery::with('event')->find($row->delivery_id);
                $device = ConcoursPushSubscription::where('active', true)->find($row->subscription_id);
                $announcement = $delivery ? $this->events->eligible($delivery->event) : null;
                $follow = $announcement ? ConcoursFollow::with('preparationOptions')->where('user_id', $delivery->user_id)->where('concours_id', $announcement->concours_id)->lockForUpdate()->first() : null;
                if (! $device || $device->generation !== $row->subscription_generation || ! $follow || ! $follow->browser_push || $device->user_id !== $delivery->user_id || ! $this->delivery->matches($follow, $delivery->event, $announcement)) {
                    DB::table('concours_push_deliveries')->where('id', $id)->update(['status' => 'cancelled']);

                    return null;
                }
                // Commit the attempt claim before doing HTTP. Ambiguous failures/crashes
                // are terminal: optional push is best effort, with no duplicate resends.
                $proof = bin2hex(random_bytes(32));
                DB::table('concours_push_deliveries')->where('id', $id)->update(['status' => 'failed', 'attempted_at' => now(), 'verification_hash' => hash('sha256', $proof)]);
                $language = $device->language;
                $labels = ['fr' => ['published' => 'Nouvelle annonce officielle', 'updated' => 'Annonce officielle modifiée', 'deadline' => 'Échéance de candidature proche'],
                    'en' => ['published' => 'New official announcement', 'updated' => 'Official announcement updated', 'deadline' => 'Application deadline approaching'],
                    'ar' => ['published' => 'إعلان رسمي جديد', 'updated' => 'تحديث إعلان رسمي', 'deadline' => 'اقتراب آخر أجل للترشيح']];

                return [$device, ['delivery_id' => $id, 'verification_token' => $proof, 'event_id' => $delivery->event_id, 'user_id' => $delivery->user_id, 'concours_id' => $announcement->concours_id,
                    'announcement_slug' => $announcement->slug, 'title' => $labels[$language][$delivery->event->kind],
                    'body' => mb_substr(($language === 'ar' ? $announcement->title_ar : $announcement->title_fr) ?: ($announcement->title_fr ?: $announcement->title_ar), 0, 180),
                    'lang' => $language, 'dir' => $language === 'ar' ? 'rtl' : 'ltr', 'expires_at' => time() + 60,
                    'url' => '/concours/'.rawurlencode($announcement->concours->slug).'#official-announcement',
                    'tag' => 'concours-'.$delivery->user_id.'-'.$delivery->event_id]];
            }, 3);
            if (! $job) {
                continue;
            }
            [$device, $payload] = $job;
            try {
                if (! $device->fresh()->active) {
                    continue;
                }
                $result = $this->transport->send($device, $payload);
                if ($result === 'expired') {
                    $device->update(['active' => false]);
                }
                DB::table('concours_push_deliveries')->where('id', $id)->update(['status' => $result === 'sent' ? 'sent' : 'failed']);
                if ($result === 'sent') {
                    $count++;
                }
            } catch (\Throwable) {
                Log::warning('Concours browser push failed', ['delivery_id' => $id]);
            }
        }

        return $count;
    }

    public function allowed(int $id, string $proof): bool
    {
        if (! config('concours_notifications.enabled') || ! config('concours_notifications.push_enabled')) {
            return false;
        }
        $row = DB::table('concours_push_deliveries')->where('id', $id)->first();
        if (! $row || ! $row->verification_hash || ! hash_equals($row->verification_hash, hash('sha256', $proof))
            || ! $row->attempted_at || CarbonImmutable::parse($row->attempted_at)->addSeconds(120)->isPast() || $row->status === 'cancelled') {
            return false;
        }
        $delivery = ConcoursNotificationDelivery::with('event')->find($row->delivery_id);
        $device = ConcoursPushSubscription::where('active', true)->find($row->subscription_id);
        $announcement = $delivery ? $this->events->eligible($delivery->event) : null;
        if (! $device || ! $announcement || $device->generation !== $row->subscription_generation || $device->user_id !== $delivery->user_id) {
            return false;
        }
        $follow = ConcoursFollow::with('preparationOptions')->where('user_id', $delivery->user_id)->where('concours_id', $announcement->concours_id)->first();

        return $follow && $follow->browser_push && $this->delivery->matches($follow, $delivery->event, $announcement);
    }
}
