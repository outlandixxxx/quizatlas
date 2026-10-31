<?php

namespace App\Console\Commands;

use App\Services\ConcoursNotifications\ConcoursDeliveryService;
use App\Services\ConcoursNotifications\ConcoursEventService;
use App\Services\ConcoursNotifications\ConcoursPushService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class SendConcoursNotifications extends Command
{
    protected $signature = 'concours:notify';

    protected $description = 'Process committed Concours alerts and verified Moroccan-calendar deadline reminders';

    public function handle(ConcoursEventService $events, ConcoursDeliveryService $delivery, ConcoursPushService $push): int
    {
        if (! config('concours_notifications.enabled')) {
            $this->info('Concours notifications are disabled.');

            return self::SUCCESS;
        }
        $lock = Cache::lock('concours-notification-delivery', 600);
        if (! $lock->get()) {
            return self::SUCCESS;
        }
        try {
            $events->reminders();
            $count = $delivery->process();
            $sent = $push->process();
            $this->info("Concours alerts: {$count} recipients processed, {$sent} browser deliveries accepted.");

            return self::SUCCESS;
        } catch (\Throwable $error) {
            Log::warning('Concours notification processing failed', ['exception_type' => $error::class]);
            $this->error('Notification processing failed; pending in-app events will be retried.');

            return self::FAILURE;
        } finally {
            $lock->release();
        }
    }
}
