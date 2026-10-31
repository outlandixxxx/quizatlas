<?php

return [
    // Supply only for the explicit bootstrap step, then remove from runtime secrets.
    'name' => env('BOOTSTRAP_ADMIN_NAME'),
    'email' => env('BOOTSTRAP_ADMIN_EMAIL'),
    'username' => env('BOOTSTRAP_ADMIN_USERNAME'),
    'password' => env('BOOTSTRAP_ADMIN_PASSWORD'),
];
