<?php

namespace App\Services\ContentUsage;

use App\Models\{ContentUsageOperation, Question, Subject, VideoSetQuestion};
use App\Services\VideoQuestionSelector;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use RuntimeException;

/** Selective repair. Absence of a receipt alone is never proof of no render. */
final class QuizVideoUsageRepair
{
    public function run(array $options): array
    {
        $apply = (bool) ($options['apply'] ?? false);
        $db = DB::connection();
        $database = $db->getDatabaseName();
        if (! in_array($db->getDriverName(), ['pgsql', 'sqlite'], true)) throw new RuntimeException('PostgreSQL is required.');
        if ($db->getDriverName() === 'sqlite' && ! app()->environment('testing')) throw new RuntimeException('SQLite is allowed only for isolated tests.');
        if (app()->environment('local') && ! in_array($db->getConfig('host'), ['postgres', 'localhost', '127.0.0.1', '::1'], true)) throw new RuntimeException('Local repair refuses a remote database host.');
        if ($apply && (($options['expect_database'] ?? null) !== $database || ! ($options['runner_stopped'] ?? false))) {
            throw new RuntimeException('Apply requires the exact --expect-database and --runner-stopped.');
        }
        if ($apply && ! app()->environment(['local', 'testing']) && ! ($options['allow_production'] ?? false)) {
            throw new RuntimeException('Production apply requires separate authorization and explicit --allow-production.');
        }
        if ($apply && ! ($options['inventory_complete'] ?? false)) throw new RuntimeException('Apply requires --inventory-complete after reviewing all original job/output locations and unknown records.');
        $file = $options['inventory'] ?? '';
        if (! is_file($file)) throw new RuntimeException('Supply a fresh, reviewed local runner --inventory JSON.');
        $inventory = json_decode(file_get_contents($file), true, flags: JSON_THROW_ON_ERROR);
        if (($inventory['format'] ?? null) !== 'maroquiz-quiz-usage-inventory-v1' || ! ($inventory['runner_stopped'] ?? false)
            || ! isset($inventory['records'], $inventory['unknown_records'], $inventory['generated_at'])) {
            throw new RuntimeException('Incomplete or unsupported runner inventory.');
        }
        $age = now()->timestamp - \Carbon\Carbon::parse($inventory['generated_at'])->timestamp;
        if ($age < -60 || $age > 86400) throw new RuntimeException('Runner inventory must be less than 24 hours old.');
        $inventoryHash = hash_file('sha256', $file);

        return DB::transaction(function () use ($options, $apply, $db, $database, $inventory, $inventoryHash) {
            if ($db->getDriverName() === 'pgsql') {
                if ($apply) {
                    DB::statement("SET LOCAL lock_timeout = '5s'");
                    DB::statement('LOCK TABLE content_usage_operations, content_usage_items, content_usage_claims, video_sets, video_set_questions IN SHARE ROW EXCLUSIVE MODE');
                } else DB::statement('SET TRANSACTION ISOLATION LEVEL REPEATABLE READ, READ ONLY');
            }
            $subjects = Subject::where('is_active', true)->whereHas('major', fn ($q) => $q->where('is_active', true))
                ->whereIn('id', DB::table('video_sets')->select('subject_id'));
            if (! empty($options['major'])) $subjects->where('major_id', (int) $options['major']);
            $subjects = $subjects->orderBy('id')->get();
            $scopedIds = Question::whereHas('quiz', fn ($q) => $q->whereIn('subject_id', $subjects->pluck('id')))->pluck('id')->flip();
            $assignments = VideoSetQuestion::restrictsVideoReuse()->whereHas('videoSet', fn ($q) => $q->whereIn('subject_id', $subjects->pluck('id')))
                ->with('videoSet')->orderBy('id')->get();
            $operations = ContentUsageOperation::whereIn('kind', ['quiz-video', 'quiz-json'])->with('items')->orderBy('id')->get();
            $claims = DB::table('content_usage_claims')->whereIn('operation_id', $operations->pluck('id'))->orderBy('identity_key')->get();
            $itemOwners = $operations->flatMap(fn ($o) => $o->items)->keyBy('id');
            if ($claims->contains(fn ($c) => ($itemOwners[$c->item_id]->operation_id ?? null) !== $c->operation_id)) throw new RuntimeException('Inconsistent claim ownership; repair refused.');
            $used = []; $active = []; $uncertain = []; $releaseAssignments = []; $releaseOperations = [];
            foreach ($operations as $op) {
                if (QuizVideoUsageReset::retired($op->output ?? [])) continue;
                foreach ($op->items as $item) {
                    if ($item->source_type !== 'question') continue;
                    if ($item->status === 'used' && $op->kind === 'quiz-video') $used[$item->source_id] = true;
                    elseif ($item->status === 'reserved' && $op->status === 'reserved' && $op->expires_at->isFuture()) $active[$item->source_id] = true;
                }
            }
            $records = collect($inventory['records']);
            foreach ($records as $record) {
                foreach ($record['source_ids'] ?? [] as $id) {
                    if ($record['status'] === 'success') $used[$id] = true;
                    elseif ($record['status'] !== 'no_output') $uncertain[$id] = true;
                }
            }
            foreach ($operations as $op) {
                if (QuizVideoUsageReset::retired($op->output ?? []) || $op->kind !== 'quiz-video' || $op->status === 'used') continue;
                if ($op->status === 'reserved' && $op->expires_at->isFuture()) continue;
                $evidence = $records->where('operation_id', $op->id);
                $unused = $op->items->where('source_type', 'question')->where('status', '!=', 'used');
                if ($unused->contains(fn ($i) => ! isset($scopedIds[$i->source_id]))) continue;
                if ($op->status === 'released' && $unused->every(fn ($i) => $i->status === 'released')
                    && ! $claims->contains(fn ($c) => $c->operation_id === $op->id && $unused->contains('id', $c->item_id))) continue;
                // A missing manifest is uncertain, even if a lease has expired.
                $proven = $evidence->where('status', 'no_output')->flatMap(fn ($r) => $r['source_ids'] ?? [])->unique();
                $unknownJob = collect($inventory['unknown_records'])->contains(fn ($r) => empty($r['created_at'])
                    || \Carbon\Carbon::parse($r['created_at'])->greaterThanOrEqualTo($op->reserved_at));
                $unsafe = $unknownJob || $unused->contains(fn ($i) => ! $proven->contains($i->source_id) || isset($used[$i->source_id]) || isset($uncertain[$i->source_id]));
                if ($unused->isNotEmpty() && ! $unsafe) $releaseOperations[] = $op;
                else foreach ($unused as $item) $uncertain[$item->source_id] = true;
            }
            foreach ($assignments as $assignment) {
                $id = $assignment->question_id;
                if (isset($used[$id]) || isset($active[$id]) || isset($uncertain[$id])) continue;
                $videoRecords = $records->where('video_set_id', $assignment->video_set_id);
                $unknownJob = collect($inventory['unknown_records'])->contains(function ($r) use ($assignment) {
                    // An unmapped job predating the proposal cannot have rendered it.
                    return empty($r['created_at']) || \Carbon\Carbon::parse($r['created_at'])->greaterThanOrEqualTo($assignment->created_at);
                });
                if ($unknownJob || $videoRecords->contains(fn ($r) => $r['status'] !== 'no_output')) {
                    $uncertain[$id] = true; continue;
                }
                // No receipt, no active lease, and a complete stopped-runner inventory
                // proves this retained draft has no completed output in the pipeline.
                $releaseAssignments[] = $assignment;
            }
            $releasedIds = collect($releaseAssignments)->pluck('id');
            $remainingLegacy = $assignments->whereNotIn('id', $releasedIds)->pluck('question_id')->flip();
            $releasedOperations = collect($releaseOperations)->pluck('id')->flip();
            $rows = [];
            foreach ($subjects as $subject) foreach (['ar', 'fr', 'en'] as $language) {
                $pool = app(VideoQuestionSelector::class)->eligibilityForSubject($subject->id, language: $language);
                $projected = app(VideoQuestionSelector::class)->eligibilityForSubject($subject->id, language: $language,
                    ignoreAssignmentIds: $releasedIds->all(), ignoreOperationIds: array_keys($releasedOperations->all()));
                $row = ['subject_id' => $subject->id, 'subject' => $subject->name, 'language' => $language,
                    'total_eligible' => $pool['stats']['total_eligible'], 'confirmed_successful' => 0,
                    'active_reservations' => 0, 'draft_or_stale_releasable' => 0, 'uncertain' => 0,
                    'other_usage_exclusions' => 0, 'available_before' => $pool['stats']['available'], 'available_after' => $projected['stats']['available']];
                foreach ($pool['eligibility'] as $candidate) {
                    $id = $candidate['question']->id; $status = $candidate['status']; $op = $candidate['operation'];
                    if (isset($used[$id])) $row['confirmed_successful']++;
                    if (isset($active[$id])) $row['active_reservations']++;
                    if (isset($uncertain[$id])) $row['uncertain']++;
                    $legacyReleased = $status === 'legacy_restricted' && ! isset($remainingLegacy[$id]);
                    $claimReleased = $op && isset($releasedOperations[$op->id]);
                    if (($legacyReleased || $claimReleased) && ! isset($used[$id]) && ! isset($uncertain[$id]) && ! isset($active[$id])) $row['draft_or_stale_releasable']++;
                    if ($op && $op->kind !== 'quiz-video') $row['other_usage_exclusions']++;
                }
                // A duplicate group's representative may differ after release.
                // Classify held projected groups rather than losing uncertain
                // history merely because its representative has another ID.
                $row['uncertain'] = 0;
                foreach ($projected['eligibility'] as $candidate) {
                    $id = $candidate['question']->id; $op = $candidate['operation'];
                    if (($candidate['status'] === 'legacy_restricted' && ! isset($used[$id]) && ! isset($active[$id]))
                        || ($candidate['status'] === 'reserved' && $op && \Carbon\Carbon::parse($op->expires_at)->lessThanOrEqualTo(now()))) $row['uncertain']++;
                }
                $row['draft_or_stale_releasable'] = max(0, $row['available_after'] - $row['available_before']);
                if ($row['total_eligible']) $rows[] = $row;
            }
            $snapshot = ['assignments' => $assignments->map(fn ($a) => $a->getAttributes())->all(),
                'operations' => $operations->map(fn ($o) => $o->getAttributes())->all(),
                'items' => $operations->flatMap(fn ($o) => $o->items->map(fn ($i) => $i->getAttributes()))->all(), 'claims' => $claims->all()];
            $plan = hash('sha256', json_encode([$database, $inventoryHash, $options['major'] ?? null, $snapshot, $rows], JSON_THROW_ON_ERROR));
            $report = ['target' => ['environment' => app()->environment(), 'database' => $database, 'host' => $db->getConfig('host')],
                'inventory_sha256' => $inventoryHash, 'plan' => $plan, 'subjects' => $rows,
                'assignment_ids' => $releasedIds->values()->all(), 'operation_ids' => array_keys($releasedOperations->all()),
                'assignments_to_release' => count($releaseAssignments), 'operations_to_release' => count($releaseOperations),
                'question_ids_to_release' => collect($releaseAssignments)->pluck('question_id')->unique()->values()->all(), 'applied' => false];
            if (! $apply) return $report;
            if (! hash_equals($plan, (string) ($options['expect_plan'] ?? ''))) throw new RuntimeException('The reviewed --expect-plan does not match. Run a new dry-run.');
            if (! $releaseAssignments && ! $releaseOperations) return $report;
            $repairId = (string) Str::uuid();
            $backup = $this->backup($options['backup_dir'] ?? storage_path('app/private/content-usage-repairs'), $repairId,
                ['repair_id' => $repairId, 'at' => now()->toIso8601String(), 'report' => $report, 'previous_records' => $snapshot]);
            foreach ($releaseAssignments as $assignment) {
                $metadata = $assignment->selection_metadata ?? [];
                $metadata['quiz_video_usage_release'] = ['repair_id' => $repairId, 'reason' => 'No generated output in reviewed stopped-runner inventory', 'at' => now()->toIso8601String()];
                DB::table('video_set_questions')->where('id', $assignment->id)->update(['selection_metadata' => json_encode($metadata, JSON_THROW_ON_ERROR)]);
            }
            foreach ($releaseOperations as $op) {
                $items = $op->items->where('source_type', 'question')->where('status', '!=', 'used')->pluck('id');
                DB::table('content_usage_claims')->where('operation_id', $op->id)->whereIn('item_id', $items)->delete();
                DB::table('content_usage_items')->whereIn('id', $items)->update(['status' => 'released']);
                // Terminal state fences stale completion; retain the capability so
                // the original job can explicitly retry and obtain its next attempt.
                $op->update(['status' => 'released', 'expires_at' => now(), 'released_at' => now()]);
            }
            foreach ($rows as $row) {
                $actual = app(VideoQuestionSelector::class)->eligibilityForSubject($row['subject_id'], language: $row['language']);
                if ($actual['stats']['available'] !== $row['available_after']) throw new RuntimeException('Post-repair availability differs from the reviewed projection; rolling back.');
            }
            return array_replace($report, ['applied' => true, 'repair_id' => $repairId, 'backup' => $backup, 'availability_verified' => true]);
        });
    }

    private function backup(string $directory, string $id, array $snapshot): array
    {
        if (! str_starts_with($directory, '/') || str_contains($directory, '..') || str_contains($directory, "\0")) throw new RuntimeException('Use an absolute private backup directory.');
        foreach ([public_path(), storage_path('app/public')] as $public) if ($directory === $public || str_starts_with($directory, $public.'/')) throw new RuntimeException('Backup directory cannot be public.');
        $part = '';
        foreach (explode('/', $directory) as $segment) {
            if ($segment === '') continue;
            $part .= '/'.$segment;
            if (is_link($part)) throw new RuntimeException('Backup path cannot contain symlinks.');
        }
        if (! is_dir($directory) && ! mkdir($directory, 0700, true)) throw new RuntimeException('Cannot create backup directory.');
        if ((fileperms($directory) & 0077) !== 0) throw new RuntimeException('Backup directory must have mode 0700.');
        $file = $directory.'/quiz-video-repair-'.$id.'.json';
        $body = json_encode($snapshot, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR).PHP_EOL;
        $handle = fopen($file, 'xb');
        if (! $handle) throw new RuntimeException('Cannot create exclusive backup.');
        try {
            if (! chmod($file, 0600)) throw new RuntimeException('Cannot restrict backup permissions.');
            for ($offset = 0; $offset < strlen($body); $offset += $written) {
                $written = fwrite($handle, substr($body, $offset));
                if (! $written) throw new RuntimeException('Incomplete backup write.');
            }
            if (! fflush($handle) || (function_exists('fsync') && ! fsync($handle))) throw new RuntimeException('Backup flush failed.');
        } finally { fclose($handle); }
        $sha = hash('sha256', $body);
        if (hash_file('sha256', $file) !== $sha) throw new RuntimeException('Backup checksum mismatch.');
        if (file_put_contents($file.'.sha256', $sha.'  '.basename($file).PHP_EOL, LOCK_EX) === false || ! chmod($file.'.sha256', 0600)) throw new RuntimeException('Cannot save backup checksum.');
        return ['path' => $file, 'sha256' => $sha];
    }
}
