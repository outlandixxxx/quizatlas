<?php
// Read effective Laravel configuration without booting providers, commands or DB access.
ini_set('display_errors', '0');
ini_set('log_errors', '0');
try {
    chdir('/var/www/html');
    require 'vendor/autoload.php';
    $app = require 'bootstrap/app.php';
    (new Illuminate\Foundation\Bootstrap\LoadEnvironmentVariables)->bootstrap($app);
    (new Illuminate\Foundation\Bootstrap\LoadConfiguration)->bootstrap($app);
    $config = $app['config'];
    if ($config->get('app.env') !== 'production') throw new RuntimeException();
    $connection = $config->get('database.default');
    $db = $config->get('database.connections.'.$connection);
    $disks = [];
    foreach (['local', 'public', 'exam_pdfs'] as $name) {
        $disk = $config->get('filesystems.disks.'.$name);
        if (!is_array($disk) || ($disk['driver'] ?? '') !== 'local') throw new RuntimeException();
        $disks[$name] = $disk['root'];
    }
    echo json_encode([
        'storage_path' => storage_path(),
        'default_disk' => $config->get('filesystems.default'),
        'disks' => $disks,
        'database' => [
            ...array_intersect_key($db, array_flip(['driver', 'host', 'port', 'database'])),
            'has_url' => !empty($db['url']),
        ],
    ], JSON_THROW_ON_ERROR);
} catch (Throwable $e) {
    fwrite(STDERR, "Production storage configuration probe failed.\n");
    exit(1);
}
