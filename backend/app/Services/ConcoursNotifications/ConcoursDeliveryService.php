<?php

namespace App\Services\ConcoursNotifications;

use App\Models\ConcoursAnnouncement;
use App\Models\ConcoursFollow;
use App\Models\ConcoursNotificationDelivery;
use App\Models\ConcoursNotificationEvent;
use App\Models\ConcoursPushSubscription;
use App\Models\Notification;
use Illuminate\Support\Facades\DB;
use LogicException;

class ConcoursDeliveryService
{
    public function __construct(private ConcoursEventService $events) {}

    public function matches(ConcoursFollow $follow, ConcoursNotificationEvent $event, ConcoursAnnouncement $announcement): bool
    {
        if (! $follow->active || $follow->followed_at->gt($event->occurred_at)) {
            return false;
        }
        $preference = match ($event->kind) {
            'published' => 'announcements', 'updated' => 'updates', 'deadline' => 'deadlines'
        };
        if (! $follow->$preference || ($event->kind === 'deadline' && ! in_array($event->snapshot['days_before'], $follow->reminder_days, true))) {
            return false;
        }
        $selected = $follow->preparationOptions->pluck('id')->all();
        $targets = $announcement->preparationOptions->pluck('id')->all();
        if (! $selected || ! $targets) {
            return true;
        }
        $available = $announcement->concours->relationLoaded('preparationOptions') ? $announcement->concours->preparationOptions
            : $announcement->concours->preparationOptions()->available()->get(['id', 'parent_id']);
        $expand = fn ($ids) => $available->filter(fn ($option) => in_array($option->id, $ids, true) || in_array($option->parent_id, $ids, true))->pluck('id')->all();

        return (bool) array_intersect($expand($selected), $expand($targets));
    }

    public function process(): int
    {
        if (DB::transactionLevel() !== 0) {
            throw new LogicException('Notification dispatch requires committed database state.');
        }
        if (! config('concours_notifications.enabled')) {
            return 0;
        }
        $count = 0;
        $ids = ConcoursNotificationEvent::whereNull('processed_at')->orderBy('id')->limit(20)->pluck('id');
        foreach ($ids as $id) {
            DB::transaction(function () use ($id, &$count) {
                $event = ConcoursNotificationEvent::lockForUpdate()->findOrFail($id);
                if ($event->processed_at) {
                    return;
                }
                // Lock the announcement against concurrent withdrawal during this batch.
                ConcoursAnnouncement::whereKey($event->announcement_id)->lockForUpdate()->first();
                $announcement = $this->events->eligible($event);
                if (! $announcement) {
                    $event->update(['processed_at' => now()]);

                    return;
                }
                $announcement->concours->load(['preparationOptions' => fn ($q) => $q->available()]);
                $follows = ConcoursFollow::where('concours_id', $event->concours_id)->where('active', true)->where('followed_at', '<=', $event->occurred_at->format('Y-m-d H:i:s.u'))->where('id', '>', $event->last_follow_id)
                    ->orderBy('id')->limit(config('concours_notifications.batch_size'))->lockForUpdate()->with('preparationOptions')->get();
                foreach ($follows as $follow) {
                    if (! $this->matches($follow, $event, $announcement) || (! $follow->in_app && ! $follow->browser_push)) {
                        continue;
                    }
                    if (ConcoursNotificationDelivery::where('event_id', $event->id)->where('user_id', $follow->user_id)->exists()) {
                        continue;
                    }
                    $delivery = ConcoursNotificationDelivery::create(['event_id' => $event->id, 'user_id' => $follow->user_id, 'created_at' => now()]);
                    if ($follow->in_app) {
                        $notification = Notification::create(['user_id' => $follow->user_id, 'type' => 'concours_'.$event->kind,
                            'data' => ['concours_slug' => $announcement->concours->slug, 'announcement_slug' => $announcement->slug,
                                'announcement_id' => $announcement->id, 'title_fr' => $announcement->title_fr, 'title_ar' => $announcement->title_ar,
                                'deadline' => $announcement->registration_deadline?->toDateString(), 'days_before' => $event->snapshot['days_before'] ?? null]]);
                        $delivery->update(['notification_id' => $notification->id]);
                    }
                    if ($follow->browser_push && config('concours_notifications.push_enabled')) {
                        foreach (ConcoursPushSubscription::where('user_id', $follow->user_id)->where('active', true)->get() as $device) {
                            // Devices created after the event do not receive old queued alerts.
                            if ($device->consented_at->gt($event->occurred_at)) {
                                continue;
                            }
                            DB::table('concours_push_deliveries')->insertOrIgnore(['delivery_id' => $delivery->id, 'subscription_id' => $device->id, 'subscription_generation' => $device->generation, 'status' => 'pending']);
                        }
                    }
                    $count++;
                }
                $event->last_follow_id = $follows->last()?->id ?? $event->last_follow_id;
                if ($follows->count() < config('concours_notifications.batch_size')) {
                    $event->processed_at = now();
                }
                $event->save();
            }, 3);
        }

        return $count;
    }
}
