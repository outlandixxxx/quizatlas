<?php

namespace App\Console\Commands;

use App\Models\ConcoursAnnouncementSource;
use Illuminate\Console\Command;

class RegisterConcoursSources extends Command
{
    protected $signature = 'concours:register-sources';

    protected $description = 'Add configured sources disabled with unknown permission; preserve existing settings';

    public function handle(): int
    {
        foreach (config('concours_discovery.sources') as $key => $source) {
            ConcoursAnnouncementSource::firstOrCreate(['key' => $key], $source);
        }
        $this->info('Sources registered. No automatic access or publication enabled.');

        return self::SUCCESS;
    }
}
