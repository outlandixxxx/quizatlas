<?php

namespace App\Services\ConcoursDiscovery;

use App\Models\ConcoursAnnouncementSource;
use Carbon\CarbonImmutable;

class SourceStatus
{
    public function __construct(private AuthorizedFeedClient $client, private FactualMetadataPolicy $policy) {}

    public function describe(ConcoursAnnouncementSource $source): array
    {
        $check = config('concours_discovery.technical_feed_checks.'.$source->key, []);
        $technical = ['status' => 'unverified', 'checked_at' => null, 'http_status' => null, 'format' => null, 'items' => null, 'dates' => null];
        if (($check['url'] ?? null) === $source->listing_url) {
            $technical = array_replace($technical, array_diff_key($check, ['url' => true]), ['status' => 'confirmed_rss']);
        }
        // A later actual failure supersedes historical access evidence, without erasing it.
        if ($source->last_attempt_at && $source->last_error && ($technical['checked_at'] === null
            || $source->last_attempt_at->gte(CarbonImmutable::parse($technical['checked_at'])))) {
            $refused = preg_match('/^http_(401|403|429)$/D', $source->last_error, $matches);
            $technical = array_replace($technical, ['status' => $refused ? 'access_refused' : 'last_attempt_failed',
                'checked_at' => $source->last_attempt_at->toIso8601String(), 'http_status' => $refused ? (int) $matches[1] : null,
                'format' => null, 'items' => null, 'dates' => null]);
        }
        $api = $source->key === WadifaInfoNormalizer::KEY;
        if ($api && $source->listing_url === WadifaInfoNormalizer::URL) {
            $technical = ['status' => $source->last_error ? 'last_attempt_failed' : 'confirmed_json',
                'checked_at' => $source->last_attempt_at?->toIso8601String() ?? '2026-10-27T20:00:48Z',
                'http_status' => $source->last_success_at ? 200 : null, 'format' => 'Wadifa Info JSON API (not JSON Feed)',
                'items' => null, 'dates' => 'provider_declared'];
        }
        $ready = $this->client->eligible($source);
        $global = (bool) config('concours_discovery.automation_enabled');

        $assessment = $api ? ['collection_assessment' => 'licensed_metadata',
            'collection_assessment_note' => 'CC BY 4.0 : métadonnées API, attribution obligatoire. Aucun droit déclaré sur articles/PDF externes.',
            'collection_scope' => 'facts_only', 'publisher_written_authorization' => null,
            'transport_format' => 'wadifa_info_json'] : $this->policy->availability($source);

        return $assessment + [
            'technical_access' => $technical,
            'usage_eligible' => $source->permission_status === 'allowed' && (bool) $source->permission_evidence
                && $source->permission_checked_at !== null && $this->policy->eligible($source) && (! $api || app(WadifaInfoNormalizer::class)->eligible($source)),
            'automated_ready' => $ready, 'automation_enabled' => $global,
            'automatic_collection_active' => $ready && $global,
        ];
    }
}
