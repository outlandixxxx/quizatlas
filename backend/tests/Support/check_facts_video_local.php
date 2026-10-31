<?php
// Read-only live acceptance setup. No migrations, seeding or content updates.
require __DIR__.'/../../vendor/autoload.php';
$app = require __DIR__.'/../../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();
$dir = storage_path('framework/facts-video-acceptance');
if (in_array('--after', $argv, true)) {
    $before = json_decode(file_get_contents($dir.'/before.json'), true);
    $after = [];
    foreach (array_keys($before) as $table) $after[$table] = Illuminate\Support\Facades\DB::table($table)->count();
    file_put_contents($dir.'/after.json', json_encode($after, JSON_PRETTY_PRINT));
    if ($before !== $after) throw new RuntimeException('Preservation counts changed.');
    echo json_encode(['unchanged' => true, 'counts' => $after], JSON_PRETTY_PRINT).PHP_EOL;
    exit;
}
$user = App\Models\User::where('role', 'admin')->firstOrFail();
$token = auth('api')->login($user);
if (! is_dir($dir)) mkdir($dir, 0700, true);
file_put_contents($dir.'/admin-token', $token);
chmod($dir.'/admin-token', 0600);
$counts = [];
foreach (['facts', 'questions', 'quizzes', 'users', 'exam_pdfs', 'concours', 'concours_announcements'] as $table) {
    $counts[$table] = Illuminate\Support\Facades\DB::table($table)->count();
}
file_put_contents($dir.'/before.json', json_encode($counts, JSON_PRETTY_PRINT));
echo json_encode(['counts' => $counts, 'verified_facts' => App\Models\Fact::where('is_verified', true)->count(), 'environment' => app()->environment()], JSON_PRETTY_PRINT).PHP_EOL;
