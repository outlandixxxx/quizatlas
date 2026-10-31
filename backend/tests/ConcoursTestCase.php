<?php

namespace Tests;

use Illuminate\Routing\Middleware\ThrottleRequests;
use Illuminate\Routing\Middleware\ThrottleRequestsWithRedis;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

abstract class ConcoursTestCase extends TestCase
{
    public function createApplication()
    {
        // Ignore a developer's cached route manifest without clearing or modifying it.
        $oldEnv = $_ENV['APP_ROUTES_CACHE'] ?? null;
        $oldServer = $_SERVER['APP_ROUTES_CACHE'] ?? null;
        $oldConfigEnv = $_ENV['APP_CONFIG_CACHE'] ?? null;
        $oldConfigServer = $_SERVER['APP_CONFIG_CACHE'] ?? null;
        $_ENV['APP_ROUTES_CACHE'] = $_SERVER['APP_ROUTES_CACHE'] = '/tmp/maroquiz-concours-tests-no-route-cache.php';
        $_ENV['APP_CONFIG_CACHE'] = $_SERVER['APP_CONFIG_CACHE'] = '/tmp/maroquiz-concours-tests-no-config-cache.php';
        try {
            $app = parent::createApplication();
        } finally {
            if ($oldEnv === null) {
                unset($_ENV['APP_ROUTES_CACHE']);
            } else {
                $_ENV['APP_ROUTES_CACHE'] = $oldEnv;
            }
            if ($oldServer === null) {
                unset($_SERVER['APP_ROUTES_CACHE']);
            } else {
                $_SERVER['APP_ROUTES_CACHE'] = $oldServer;
            }
            if ($oldConfigEnv === null) {
                unset($_ENV['APP_CONFIG_CACHE']);
            } else {
                $_ENV['APP_CONFIG_CACHE'] = $oldConfigEnv;
            }
            if ($oldConfigServer === null) {
                unset($_SERVER['APP_CONFIG_CACHE']);
            } else {
                $_SERVER['APP_CONFIG_CACHE'] = $oldConfigServer;
            }
        }
        $app['config']->set([
            'app.env' => 'testing',
            'database.default' => 'sqlite', 'database.connections.sqlite.database' => ':memory:',
            'database.connections.sqlite.url' => null, 'cache.default' => 'array',
            'jwt.secret' => str_repeat('concours-test-secret-', 4), 'jwt.blacklist_enabled' => false,
        ]);

        return $app;
    }

    protected function setUp(): void
    {
        parent::setUp();
        $this->assertSame('sqlite', DB::connection()->getDriverName());
        $this->assertSame(':memory:', DB::connection()->getDatabaseName());
        $this->withoutMiddleware([ThrottleRequests::class, ThrottleRequestsWithRedis::class]);
        // Normal migrations on a new in-memory database only; never migrate:fresh.
        $paths = array_values(array_filter(glob(database_path('migrations/*.php')),
            fn ($path) => basename($path) !== '2026_08_13_215026_add_professional_to_quiz_difficulty.php'));
        Artisan::call('migrate', ['--path' => $paths, '--realpath' => true]);
        Storage::fake('exam_pdfs');
    }
}
