<?php

namespace App\Console\Commands;

use App\Services\ContentUsage\QuizVideoScopeRepair;
use Illuminate\Console\Command;

class ScopeQuizVideoUsage extends Command
{
    protected $signature = 'content-usage:scope-quiz-videos
        {--evidence= : Private JSON containing originally authorized quiz render documents}
        {--dry-run : Report only (the default)}
        {--apply : Back up and reclassify evidenced local usage; never reset it}
        {--expect-database= : Exact local database name, required for apply}
        {--backup-dir= : Absolute private backup directory}';
    protected $description = 'Separate historical quiz video usage by template while preserving successful consumption';

    public function handle(QuizVideoScopeRepair $repair): int
    {
        try {
            if ($this->option('apply') && $this->option('dry-run')) throw new \RuntimeException('Choose --dry-run or --apply.');
            $file = $this->option('evidence');
            if (!$file || !is_file($file) || is_link($file) || filesize($file) > 16 * 1024 * 1024) throw new \RuntimeException('Provide a private evidence JSON file (maximum 16 MB).');
            $report = $repair->run(json_decode(file_get_contents($file), true, flags: JSON_THROW_ON_ERROR),
                (bool) $this->option('apply'), $this->option('expect-database'),
                $this->option('backup-dir') ?: storage_path('app/private/quiz-video-scope-repairs'));
            $this->line(json_encode($report, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR));
            return self::SUCCESS;
        } catch (\Throwable $error) { $this->error($error->getMessage()); return self::FAILURE; }
    }
}
