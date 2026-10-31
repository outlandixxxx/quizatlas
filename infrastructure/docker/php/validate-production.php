<?php
// No Laravel bootstrap, database access, cached config or secret values in errors.
$required = ['APP_KEY', 'JWT_SECRET', 'APP_URL', 'FRONTEND_URL', 'DB_DATABASE',
    'DB_USERNAME', 'DB_PASSWORD', 'POSTGRES_USER', 'REDIS_PASSWORD'];
$errors = [];
foreach ($required as $name) {
    if (trim((string) getenv($name)) === '' || str_starts_with((string) getenv($name), '__')) {
        $errors[] = $name.' must be explicitly supplied';
    }
}
if (getenv('APP_ENV') !== 'production' || getenv('APP_DEBUG') !== 'false') {
    $errors[] = 'APP_ENV=production and APP_DEBUG=false are required';
}
$key = (string) getenv('APP_KEY');
$decoded = str_starts_with($key, 'base64:') ? base64_decode(substr($key, 7), true) : $key;
if (!is_string($decoded) || strlen($decoded) !== 32 || strlen((string) getenv('JWT_SECRET')) < 32) {
    $errors[] = 'APP_KEY must be a valid 32-byte key and JWT_SECRET at least 32 bytes';
}
foreach (['APP_URL', 'FRONTEND_URL'] as $name) {
    $url = parse_url((string) getenv($name));
    if (!$url || ($url['scheme'] ?? '') !== 'https' || empty($url['host']) || isset($url['user']) || isset($url['pass'])) {
        $errors[] = $name.' must be an HTTPS URL without credentials';
    }
}
if (getenv('DB_USERNAME') === getenv('POSTGRES_USER')) {
    $errors[] = 'DB_USERNAME must use a separately provisioned restricted runtime role';
}
if ($errors) {
    fwrite(STDERR, "Invalid production configuration:\n- ".implode("\n- ", $errors)."\n");
    exit(1);
}
