<?php

namespace App\Console\Commands;

use App\Models\ContentUsageOperation;
use App\Services\ContentUsage\Registry;
use Illuminate\Console\Command;

class RecoverContentUsage extends Command
{
    protected $signature = 'content-usage:recover {--dry-run : List the number of expired reservations without changing them}';
    protected $description = 'Fence and release expired content-generation reservations; never release completed usage';
    public function handle(Registry $registry): int
    {
        $count = $this->option('dry-run')
            ? ContentUsageOperation::where('status', 'reserved')->where('expires_at', '<=', now())->count()
            : $registry->recover();
        $this->info($this->option('dry-run') ? "Expired reservations: {$count}. No changes." : "Released {$count} expired reservation(s).");
        return self::SUCCESS;
    }
}
