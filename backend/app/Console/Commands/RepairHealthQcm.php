<?php

namespace App\Console\Commands;

use Database\Seeders\Support\HealthQcmCatalogue;
use Illuminate\Console\Command;
use Throwable;

class RepairHealthQcm extends Command
{
    protected $signature = 'health-qcm:repair
        {--apply : Rerun the 14 allowlisted seeders; default is a read-only preview}
        {--cleanup-ids= : Explicit comma-separated quiz IDs to replace; never a wildcard}
        {--confirm= : Required with --apply; must be health-competition}';

    protected $description = 'Preview or explicitly repair only the 14 FR/AR Moroccan Health QCM seeders';

    public function handle(HealthQcmCatalogue $catalogue): int
    {
        $input = (string) $this->option('cleanup-ids');
        if ($input !== '' && ! preg_match('/^[1-9][0-9]*(,[1-9][0-9]*)*$/D', $input)) {
            $this->error('Use explicit positive quiz IDs separated by commas, without spaces.');
            return self::FAILURE;
        }
        foreach ($input === '' ? [] : explode(',', $input) as $id) {
            if ((string) (int) $id !== $id) {
                $this->error('Cleanup ID exceeds the supported integer range. Nothing changed.');
                return self::FAILURE;
            }
        }
        $ids = $input === '' ? [] : array_values(array_unique(array_map('intval', explode(',', $input))));
        if ($this->option('apply') && $this->option('confirm') !== 'health-competition') {
            $this->error('Writes require --apply --confirm=health-competition. Nothing changed.');
            return self::FAILURE;
        }
        try {
            $this->table(['Seeder', 'Stable slug', 'Existing quiz IDs', 'Active question count / quiz state', 'Action'], $catalogue->plan());
            if ($ids) $this->table(['Quiz ID', 'Title', 'Cleanup'], $catalogue->cleanupPreview($ids));
            if (! $this->option('apply')) {
                $this->info('Read-only preview. No seeders executed and no records changed.');
                return self::SUCCESS;
            }
            $catalogue->repair($ids);
            $this->info('All 14 Health QCMs synchronized in one transaction. New/restored quizzes remain inactive for review.');
            return self::SUCCESS;
        } catch (Throwable $e) {
            $this->error($e->getMessage());
            $this->error('Repair not applied. Transactional changes, if started, were rolled back.');
            return self::FAILURE;
        }
    }
}
