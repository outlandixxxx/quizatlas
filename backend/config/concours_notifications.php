<?php

return [
    'enabled' => env('CONCOURS_NOTIFICATIONS_ENABLED', false),
    'reminder_days' => [7, 1],
    'batch_size' => 100,
    'push_enabled' => env('CONCOURS_PUSH_ENABLED', false),
    'vapid' => [
        'subject' => env('CONCOURS_VAPID_SUBJECT', 'https://maroquiz.com'),
        'publicKey' => env('CONCOURS_VAPID_PUBLIC_KEY'),
        'privateKey' => env('CONCOURS_VAPID_PRIVATE_KEY'),
    ],
];
