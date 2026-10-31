<?php

// Optional local migration with transactional preservation checks. Never production.
use Illuminate\Contracts\Console\Kernel;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;

require __DIR__.'/../../vendor/autoload.php';
$app = require __DIR__.'/../../bootstrap/app.php';
$app->make(Kernel::class)->bootstrap();
if (! app()->environment('local') || DB::getDriverName() !== 'pgsql') {
    throw new RuntimeException('Restricted to the local PostgreSQL application.');
}

$columns = [];
foreach (['users', 'notifications', 'jobs', 'job_batches', 'failed_jobs', 'concours_follows', 'concours_follow_preparation_option', 'concours_notification_events', 'concours_notification_deliveries', 'concours_push_subscriptions', 'concours_push_deliveries', 'concours_categories', 'concours_institutions', 'concours', 'concours_announcements', 'concours_announcement_revisions', 'exam_pdfs', 'concours_preparation_options', 'exam_pdf_preparation_option', 'concours_quiz_links', 'concours_subject_links', 'concours_quiz_link_options', 'concours_subject_link_options', 'concours_announcement_preparation_option', 'concours_announcement_sources', 'concours_discoveries', 'concours_discovery_revisions', 'quizzes', 'questions', 'quiz_questions', 'subjects', 'majors'] as $table) {
    if (Schema::hasTable($table)) {
        $columns[$table] = Schema::getColumnListing($table);
    }
}
$snapshot = function () use ($columns): array {
    $result = [];
    foreach ($columns as $table => $fields) {
        $hash = hash_init('sha256');
        $count = 0;
        foreach (DB::table($table)->select($fields)->orderBy(in_array('id', $fields, true) ? 'id' : $fields[0])->cursor() as $row) {
            hash_update($hash, json_encode($row, JSON_THROW_ON_ERROR)."\n");
            $count++;
        }
        $result[$table] = ['count' => $count, 'sha256' => hash_final($hash)];
    }
    $disk = Storage::disk('exam_pdfs');
    $files = $disk->allFiles();
    sort($files);
    $hash = hash_init('sha256');
    foreach ($files as $path) {
        hash_update($hash, $path.' '.hash_file('sha256', $disk->path($path))."\n");
    }
    $result['pdf_files'] = ['count' => count($files), 'sha256' => hash_final($hash)];

    return $result;
};

DB::beginTransaction();
try {
    $before = $snapshot();
    if (in_array('--apply-migration', $argv, true)) {
        $migration = in_array('--phase6', $argv, true) ? '2026_11_02_000000_create_concours_following_and_delivery_tables.php' : (in_array('--phase5', $argv, true) ? '2026_11_01_000000_create_concours_discovery_tables.php' : (in_array('--phase4b', $argv, true) ? '2026_10_31_000000_link_concours_qcm_preparation.php'
            : (in_array('--preparation-filters', $argv, true) ? '2026_10_30_000000_add_concours_preparation_filters.php'
            : (in_array('--phase4a', $argv, true) ? '2026_10_29_000000_link_exam_pdf_corrections.php' : '2026_10_28_000000_add_concours_session_policy.php'))));
        $status = Artisan::call('migrate', ['--path' => 'database/migrations/'.$migration]);
        echo Artisan::output();
        if ($status !== 0) {
            throw new RuntimeException('The additive migration failed.');
        }
    }
    if ($before !== $snapshot()) {
        throw new RuntimeException('Existing records or PDF bytes changed; rolling back the migration.');
    }
    DB::commit();
    echo json_encode(['preserved' => $before, 'session_policy_installed' => Schema::hasColumn('concours', 'session_policy'), 'correction_link_installed' => Schema::hasColumn('exam_pdfs', 'corrects_exam_pdf_id'),
        'legacy_private_pdfs' => DB::table('exam_pdfs')->whereNull('document_type')->count(),
        'unmapped_pdfs' => DB::table('exam_pdfs')->whereNull('concours_id')->count(),
        'preparation_options' => Schema::hasTable('concours_preparation_options') ? DB::table('concours_preparation_options')->count() : null,
        'preparation_assignments' => Schema::hasTable('exam_pdf_preparation_option') ? DB::table('exam_pdf_preparation_option')->count() : null], JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR).PHP_EOL;
} catch (Throwable $exception) {
    DB::rollBack();
    throw $exception;
}
