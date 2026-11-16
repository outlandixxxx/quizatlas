<?php

namespace App\Console\Commands;

use App\Models\ContentUsageOperation;
use App\Services\ContentUsage\Registry;
use Illuminate\Console\Command;

class RecoverContentUsage extends Command
{
    protected $signature = 'content-usage:recover {--dry-run : List the number of expired reservations without changing them}';
    protected $description = 'Release expired non-quiz reservations; interrupted quiz videos require output reconciliation';
    public function handle(Registry $registry): int
    {
        $count = $this->option('dry-run')
            ? ContentUsageOperation::where('status', 'reserved')->where('kind', '!=', 'quiz-video')->where('expires_at', '<=', now())->count()
            : $registry->recover();
        $this->info($this->option('dry-run') ? "Expired reservations: {$count}. No changes." : "Released {$count} expired reservation(s).");
        $uncertain = ContentUsageOperation::where('kind', 'quiz-video')->where('status', 'reserved')->where('expires_at', '<=', now())->count();
        if ($uncertain) $this->warn("Retained {$uncertain} expired quiz-video reservation(s): reconcile runner outputs or use the scoped repair dry-run.");
        return self::SUCCESS;
    }
}
