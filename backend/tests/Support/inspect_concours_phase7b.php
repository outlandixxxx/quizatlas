<?php

// Local, read-only acceptance baseline. Never runs migrations or changes application data.
use Illuminate\Contracts\Console\Kernel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

require __DIR__.'/../../vendor/autoload.php';
$app = require __DIR__.'/../../bootstrap/app.php';
$app->make(Kernel::class)->bootstrap();

try {
    if (! app()->environment('local') || DB::getDriverName() !== 'pgsql') {
        throw new RuntimeException('This inspection requires the local PostgreSQL application.');
    }
    DB::beginTransaction();
    DB::statement('SET TRANSACTION ISOLATION LEVEL REPEATABLE READ, READ ONLY');
    $tables = [];
    foreach (DB::table('pg_tables')->where('schemaname', 'public')->orderBy('tablename')->pluck('tablename') as $table) {
        $columns = DB::table('information_schema.columns')->where('table_schema', 'public')->where('table_name', $table)
            ->orderBy('ordinal_position')->get(['column_name', 'data_type', 'udt_name', 'is_nullable', 'column_default', 'character_maximum_length', 'numeric_precision', 'numeric_scale']);
        $hash = hash_init('sha256');
        $count = 0;
        foreach (DB::table('public.'.$table.' as t')->selectRaw('to_jsonb(t)::text as row')->orderByRaw('to_jsonb(t)::text')->cursor() as $row) {
            hash_update($hash, $row->row."\n");
            $count++;
        }
        $tables[$table] = ['rows' => $count, 'schema_sha256' => hash('sha256', $columns->toJson()), 'data_sha256' => hash_final($hash)];
    }
    $files = [];
    foreach (Storage::disk('exam_pdfs')->allFiles() as $path) {
        $files[$path] = hash_file('sha256', Storage::disk('exam_pdfs')->path($path));
    }
    ksort($files);
    $result = [
        'database' => DB::getDatabaseName(), 'database_user' => config('database.connections.pgsql.username'),
        'gates' => ['discovery' => config('concours_discovery.automation_enabled'), 'notifications' => config('concours_notifications.enabled'),
            'push' => config('concours_notifications.push_enabled'), 'authorized_feeds' => count(config('concours_discovery.authorized_feed_urls')),
            'vapid_public' => (bool) config('concours_notifications.vapid.publicKey'), 'vapid_private' => (bool) config('concours_notifications.vapid.privateKey')],
        'tables' => $tables, 'pdf_files' => $files,
        'concours' => DB::table('concours')->where('slug', 'education-preparation')->first(),
        'pdfs' => DB::table('exam_pdfs')->orderBy('id')->get(['id', 'title', 'concours_id', 'document_type', 'corrects_exam_pdf_id', 'is_active', 'distribution_permission']),
        'announcements' => DB::table('concours_announcements')->orderBy('id')->get(['id', 'concours_id', 'title_fr', 'session_year', 'publication_status', 'verification_status', 'registration_deadline']),
        'sources' => DB::table('concours_announcement_sources')->orderBy('id')->get(['id', 'name', 'enabled', 'collection_method', 'permission_status', 'last_attempt_at', 'last_success_at', 'last_error']),
    ];
    DB::rollBack();
    $baselinePath = __DIR__.'/../../artifacts/concours-phase7b/baseline.json';
    if (in_array('--baseline', $argv, true)) {
        if (file_exists($baselinePath)) {
            throw new RuntimeException('Refusing to overwrite an existing Phase 7B baseline.');
        }
        file_put_contents($baselinePath, json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR)."\n");
    } elseif (in_array('--verify', $argv, true)) {
        $before = json_decode(file_get_contents($baselinePath), true, 512, JSON_THROW_ON_ERROR);
        if ($before['tables'] !== $tables || $before['pdf_files'] !== $files || $before['gates'] !== $result['gates']) {
            throw new RuntimeException('Application tables, PDF files or activation gates changed during acceptance.');
        }
        $result = ['preserved_tables' => count($tables), 'preserved_pdf_files' => count($files), 'gates_unchanged' => true];
        file_put_contents(__DIR__.'/../../artifacts/concours-phase7b/preservation-after.json', json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR)."\n");
    }
    echo json_encode($result, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR)."\n";
} catch (Throwable $error) {
    if (DB::transactionLevel()) {
        DB::rollBack();
    }
    fwrite(STDERR, $error->getMessage()."\n");
    exit(1);
}
