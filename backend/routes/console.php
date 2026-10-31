<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Schedule::command('quiz-attempts:expire')->everyMinute()->withoutOverlapping();

// Disabled by default, including production. Check per-source due times every hour.
Schedule::command('concours:discover')
    ->hourly()->withoutOverlapping(10)->onOneServer()
    ->when(fn () => (bool) config('concours_discovery.automation_enabled'));

Schedule::command('concours:notify')->everyMinute()->withoutOverlapping(10)->onOneServer()
    ->when(fn () => (bool) config('concours_notifications.enabled'));
