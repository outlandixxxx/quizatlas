<?php

require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

$base = __DIR__ . '/database/seeders';

// Folder names passed as arguments, otherwise every subfolder
$folders = array_slice($argv, 1);
if (!$folders) {
    $folders = array_map('basename', array_filter(glob($base . '/*'), 'is_dir'));
    sort($folders);
}

$ok = [];
$failed = [];

foreach ($folders as $folder) {
    $dir = "$base/$folder";
    if (!is_dir($dir)) {
        echo "Dossier introuvable : $dir\n";
        continue;
    }

    $paths = [];
    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($dir, FilesystemIterator::SKIP_DOTS)
    );
    foreach ($iterator as $file) {
        if ($file->isFile() && $file->getExtension() === 'php') {
            $paths[] = $file->getPathname();
        }
    }
    sort($paths);

    echo "\n=== $folder (" . count($paths) . " fichiers) ===\n";

    foreach ($paths as $path) {
        $name = basename($path, '.php');
        $class = "Database\\Seeders\\{$name}";

        try {
            require_once $path;
            if (!class_exists($class)) {
                throw new RuntimeException("Classe introuvable : $class");
            }
            echo "-> $name... ";
            (new $class())->run();
            echo "OK\n";
            $ok[] = $name;
        } catch (Throwable $e) {
            echo "ÉCHEC\n   " . $e->getMessage() . "\n";
            $failed[] = "$folder/$name : " . $e->getMessage();
        }
    }
}

echo "\n--- Résumé ---\n";
echo count($ok) . " seeders réussis, " . count($failed) . " en échec.\n";
foreach ($failed as $line) {
    echo " - $line\n";
}