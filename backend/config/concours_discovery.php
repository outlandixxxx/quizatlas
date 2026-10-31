<?php

use App\Services\ConcoursDiscovery\WadifaInfoNormalizer;

return [
    // Two independent gates: the scheduler switch and reviewed exact feed URLs.
    'automation_enabled' => env('CONCOURS_DISCOVERY_ENABLED', false),
    'authorized_feed_urls' => [],
    'max_bytes' => 1048576,
    'max_items' => 100,
    'request_spacing_seconds' => 5,
    'stale_after_days' => 180,
    // Historical technical checks, NOT permission or successful application imports.
    // Evidence applies only to the exact reviewed URL and is shown with its check date.
    'technical_feed_checks' => [
        'alwadifa-maroc' => ['url' => 'https://alwadifa-maroc.com/rss', 'checked_at' => '2026-10-27T18:21:21Z',
            'http_status' => 200, 'format' => 'RSS 2.0', 'items' => 55, 'dates' => 'valid'],
        'dreamjob' => ['url' => 'https://www.dreamjob.ma/feed/', 'checked_at' => '2026-10-26T23:24:04Z',
            'http_status' => 200, 'format' => 'RSS 2.0', 'items' => 30, 'dates' => 'valid'],
        'orientation-chabab' => ['url' => 'https://orientation-chabab.com/feed', 'checked_at' => '2026-10-27T17:55:18Z',
            'http_status' => 200, 'format' => 'RSS 2.0', 'items' => 100, 'dates' => 'unknown_malformed_offsets'],
    ],
    // A dated internal assessment is not a publisher licence. This config activates no source.
    // See CONCOURS_RSS_FACTUAL_METADATA.md. Reassess terms/access before the review expires.
    'factual_metadata_reviews' => [
        'alwadifa-maroc' => [
            'disposition' => 'limited_factual_review',
            'feed_url' => 'https://alwadifa-maroc.com/rss',
            'reviewed_at' => '2026-10-27T00:00:00Z', 'expires_at' => '2026-11-26T00:00:00Z',
            'evidence' => 'factual-metadata:alwadifa-20261027; internal Article 8 factual-data assessment; no publisher licence; CONCOURS_RSS_FACTUAL_METADATA.md',
            'note' => 'Évaluation limitée : identifiants, dates et liens pour examen privé. Aucune licence écrite éditeur. Titres éditoriaux non conservés. Réévaluer avant le 26/11/2026.',
        ],
        'dreamjob' => ['disposition' => 'unavailable_terms',
            'note' => 'Indisponible pour cette collecte : conditions limitant la réutilisation des données à un usage privé et non commercial.'],
        'orientation-chabab' => ['disposition' => 'unavailable_terms',
            'note' => 'RSS accessible : HTTP 200, XML RSS 2.0 contrôlé le 27/10/2026. Collecte indisponible sous les conditions de réutilisation examinées.'],
    ],
    // Candidate hosts are not official hosts and this is NOT collection permission.
    'third_party_hosts' => [
        'wadifa-info' => ['www.wadifa-info.com'],
        'alwadifa-maroc' => ['alwadifa-maroc.com'],
        'dreamjob' => ['www.dreamjob.ma'],
        'orientation-chabab' => ['orientation-chabab.com'],
    ],
    // New official hosts require a code/config review, not an arbitrary admin URL.
    'official_hosts' => ['www.emploi-public.ma', 'emploi-public.ma', 'concours.dgsn.gov.ma',
        'recrutement.far.ma', 'recrutement.gr.ma', 'recrutement.fa.gov.ma',
        'recrutement.protectioncivile.ma', 'www.men.gov.ma'],
    // Public availability does not establish permission for automated collection.
    'sources' => [
        // Legacy collection_method enum denotes JSON transport here. Command dispatches
        // this exact key to WadifaInfoNormalizer, NEVER the standard JSON Feed parser.
        'wadifa-info' => ['name' => 'Wadifa Info', 'official_url' => 'https://www.wadifa-info.com/',
            'listing_url' => WadifaInfoNormalizer::URL,
            'source_kind' => 'third_party', 'collection_method' => 'json_feed', 'check_interval_minutes' => 720,
            'permission_status' => 'allowed', 'permission_evidence' => WadifaInfoNormalizer::EVIDENCE,
            'permission_checked_at' => '2026-10-27T20:00:48Z'],
        'emploi-public' => ['name' => 'Emploi Public', 'official_url' => 'https://www.emploi-public.ma/', 'listing_url' => 'https://www.emploi-public.ma/fr/'],
        'dgsn' => ['name' => 'DGSN', 'official_url' => 'https://concours.dgsn.gov.ma/', 'listing_url' => 'https://concours.dgsn.gov.ma/'],
        'far' => ['name' => 'Forces Armées Royales', 'official_url' => 'https://recrutement.far.ma/', 'listing_url' => 'https://recrutement.far.ma/'],
        'gendarmerie' => ['name' => 'Gendarmerie Royale', 'official_url' => 'https://recrutement.gr.ma/', 'listing_url' => 'https://recrutement.gr.ma/'],
        'forces-auxiliaires' => ['name' => 'Forces Auxiliaires', 'official_url' => 'https://recrutement.fa.gov.ma/', 'listing_url' => 'https://recrutement.fa.gov.ma/'],
        'protection-civile' => ['name' => 'Protection Civile', 'official_url' => 'https://recrutement.protectioncivile.ma/', 'listing_url' => 'https://recrutement.protectioncivile.ma/accueil'],
        'education-nationale' => ['name' => 'Éducation nationale', 'official_url' => 'https://www.men.gov.ma/', 'listing_url' => 'https://www.men.gov.ma/fr/concours'],
        'alwadifa-maroc' => ['name' => 'Alwadifa Maroc (tiers)', 'official_url' => 'https://alwadifa-maroc.com/', 'listing_url' => 'https://alwadifa-maroc.com/rss', 'source_kind' => 'third_party', 'collection_method' => 'rss_atom'],
        'dreamjob' => ['name' => 'Dreamjob (tiers)', 'official_url' => 'https://www.dreamjob.ma/', 'listing_url' => 'https://www.dreamjob.ma/feed/', 'source_kind' => 'third_party', 'collection_method' => 'rss_atom'],
        'orientation-chabab' => ['name' => 'Orientation Chabab (tiers)', 'official_url' => 'https://orientation-chabab.com/', 'listing_url' => 'https://orientation-chabab.com/feed', 'source_kind' => 'third_party', 'collection_method' => 'rss_atom'],
    ],
];
