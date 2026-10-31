<?php

namespace App\Console\Commands;

use App\Models\ConcoursAnnouncementSource;
use App\Services\ConcoursDiscovery\AuthorizedFeedClient;
use App\Services\ConcoursDiscovery\FactualMetadataPolicy;
use App\Services\ConcoursDiscovery\FeedParser;
use App\Services\ConcoursDiscovery\WadifaInfoNormalizer;
use App\Services\ConcoursDiscoveryService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\RateLimiter;

class DiscoverConcoursAnnouncements extends Command
{
    protected $signature = 'concours:discover {--source= : Optional source key; still respects authorization and interval}';

    protected $description = 'Collect authorized announcement metadata into the admin review inbox';

    public function handle(AuthorizedFeedClient $client, FeedParser $parser, ConcoursDiscoveryService $service): int
    {
        if (! config('concours_discovery.automation_enabled')) {
            $this->info('Concours discovery automation is disabled.');

            return self::SUCCESS;
        }
        $lock = Cache::lock('concours-discovery-command', 600);
        if (! $lock->get()) {
            $this->info('Another discovery check is running.');

            return self::SUCCESS;
        }
        $errors = 0;
        try {
            $query = ConcoursAnnouncementSource::where('enabled', true)->where('permission_status', 'allowed')->orderByRaw('last_attempt_at IS NOT NULL')->orderBy('last_attempt_at')->orderBy('id');
            if ($key = $this->option('source')) {
                $query->where('key', $key);
            }
            $checked = 0;
            foreach ($query->cursor() as $source) {
                if (! $client->eligible($source) || ($source->last_attempt_at && $source->last_attempt_at->addMinutes($source->check_interval_minutes)->isFuture())) {
                    continue;
                }
                if ($checked++ >= 10) {
                    break;
                } // Bound a run below the 10-minute lock lifetime.
                $hostKey = 'concours-discovery-host:'.parse_url($source->listing_url, PHP_URL_HOST);
                if (! RateLimiter::attempt($hostKey, 1, fn () => true, config('concours_discovery.request_spacing_seconds'))) {
                    continue;
                }
                $source->update(['last_attempt_at' => now()]);
                try {
                    $body = $client->fetch($source);
                    $items = $source->key === WadifaInfoNormalizer::KEY ? app(WadifaInfoNormalizer::class)->parse($body) : $parser->parse($body, $source->collection_method);
                    $retained = $service->captureFeed($source, $items);
                    $source->update(['last_success_at' => now(), 'last_error' => null]);
                    $this->info($source->key.': '.count($items).' metadata items checked; '.$retained.' retained for review.');
                } catch (\Throwable $exception) {
                    // Never persist response bodies, credentials, external HTML or raw exception URLs.
                    $error = AuthorizedFeedClient::errorCode($exception);
                    $state = ['last_error' => $error];
                    if (app(FactualMetadataPolicy::class)->applies($source) && in_array($error, ['http_401', 'http_403', 'http_429', 'unsupported_feed_type', 'unsupported_or_oversized_feed'], true)) {
                        // A limited factual assessment does not override access restrictions.
                        $state['enabled'] = false;
                    }
                    $source->update($state);
                    Log::warning('Concours discovery source failed', ['source_id' => $source->id, 'error' => $error]);
                    $this->warn($source->key.': '.$error);
                    $errors++;
                }
            }
        } finally {
            $lock->release();
        }

        return $errors ? self::FAILURE : self::SUCCESS;
    }
}
