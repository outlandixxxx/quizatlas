<?php

// Isolated acceptance API: existing schema restored from a dump, never migrations.
// This entry point is CLI-only and cannot address the application database.
use App\Models\User;
use Illuminate\Contracts\Console\Kernel;
use Illuminate\Contracts\Http\Kernel as HttpKernel;
use Illuminate\Contracts\Validation\UncompromisedVerifier;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

if (PHP_SAPI !== 'cli') {
    http_response_code(404);
    exit;
}
foreach (['DB_DATABASE' => 'maroquiz_launch_readiness_20261028', 'APP_CONFIG_CACHE' => '/tmp/launch-readiness-no-config.php', 'APP_ROUTES_CACHE' => '/tmp/launch-readiness-no-routes.php',
    'JWT_SECRET' => hash('sha256', 'isolated-launch-readiness-fixture-signing-secret'), 'APP_URL' => 'http://localhost:8078',
    'CONCOURS_DISCOVERY_ENABLED' => 'false', 'CONCOURS_NOTIFICATIONS_ENABLED' => 'false', 'CONCOURS_PUSH_ENABLED' => 'false'] as $key => $value) {
    putenv($key.'='.$value);
    $_ENV[$key] = $_SERVER[$key] = $value;
}
require __DIR__.'/../../vendor/autoload.php';
$app = require __DIR__.'/../../bootstrap/app.php';
$app->make(Kernel::class)->bootstrap();

try {
    if (! app()->environment('local') || DB::getDriverName() !== 'pgsql' || DB::getDatabaseName() !== 'maroquiz_launch_readiness_20261028') {
        throw new RuntimeException('Acceptance fixture database guard failed.');
    }
    $root = '/tmp/maroquiz-launch-readiness-fixture';
    config(['cache.default' => 'file', 'cache.stores.file.path' => $root.'/cache', 'cache.prefix' => 'launch-readiness',
        'session.driver' => 'array', 'logging.default' => 'errorlog', 'mail.default' => 'array',
        'filesystems.disks.exam_pdfs.root' => $root.'/exam_pdfs', 'filesystems.disks.public.root' => $root.'/public',
        'filesystems.disks.local.root' => $root.'/private', 'concours_discovery.automation_enabled' => false,
        'concours_discovery.authorized_feed_urls' => [], 'concours_notifications.enabled' => false, 'concours_notifications.push_enabled' => false]);
    Http::preventStrayRequests();
    Http::fake(['www.google.com/recaptcha/api/siteverify' => Http::response(['success' => true, 'score' => 0.9])]);
    Mail::fake();
    $app->instance(UncompromisedVerifier::class, new class implements UncompromisedVerifier
    {
        public function verify($data)
        {
            return true;
        }
    });
    if (in_array('--setup', $argv, true)) {
        if (DB::table('users')->where('email', 'launch-readiness-admin@example.test')->exists()) {
            throw new RuntimeException('Fixture accounts already exist; refusing to reset acceptance state.');
        }
        foreach (['cache', 'exam_pdfs', 'public', 'private'] as $directory) {
            if (! is_dir($root.'/'.$directory)) {
                mkdir($root.'/'.$directory, 0700, true);
            }
        }
        $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator(storage_path('app/exam_pdfs'), FilesystemIterator::SKIP_DOTS));
        foreach ($iterator as $file) {
            if ($file->isFile()) {
                $relative = substr($file->getPathname(), strlen(storage_path('app/exam_pdfs')) + 1);
                $destination = $root.'/exam_pdfs/'.$relative;
                if (! is_dir(dirname($destination))) {
                    mkdir(dirname($destination), 0700, true);
                }
                copy($file->getPathname(), $destination);
            }
        }
        $ids = [];
        foreach (['admin', 'user', 'manager', 'other'] as $role) {
            $user = new User;
            $user->forceFill(['name' => 'Launch readiness '.$role, 'username' => 'launch'.$role,
                'email' => 'launch-readiness-'.$role.'@example.test', 'password' => 'AcceptanceFixture42!Only',
                'role' => $role === 'other' ? 'user' : $role, 'email_verified_at' => now()])->save();
            $ids[$role] = $user->id;
        }
        echo json_encode(['database' => DB::getDatabaseName(), 'fixture_user_ids' => $ids, 'migrations_unchanged' => DB::table('migrations')->count(), 'all_delivery_gates' => false])."\n";
        exit;
    }
    if (! in_array('--request', $argv, true)) {
        throw new RuntimeException('Expected --setup or --request.');
    }
    $input = json_decode(stream_get_contents(STDIN), true, 512, JSON_THROW_ON_ERROR);
    $path = $input['path'] ?? '';
    if (! str_starts_with($path, '/api/v1/') || str_contains($path, '://')) {
        throw new RuntimeException('Only application API paths are accepted.');
    }
    $server = ['HTTP_ACCEPT' => 'application/json', 'HTTP_HOST' => 'localhost:8078', 'REMOTE_ADDR' => '127.0.0.1'];
    foreach (($input['headers'] ?? []) as $name => $value) {
        if (in_array(strtolower($name), ['authorization', 'content-type', 'origin'], true)) {
            $server[strtolower($name) === 'content-type' ? 'CONTENT_TYPE' : 'HTTP_'.strtoupper(str_replace('-', '_', $name))] = $value;
        }
    }
    $uploads = [];
    foreach (($input['files'] ?? []) as $name => $file) {
        $temporary = tempnam($root, 'upload-');
        file_put_contents($temporary, base64_decode($file['base64'], true));
        $uploads[$name] = new UploadedFile($temporary, basename($file['name']), $file['type'], null, true);
    }
    Request::enableHttpMethodParameterOverride();
    $request = Request::create('http://localhost:8078'.$path, $input['method'] ?? 'GET', $input['fields'] ?? [], [], $uploads, $server, $input['body'] ?? '');
    $kernel = $app->make(HttpKernel::class);
    $response = $kernel->handle($request);
    ob_start();
    $response->sendContent();
    $body = ob_get_clean();
    $kernel->terminate($request, $response);
    foreach ($uploads as $upload) {
        if (is_file($upload->getPathname())) {
            unlink($upload->getPathname());
        }
    }
    echo json_encode(['status' => $response->getStatusCode(), 'headers' => $response->headers->all(), 'body' => base64_encode($body)], JSON_THROW_ON_ERROR)."\n";
} catch (Throwable $error) {
    fwrite(STDERR, $error->getMessage()."\n");
    exit(1);
}
