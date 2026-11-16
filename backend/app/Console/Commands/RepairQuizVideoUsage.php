<?php

namespace App\Console\Commands;

use App\Services\ContentUsage\QuizVideoUsageRepair;
use Illuminate\Console\Command;

class RepairQuizVideoUsage extends Command
{
    protected $signature = 'content-usage:repair-quiz-videos
        {--dry-run : Read-only report (default)}
        {--apply : Apply only the reviewed selective repair}
        {--inventory= : Fresh JSON from video-generator/quiz-usage-inventory.js}
        {--major= : Optional Major ID to restrict assignment repair and report}
        {--expect-database= : Exact target database name for apply}
        {--expect-plan= : Exact plan hash from the reviewed dry-run}
        {--runner-stopped : Confirm all local renderers have stopped}
        {--inventory-complete : Confirm the reviewed inventory covers original retained job and output locations}
        {--allow-production : Separate explicit production authorization required}
        {--backup-dir= : Private absolute backup directory}
        {--report= : Optional private report JSON destination}';
    protected $description = 'Repair proven ungenerated quiz-video exclusions without resetting successful usage';

    public function handle(QuizVideoUsageRepair $repair): int
    {
        if ($this->option('apply') && $this->option('dry-run')) { $this->error('Choose dry-run or apply.'); return self::FAILURE; }
        $handle = null;
        $report = null;
        try {
            if ($path = $this->option('report')) {
                if (! str_starts_with($path, '/') || str_contains($path, '..') || str_contains($path, "\0")) throw new \RuntimeException('Use a private absolute report path.');
                foreach ([public_path(), storage_path('app/public')] as $public) if ($path === $public || str_starts_with($path, $public.'/')) throw new \RuntimeException('Report cannot be public.');
                $part = '';
                foreach (explode('/', $path) as $segment) { if ($segment === '') continue; $part .= '/'.$segment; if (is_link($part)) throw new \RuntimeException('Report path cannot contain symlinks.'); }
                $old = umask(0077);
                try { $handle = fopen($path, 'xb'); } finally { umask($old); }
                if (! $handle) throw new \RuntimeException('Cannot create report; use a new filename.');
            }
            $report = $repair->run([
                'apply' => (bool) $this->option('apply'), 'inventory' => $this->option('inventory'), 'major' => $this->option('major'),
                'expect_database' => $this->option('expect-database'), 'expect_plan' => $this->option('expect-plan'),
                'runner_stopped' => (bool) $this->option('runner-stopped'), 'inventory_complete' => (bool) $this->option('inventory-complete'), 'allow_production' => (bool) $this->option('allow-production'),
                'backup_dir' => $this->option('backup-dir') ?: storage_path('app/private/content-usage-repairs'),
            ]);
            $body = json_encode($report, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR).PHP_EOL;
            // Always emit the committed result/backup trace before optional file I/O.
            $this->line($body);
            if ($handle && (fwrite($handle, $body) !== strlen($body) || ! fflush($handle))) throw new \RuntimeException('Cannot write complete report; retain the JSON printed above.');
            return self::SUCCESS;
        } catch (\Throwable $e) {
            $this->error($e->getMessage());
            if ($report['applied'] ?? false) { $this->warn('Repair committed; the verified backup and its path remain authoritative.'); return self::SUCCESS; }
            return self::FAILURE;
        } finally { if (is_resource($handle)) fclose($handle); }
    }
}
