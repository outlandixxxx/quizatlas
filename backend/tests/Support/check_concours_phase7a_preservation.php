<?php

// Read-only comparison with the isolated database restored from the pre-change dump.
use Illuminate\Contracts\Console\Kernel;
use Illuminate\Database\Connection;
use Illuminate\Support\Facades\DB;

require __DIR__.'/../../vendor/autoload.php';
$app = require __DIR__.'/../../bootstrap/app.php';
$app->make(Kernel::class)->bootstrap();
if (! app()->environment('local') || DB::getDriverName() !== 'pgsql') {
    throw new RuntimeException('Restricted to the local PostgreSQL application.');
}
$settings = config('database.connections.'.config('database.default'));
$settings['database'] = 'maroquiz_phase7a_restore_check';
$settings['url'] = null;
config(['database.connections.phase7a_backup' => $settings]);
$connections = [DB::connection(), DB::connection('phase7a_backup')];
if ($connections[0]->getDatabaseName() === $connections[1]->getDatabaseName()) {
    throw new RuntimeException('The reference must be a separate restored database.');
}
$snapshot = function (Connection $connection): array {
    $snapshot = [];
    foreach ($connection->table('pg_tables')->where('schemaname', 'public')->orderBy('tablename')->pluck('tablename') as $table) {
        $columns = $connection->table('information_schema.columns')->where('table_schema', 'public')->where('table_name', $table)
            ->orderBy('ordinal_position')->get(['column_name', 'data_type', 'udt_name', 'is_nullable', 'column_default', 'character_maximum_length', 'numeric_precision', 'numeric_scale']);
        $hash = hash_init('sha256');
        $count = 0;
        foreach ($connection->table('public.'.$table.' as t')->selectRaw('to_jsonb(t)::text as row')->orderByRaw('to_jsonb(t)::text')->cursor() as $record) {
            hash_update($hash, $record->row."\n");
            $count++;
        }
        $snapshot[$table] = ['rows' => $count, 'schema_sha256' => hash('sha256', $columns->toJson()), 'data_sha256' => hash_final($hash)];
    }

    return $snapshot;
};
try {
    foreach ($connections as $connection) {
        $connection->beginTransaction();
        $connection->statement('SET TRANSACTION ISOLATION LEVEL REPEATABLE READ, READ ONLY');
    }
    $before = $snapshot($connections[1]);
    $after = $snapshot($connections[0]);
    if ($before !== $after) {
        $different = array_filter(array_unique(array_merge(array_keys($before), array_keys($after))), fn ($name) => ($before[$name] ?? null) !== ($after[$name] ?? null));
        throw new RuntimeException('Restored backup differs in tables: '.implode(', ', $different));
    }
    echo json_encode(['all_public_tables_preserved' => count($after), 'tables' => $after], JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR).PHP_EOL;
} finally {
    foreach ($connections as $connection) {
        if ($connection->transactionLevel()) {
            $connection->rollBack();
        }
    }
}
