<?php
// Read-only local acceptance support. Never creates users, questions or content.
require dirname(__DIR__, 2).'/vendor/autoload.php';
$app = require dirname(__DIR__, 2).'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();
use Illuminate\Support\Facades\DB;
if (! app()->environment('local') || DB::connection()->getDriverName() !== 'pgsql') throw new RuntimeException('Local PostgreSQL only.');
DB::beginTransaction();
DB::statement('SET TRANSACTION ISOLATION LEVEL REPEATABLE READ READ ONLY');
try {
    if (in_array('--context', $argv, true)) {
        $admin = App\Models\User::where('role', 'admin')->firstOrFail();
        $quiz = App\Models\Quiz::findOrFail(1599)->load('subject.major');
        $data = ['token' => auth('api')->login($admin), 'majorId' => $quiz->subject->major_id, 'subjectId' => $quiz->subject_id];
    } else {
        $data = [];
        foreach (DB::select("SELECT tablename FROM pg_tables WHERE schemaname = 'public' ORDER BY tablename") as $row) {
            $table = str_replace('"', '""', $row->tablename);
            $hashes = DB::select('SELECT md5(row_to_json(t)::text) AS hash FROM "'.$table.'" t ORDER BY row_to_json(t)::text');
            $data[$row->tablename] = ['count' => count($hashes), 'sha256' => hash('sha256', implode('', array_column($hashes, 'hash')))];
        }
    }
    echo json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)."\n";
} finally { DB::rollBack(); }
