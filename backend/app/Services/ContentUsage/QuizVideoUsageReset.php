<?php

namespace App\Services\ContentUsage;

use App\Models\{Question, VideoSetQuestion};
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use RuntimeException;

final class QuizVideoUsageReset
{
    public const KINDS = ['quiz-video', 'quiz-json'];
    public const MARKER = 'quiz-video-usage-reset';

    public static function retired(array $output): bool
    {
        return collect($output)->contains(fn ($item) => ($item['kind'] ?? null) === self::MARKER);
    }

    public function run(bool $apply, ?string $expectedDatabase, bool $runnerStopped, string $backupDirectory): array
    {
        if (! app()->environment(['local', 'testing'])) throw new RuntimeException('This reset is restricted to local/testing environments.');
        $connection = DB::connection();
        $driver = $connection->getDriverName();
        $database = $connection->getDatabaseName();
        $host = $connection->getConfig('host');
        if (! ($driver === 'pgsql' && in_array($host, ['postgres', 'localhost', '127.0.0.1', '::1'], true))
            && ! (app()->environment('testing') && $driver === 'sqlite' && $database === ':memory:')) {
            throw new RuntimeException('Refusing a database outside the local development PostgreSQL target.');
        }
        if ($apply && ($expectedDatabase !== $database || ! $runnerStopped)) {
            throw new RuntimeException('Apply requires --expect-database matching the exact database name and --runner-stopped after verifying the host renderer is stopped.');
        }
        if ($apply) {
            $socket = @stream_socket_client('tcp://127.0.0.1:3777', $errno, $error, 0.2);
            if (is_resource($socket)) { fclose($socket); throw new RuntimeException('The local renderer port is open. Stop the renderer before applying the reset.'); }
        }

        return DB::transaction(function () use ($driver, $database, $host, $apply, $backupDirectory) {
            if ($driver === 'pgsql') {
                if ($apply) {
                    DB::statement("SET LOCAL lock_timeout = '5s'");
                    DB::statement('LOCK TABLE content_usage_operations, content_usage_items, content_usage_claims, video_set_questions IN EXCLUSIVE MODE');
                } else {
                    DB::statement('SET TRANSACTION ISOLATION LEVEL REPEATABLE READ, READ ONLY');
                }
                if (DB::selectOne('SELECT current_database() AS name')->name !== $database) throw new RuntimeException('Database identity mismatch.');
            }
            $operations = DB::table('content_usage_operations')->whereIn('kind', self::KINDS)->orderBy('id')->get()
                ->reject(fn ($op) => self::retired(json_decode($op->output ?? '[]', true)))->values();
            $ids = $operations->pluck('id')->all();
            $items = DB::table('content_usage_items')->whereIn('operation_id', $ids)->orderBy('id')->get();
            if ($items->contains(fn ($item) => $item->source_type !== 'question')) throw new RuntimeException('Unexpected non-question source in quiz-video operations; reset refused.');
            $claims = DB::table('content_usage_claims')->whereIn('operation_id', $ids)->orderBy('identity_key')->get();
            $inconsistent = DB::table('content_usage_claims AS c')->join('content_usage_items AS i', 'i.id', '=', 'c.item_id')
                ->where(fn ($query) => $query->whereIn('c.operation_id', $ids)->orWhereIn('i.operation_id', $ids))
                ->whereColumn('c.operation_id', '!=', 'i.operation_id')->exists();
            if ($inconsistent) throw new RuntimeException('A claim has an inconsistent operation/item relationship.');
            $assignments = VideoSetQuestion::restrictsVideoReuse()->orderBy('id')->get();
            $availability = $this->availability($ids);
            $questionIds = $items->pluck('source_id')->merge($assignments->pluck('question_id'))->unique();
            $report = [
                'target' => ['environment' => app()->environment(), 'driver' => $driver, 'host' => $host, 'database' => $database],
                'operations' => $operations->count(), 'operation_statuses' => $operations->countBy('status')->all(),
                'usage_items' => $items->count(), 'affected_questions' => $questionIds->count(),
                'blocking_claims' => $claims->count(), 'claimed_questions' => $items->whereIn('id', $claims->pluck('item_id'))->pluck('source_id')->unique()->count(),
                'legacy_assignments' => $assignments->count(), 'legacy_questions' => $assignments->pluck('question_id')->unique()->count(),
                'availability_before' => $availability['before'], 'availability_projected' => $availability['after'],
                'other_claims_preserved' => DB::table('content_usage_claims')->whereNotIn('operation_id', $ids)->count(),
                'applied' => false,
            ];
            if (! $apply || (! $ids && $assignments->isEmpty())) return $report;

            $resetId = (string) Str::uuid();
            $at = now()->toIso8601String();
            $videoIds = $assignments->pluck('video_set_id')->unique()->all();
            $videos = DB::table('video_sets')->whereIn('id', $videoIds)->orderBy('id')->get();
            $backup = ['format' => 'maroquiz-quiz-video-usage-reset-v1', 'reset_id' => $resetId, 'created_at' => $at,
                'report' => $report, 'records' => [
                    'content_usage_operations' => $operations->all(), 'content_usage_items' => $items->all(),
                    'content_usage_claims' => $claims->all(), 'video_set_questions' => $assignments->map(fn ($item) => $item->getAttributes())->all(),
                    'video_sets_context' => $videos->all(),
                    'video_batches_context' => DB::table('video_batches')->whereIn('id', $videos->pluck('video_batch_id')->unique())->orderBy('id')->get()->all(),
                ]];
            // Backup must be fully written and verified before any database mutation.
            $saved = $this->backup($backupDirectory, $resetId, $backup);
            foreach (array_chunk($ids, 500) as $chunk) {
                DB::table('content_usage_claims')->whereIn('operation_id', $chunk)->delete();
                DB::table('content_usage_items')->whereIn('operation_id', $chunk)->update(['status' => 'released']);
            }
            foreach ($operations as $operation) {
                $output = json_decode($operation->output ?? '[]', true, flags: JSON_THROW_ON_ERROR);
                $output[] = ['kind' => self::MARKER, 'name' => basename($saved['path']), 'reset_id' => $resetId,
                    'at' => $at, 'previous_status' => $operation->status, 'sha256' => $saved['sha256']];
                DB::table('content_usage_operations')->where('id', $operation->id)->update([
                    'status' => 'released', 'attempt' => $operation->attempt + 1, 'released_at' => now(), 'expires_at' => now(),
                    'updated_at' => now(), 'output' => json_encode($output, JSON_THROW_ON_ERROR | JSON_UNESCAPED_UNICODE),
                ]);
            }
            foreach ($assignments as $assignment) {
                $metadata = $assignment->selection_metadata ?? [];
                $metadata['quiz_video_usage_reset'] = ['id' => $resetId, 'at' => $at];
                // Preserve association IDs, order, scores and original timestamps.
                DB::table('video_set_questions')->where('id', $assignment->id)->update([
                    'selection_metadata' => json_encode($metadata, JSON_THROW_ON_ERROR | JSON_UNESCAPED_UNICODE),
                ]);
            }
            if (DB::table('content_usage_claims')->whereIn('operation_id', $ids)->exists() || VideoSetQuestion::restrictsVideoReuse()->exists()) {
                throw new RuntimeException('Post-reset restrictions remain; rolling back.');
            }
            $after = $this->availability([])['before'];
            if ($after !== $report['availability_projected']) throw new RuntimeException('Post-reset availability differs from the dry-run projection; rolling back.');
            return array_replace($report, ['applied' => true, 'reset_id' => $resetId, 'backup' => $saved, 'availability_after' => $after,
                'registry_questions_restored' => $after['available'] - $report['availability_before']['available']]);
        });
    }

    private function availability(array $resetIds): array
    {
        $result = ['before' => ['total' => 0, 'available' => 0, 'reserved' => 0, 'used' => 0],
            'after' => ['total' => 0, 'available' => 0, 'reserved' => 0, 'used' => 0]];
        $resetLookup = array_fill_keys($resetIds, true);
        Question::with(['choices', 'quiz.subject.major'])->whereHas('quiz', fn ($q) => $q->where('is_active', true)
            ->whereHas('subject', fn ($s) => $s->where('is_active', true)->whereHas('major', fn ($m) => $m->where('is_active', true))))
            ->orderBy('id')->chunkById(250, function ($questions) use (&$result, $resetLookup) {
                $sources = $questions->filter(fn ($q) => trim((string) $q->question) !== '')->map(fn ($q) => Fingerprint::source($q));
                $blockers = app(Registry::class)->blockers($sources->all());
                foreach ($sources as $source) {
                    foreach (['before', 'after'] as $phase) {
                        $status = 'available';
                        foreach ($source['identity_keys'] as $key) {
                            $blocker = $blockers[$key] ?? null;
                            if (! $blocker || ($phase === 'after' && isset($resetLookup[$blocker->id]))) continue;
                            if ($status !== 'used') $status = $blocker->status;
                        }
                        if (! isset($result[$phase][$status])) throw new RuntimeException('An unrelated claim has an invalid blocking status; reset refused.');
                        $result[$phase]['total']++; $result[$phase][$status]++;
                    }
                }
            });
        return $result;
    }

    private function backup(string $directory, string $id, array $snapshot): array
    {
        if (! str_starts_with($directory, DIRECTORY_SEPARATOR) || str_contains($directory, "\0") || in_array('..', explode(DIRECTORY_SEPARATOR, $directory), true)) throw new RuntimeException('Backup directory must be an absolute private path.');
        $parts = array_filter(explode(DIRECTORY_SEPARATOR, $directory), fn ($part) => $part !== '' && $part !== '.');
        $directory = DIRECTORY_SEPARATOR.implode(DIRECTORY_SEPARATOR, $parts);
        if ($directory === DIRECTORY_SEPARATOR) throw new RuntimeException('Use a dedicated private backup directory, not a filesystem root.');
        $current = '';
        foreach (explode(DIRECTORY_SEPARATOR, $directory) as $part) {
            if ($part === '') continue;
            $current .= DIRECTORY_SEPARATOR.$part;
            if (is_link($current)) throw new RuntimeException('Backup directory must not contain symbolic links.');
        }
        foreach ([public_path(), storage_path('app/public')] as $public) {
            if ($directory === $public || str_starts_with($directory, $public.DIRECTORY_SEPARATOR)) throw new RuntimeException('Backups must not be stored in public storage.');
        }
        if (file_exists($directory) && ! is_dir($directory)) throw new RuntimeException('Backup path is not a directory.');
        if (! is_dir($directory) && ! mkdir($directory, 0700, true)) throw new RuntimeException('Cannot create private backup directory.');
        if ((fileperms($directory) & 0077) !== 0) throw new RuntimeException('Use a private backup directory with permissions 0700. Existing directory permissions will not be changed.');
        $file = $directory.'/quiz-video-usage-'.gmdate('Ymd\THis\Z').'-'.$id.'.json';
        $content = json_encode($snapshot, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR).PHP_EOL;
        $handle = fopen($file, 'xb');
        if (! $handle) throw new RuntimeException('Cannot exclusively create the backup.');
        try {
            if (! chmod($file, 0600)) throw new RuntimeException('Cannot restrict backup permissions.');
            $offset = 0;
            while ($offset < strlen($content)) { $written = fwrite($handle, substr($content, $offset)); if (! $written) throw new RuntimeException('Incomplete backup write.'); $offset += $written; }
            if (! fflush($handle) || (function_exists('fsync') && ! fsync($handle))) throw new RuntimeException('Cannot flush the complete backup to disk.');
        } finally { fclose($handle); }
        $hash = hash('sha256', $content);
        if (hash_file('sha256', $file) !== $hash) throw new RuntimeException('Backup SHA-256 verification failed.');
        $checksum = fopen($file.'.sha256', 'xb');
        if (! $checksum) throw new RuntimeException('Cannot create the backup checksum.');
        try {
            if (! chmod($file.'.sha256', 0600)) throw new RuntimeException('Cannot restrict checksum permissions.');
            $line = $hash.'  '.basename($file).PHP_EOL;
            if (fwrite($checksum, $line) !== strlen($line)) throw new RuntimeException('Incomplete checksum write.');
            if (! fflush($checksum) || (function_exists('fsync') && ! fsync($checksum))) throw new RuntimeException('Cannot flush the backup checksum.');
        }
        finally { fclose($checksum); }
        return ['path' => $file, 'sha256' => $hash];
    }
}
