<?php

namespace App\Console\Commands;

use App\Services\ContentUsage\QuizVideoUsageReset;
use Illuminate\Console\Command;

class ResetQuizVideoUsage extends Command
{
    protected $signature = 'content-usage:reset-quiz-videos
        {--dry-run : Inspect restrictions without changing data (the default)}
        {--apply : Explicitly back up and reset quiz-video/quiz-JSON usage}
        {--expect-database= : Exact database name, required when applying}
        {--runner-stopped : Confirm host renderer and standalone renders have been checked and stopped}
        {--backup-dir= : Absolute private backup directory}';
    protected $description = 'Reset local quiz-video usage, including successful videos, while preserving source and video history';

    public function handle(QuizVideoUsageReset $reset): int
    {
        if ($this->option('dry-run') && $this->option('apply')) { $this->error('Choose --dry-run or --apply.'); return self::FAILURE; }
        try {
            $report = $reset->run((bool) $this->option('apply'), $this->option('expect-database'), (bool) $this->option('runner-stopped'),
                $this->option('backup-dir') ?: storage_path('app/private/content-usage-resets'));
            $this->line(json_encode($report, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR));
            $this->info($report['applied'] ? 'Reset committed. Old operations are retired; create new proposals. Normal tracking remains enabled.' : 'No changes. Review the target and counts before using --apply.');
            return self::SUCCESS;
        } catch (\Throwable $error) {
            $this->error($error->getMessage());
            return self::FAILURE;
        }
    }
}
