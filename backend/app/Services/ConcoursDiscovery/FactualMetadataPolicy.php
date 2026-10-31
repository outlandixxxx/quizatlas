<?php

namespace App\Services\ConcoursDiscovery;

use App\Models\ConcoursAnnouncementSource;
use Carbon\CarbonImmutable;

class FactualMetadataPolicy
{
    public const TITLE_PREFIX = 'RSS metadata · ';

    public function applies(ConcoursAnnouncementSource $source): bool
    {
        return str_starts_with($source->permission_evidence ?? '', 'factual-metadata:');
    }

    public function eligible(ConcoursAnnouncementSource $source): bool
    {
        $review = config('concours_discovery.factual_metadata_reviews.'.$source->key, []);
        if (! $this->applies($source)) {
            // Reviewed candidate restrictions cannot be escaped with a generic "public RSS" note.
            // Other independently authorized sources retain all existing gates.
            return $review === [];
        }

        return ($review['disposition'] ?? null) === 'limited_factual_review'
            && $source->source_kind === 'third_party' && $source->collection_method === 'rss_atom'
            && $source->listing_url === ($review['feed_url'] ?? null)
            && $source->permission_evidence === ($review['evidence'] ?? null)
            && $source->permission_checked_at !== null
            && $source->permission_checked_at->betweenIncluded(CarbonImmutable::parse($review['reviewed_at']), now())
            && now()->gte(CarbonImmutable::parse($review['reviewed_at'])) && now()->lt(CarbonImmutable::parse($review['expires_at']))
            && $source->check_interval_minutes >= 720;
    }

    public function availability(ConcoursAnnouncementSource $source): array
    {
        $review = config('concours_discovery.factual_metadata_reviews.'.$source->key, []);
        if ($this->applies($source) && $source->last_error && ! $source->enabled) {
            $review = ['disposition' => 'unavailable_access', 'note' => 'Collecte arrêtée : '.$source->last_error.'. Réexamen requis, aucun contournement.'];
        } elseif (isset($review['expires_at']) && now()->gte(CarbonImmutable::parse($review['expires_at']))) {
            $review = ['disposition' => 'unavailable_review_expired', 'note' => 'Évaluation factuelle expirée. Réexaminer les conditions et l’accès avant toute collecte.'];
        }

        return ['collection_assessment' => $review['disposition'] ?? 'unassessed',
            'collection_assessment_note' => $review['note'] ?? 'Aucune base de collecte évaluée.',
            'collection_scope' => $this->applies($source) ? 'facts_only' : 'source_metadata',
            'publisher_written_authorization' => $this->applies($source) ? false : null];
    }

    public function minimize(ConcoursAnnouncementSource $source, array $item): array
    {
        abort_unless($this->eligible($source), 422, 'The limited factual-metadata assessment is absent, expired or incompatible.');
        $classification = app(CandidateClassifier::class)->classify((string) ($item['title'] ?? ''));
        $url = $item['source_article_url'] ?? $item['official_url'] ?? '';
        $normalized = app(OfficialUrl::class)->normalizeSource($url, $source, true);
        // Opaque digest avoids retaining expressive GUIDs. Never persist the publisher's wording.
        $identifier = isset($item['source_identifier']) ? 'sha256:'.hash('sha256', $item['source_identifier']) : null;
        $reference = preg_match('~/offre/show/id/(\d+)$~', parse_url($normalized, PHP_URL_PATH) ?? '', $match)
            ? $match[1] : substr(hash('sha256', $normalized), 0, 12);
        $category = $classification['candidate_category'] === 'academic' ? 'Admission académique' : 'Emploi public';
        $type = ['opening' => 'Ouverture', 'results' => 'Résultats', 'preselection' => 'Présélection', 'amendment' => 'Modification / report'][$classification['candidate_type']] ?? 'À examiner';
        $topic = app(CandidateClassifier::class)->topic((string) ($item['title'] ?? ''));

        return ['metadata' => ['source_identifier' => $identifier,
            'title' => self::TITLE_PREFIX.$category.' · '.$type.' · '.$topic.' · réf. '.$reference,
            'source_article_url' => $url, 'publication_date' => $item['publication_date'] ?? null],
            'classification' => $classification,
            'observation_digest' => hash('sha256', (string) ($item['title'] ?? ''))];
    }
}
