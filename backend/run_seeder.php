<?php

declare(strict_types=1);

use Illuminate\Database\Seeder;

require __DIR__ . '/vendor/autoload.php';

$app = require __DIR__ . '/bootstrap/app.php';

$app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();

if ($argc < 3) {
    fwrite(STDERR, "Usage: php run_seeder.php <folder> <SeederClass>\n");
    exit(1);
}

$folder = $argv[1];
$seederName = $argv[2];

if (!preg_match('/^[A-Za-z0-9._ -]+$/', $folder)) {
    fwrite(STDERR, "Invalid folder name.\n");
    exit(1);
}

if (!preg_match('/^[A-Za-z0-9_]+$/', $seederName)) {
    fwrite(STDERR, "Invalid seeder class name.\n");
    exit(1);
}

$seederPath = __DIR__ . '/database/seeders/' . $folder . '/' . $seederName . '.php';

if (!is_file($seederPath)) {
    fwrite(STDERR, "Seeder file not found: {$seederPath}\n");
    exit(1);
}

require_once $seederPath;

$class = 'Database\\Seeders\\' . $seederName;

if (!class_exists($class)) {
    fwrite(STDERR, "Seeder class not found: {$class}\n");
    exit(1);
}

if (!is_subclass_of($class, Seeder::class)) {
    fwrite(STDERR, "{$class} is not a Laravel Seeder.\n");
    exit(1);
}

fwrite(STDOUT, "Running {$class}...\n");

$app->make($class)->run();

fwrite(STDOUT, "Seeder completed successfully.\n");
