<?php

namespace App\Console\Commands;

use App\Services\ContentUsage\FactVideoUsageScopeRepair;
use Illuminate\Console\Command;

class ScopeFactVideoUsage extends Command
{
    protected $signature = 'content-usage:scope-fact-videos
        {--evidence= : Private JSON with approved render documents and verified output receipts}
        {--dry-run : Report only (the default)}
        {--apply : Back up and reclassify evidenced legacy Fact-video claims}
        {--expect-database= : Exact local database name, required for apply}
        {--backup-dir= : Absolute private backup directory}';
    protected $description = 'Scope evidenced local Fact-video usage by language and format without resetting history';

    public function handle(FactVideoUsageScopeRepair $repair): int
    {
        try {
            if ($this->option('apply') && $this->option('dry-run')) throw new \RuntimeException('Choose --dry-run or --apply.');
            $file = $this->option('evidence');
            if (!$file || !is_file($file) || is_link($file) || filesize($file) > 8 * 1024 * 1024) throw new \RuntimeException('Provide a private evidence JSON file (maximum 8 MB).');
            $evidence = json_decode(file_get_contents($file), true, flags: JSON_THROW_ON_ERROR);
            $report = $repair->run($evidence, (bool) $this->option('apply'), $this->option('expect-database'), $this->option('backup-dir') ?: storage_path('app/private/fact-video-scope-repairs'));
            $this->line(json_encode($report, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR));
            return self::SUCCESS;
        } catch (\Throwable $error) { $this->error($error->getMessage()); return self::FAILURE; }
    }
}
