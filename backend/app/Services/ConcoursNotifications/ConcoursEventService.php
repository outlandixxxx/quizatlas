<?php

namespace App\Services\ConcoursNotifications;

use App\Models\ConcoursAnnouncement;
use App\Models\ConcoursNotificationEvent;
use Carbon\CarbonImmutable;

class ConcoursEventService
{
    private const MEANINGFUL = ['title_fr', 'title_ar', 'description_fr', 'description_ar', 'institution_id',
        'eligibility_fr', 'eligibility_ar', 'required_documents_fr', 'required_documents_ar', 'positions',
        'specialties', 'regions', 'registration_opens_on', 'registration_deadline', 'examination_date',
        'official_publication_date', 'official_decision', 'official_source_url', 'application_url', 'official_pdf_sha256', 'preparation_option_ids'];

    public function fingerprint(array $snapshot): string
    {
        $content = [];
        foreach (self::MEANINGFUL as $key) {
            $value = $snapshot[$key] ?? null;
            if (in_array($key, ['specialties', 'regions', 'preparation_option_ids'], true)) {
                $value ??= [];
                sort($value);
            }
            $content[$key] = $value;
        }

        return hash('sha256', json_encode($content, JSON_THROW_ON_ERROR | JSON_UNESCAPED_UNICODE));
    }

    public function snapshot(ConcoursAnnouncement $announcement): array
    {
        return $announcement->attributesToArray() + ['preparation_option_ids' => $announcement->preparationOptions()->pluck('concours_preparation_options.id')->all()];
    }

    // Called inside the publication transaction, after its revision is written.
    // This is a durable outbox record, never an HTTP call or a user delivery.
    public function published(ConcoursAnnouncement $announcement, bool $firstPublication): void
    {
        if (! config('concours_notifications.enabled')) {
            return;
        }
        $snapshot = $this->snapshot($announcement);
        $fingerprint = $this->fingerprint($snapshot);
        $previous = $announcement->revisions()->where('action', 'published')->where('version', '<', $announcement->version)->orderByDesc('version')->first();
        if (! $firstPublication && (! $previous || $this->fingerprint($previous->snapshot) === $fingerprint)) {
            return;
        }
        $kind = $firstPublication ? 'published' : 'updated';
        ConcoursNotificationEvent::firstOrCreate(['event_key' => hash('sha256', $kind.':'.$announcement->id.':'.$announcement->version)], [
            'announcement_id' => $announcement->id, 'concours_id' => $announcement->concours_id, 'kind' => $kind,
            'fingerprint' => $fingerprint, 'snapshot' => ['announcement_version' => $announcement->version], 'occurred_at' => now(),
        ]);
    }

    public function reminders(): int
    {
        if (! config('concours_notifications.enabled')) {
            return 0;
        }
        $count = 0;
        $today = CarbonImmutable::now('Africa/Casablanca')->startOfDay();
        foreach (config('concours_notifications.reminder_days') as $days) {
            ConcoursAnnouncement::visible()->whereNull('superseded_at')->whereNull('official_decision')
                ->whereDate('registration_deadline', $today->addDays($days)->toDateString())
                ->where(fn ($q) => $q->whereNull('examination_date')->orWhereDate('examination_date', '>=', $today->toDateString()))
                ->chunkById(100, function ($announcements) use ($days, &$count) {
                    foreach ($announcements as $announcement) {
                        $deadline = $announcement->registration_deadline->toDateString();
                        $event = ConcoursNotificationEvent::firstOrCreate(['event_key' => hash('sha256', "deadline:{$announcement->id}:{$deadline}:{$days}")], [
                            'announcement_id' => $announcement->id, 'concours_id' => $announcement->concours_id, 'kind' => 'deadline',
                            'fingerprint' => hash('sha256', $deadline), 'snapshot' => ['deadline' => $deadline, 'days_before' => $days], 'occurred_at' => now(),
                        ]);
                        if ($event->wasRecentlyCreated) {
                            $count++;
                        }
                    }
                });
        }

        return $count;
    }

    public function eligible(ConcoursNotificationEvent $event): ?ConcoursAnnouncement
    {
        $announcement = ConcoursAnnouncement::visible()->whereNull('superseded_at')->with(['concours', 'preparationOptions'])->find($event->announcement_id);
        if (! $announcement) {
            return null;
        }
        if ($event->kind === 'deadline') {
            $expected = CarbonImmutable::now('Africa/Casablanca')->addDays($event->snapshot['days_before'])->toDateString();
            if ($announcement->official_decision || $announcement->announcementStatus() === 'completed'
                || $announcement->registration_deadline?->toDateString() !== $event->snapshot['deadline'] || $expected !== $event->snapshot['deadline']) {
                return null;
            }
        } elseif ($this->fingerprint($this->snapshot($announcement)) !== $event->fingerprint) {
            return null;
        }

        return $announcement;
    }
}
