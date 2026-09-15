<?php

$seederName = $argv[1] ?? null;
if (!$seederName) {
    echo "Usage: php run_seeder.php SeederClassName\n";
    exit(1);
}

require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$path = __DIR__ . "/database/seeders/sciences and it/{$seederName}.php";

if (!file_exists($path)) {
    echo "Fichier introuvable : $path\n";
    exit(1);
}

require_once $path;

$class = "Database\\Seeders\\{$seederName}";

if (!class_exists($class)) {
    echo "Classe introuvable : $class\n";
    exit(1);
}

echo "Exécution de $seederName...\n";
(new $class())->run();
echo "Terminé.\n";
