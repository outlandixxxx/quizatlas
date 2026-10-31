<?php

namespace App\Services\ConcoursDiscovery;

use App\Models\ConcoursAnnouncementSource;
use Illuminate\Validation\ValidationException;
use RuntimeException;

/** Custom provider API, deliberately separate from the standard JSON Feed parser. */
class WadifaInfoNormalizer
{
    public const KEY = 'wadifa-info';

    public const URL = 'https://www.wadifa-info.com/api/v1/concours?limit=100';

    public const ARABIC_URL = 'https://www.wadifa-info.com/api/v1/concours?lang=ar&limit=100';

    public const ARABIC_SAMPLE_URL = 'https://www.wadifa-info.com/api/v1/concours?lang=ar&limit=5';

    public const TITLE_PREFIX = 'API metadata · Wadifa Info · ';

    public const EVIDENCE = 'CC-BY-4.0 covered API metadata; https://www.wadifa-info.com/developpeurs; attribution, >=1h cache, <=1 request/min; external articles/PDF rights excluded';

    public function eligible(ConcoursAnnouncementSource $source): bool
    {
        return $source->source_kind === 'third_party' && $source->collection_method === 'json_feed'
            && $source->listing_url === self::URL && $source->permission_evidence === self::EVIDENCE
            && $source->check_interval_minutes >= 60;
    }

    public static function endpoint(string $language, int $limit = 100): string
    {
        return match ($language.':'.$limit) {
            'fr:100' => self::URL,
            'ar:100' => self::ARABIC_URL,
            'ar:5' => self::ARABIC_SAMPLE_URL,
            default => throw new RuntimeException('unsupported_provider_language'),
        };
    }

    public function parse(string $body, string $language = 'fr'): array
    {
        self::endpoint($language);
        if (strlen($body) > config('concours_discovery.max_bytes')) {
            throw new RuntimeException('api_too_large');
        }
        try {
            $data = json_decode($body, true, 32, JSON_THROW_ON_ERROR);
        } catch (\JsonException) {
            throw new RuntimeException('invalid_provider_json');
        }
        if (! is_array($data) || ! isset($data['items']) || ! is_array($data['items']) || ! array_is_list($data['items'])
            || count($data['items']) > min(100, config('concours_discovery.max_items')) || ($data['count'] ?? null) !== count($data['items'])) {
            throw new RuntimeException('invalid_provider_envelope');
        }
        if (! $this->validAttribution($data['attribution'] ?? null)) {
            throw new RuntimeException('provider_license_changed');
        }
        $items = [];
        $seen = [];
        foreach ($data['items'] as $item) {
            // Identity and attribution URL are indispensable. One invalid identity rolls back the check.
            if (! is_array($item) || ! is_int($item['id'] ?? null) || $item['id'] < 1
                || ! self::articleUrl($item['url'] ?? null, (string) $item['id'])) {
                throw new RuntimeException('invalid_provider_identity');
            }
            if (isset($seen[$item['id']])) {
                throw new RuntimeException('duplicate_provider_identity');
            }
            $seen[$item['id']] = true;
            $employer = $this->text($item['employer'] ?? null, 255);
            $grade = $this->text($item['grade'] ?? null, 255);
            $notice = null;
            if (is_string($item['official_notice'] ?? null)) {
                try {
                    $notice = app(OfficialUrl::class)->normalize($item['official_notice']);
                } catch (ValidationException) {
                    // Unknown hosts/invalid optional links are not added to the official-host allowlist.
                }
            }
            $items[] = ['source_identifier' => (string) $item['id'],
                'title' => mb_substr(self::TITLE_PREFIX.($employer ?? '—').' · '.($grade ?? '—').' · #'.$item['id'], 0, 255),
                'source_article_url' => $item['url'], 'institution' => $employer, 'grade' => $grade,
                'publication_date' => $this->date($item['published'] ?? null),
                'application_deadline' => $this->date($item['deadline'] ?? null),
                'provider_metadata' => ['provider_id' => (string) $item['id'], 'employer' => $employer, 'grade' => $grade,
                    'positions' => is_int($item['posts'] ?? null) && $item['posts'] > 0 && $item['posts'] <= 1000000 ? $item['posts'] : null,
                    'reported_official_url' => $notice, 'official_link_verified' => false,
                    'attribution' => self::credit($item['url']), 'language' => $language,
                    'employer_fr' => $language === 'fr' ? $employer : null,
                    'grade_fr' => $language === 'fr' ? $grade : null,
                    'employer_ar' => $language === 'ar' ? $this->arabic($employer) : null,
                    'grade_ar' => $language === 'ar' ? $this->arabic($grade) : null,
                    'article_urls' => ['fr' => $language === 'fr' ? $item['url'] : null, 'ar' => $language === 'ar' ? $item['url'] : null],
                    'arabic_status' => $language === 'ar' ? $this->arabicStatus($this->arabic($employer), $this->arabic($grade)) : 'missing']];
        }

        return $items;
    }

    private function validAttribution(mixed $credit): bool
    {
        // The specification makes `required` human-readable text, not a locale-independent ID.
        // Unknown clauses still fail closed: do not guess whether new legal conditions are safe.
        if (! is_array($credit) || count($credit) !== 4
            || ($credit['license'] ?? null) !== 'CC-BY-4.0'
            || ($credit['license_url'] ?? null) !== 'https://creativecommons.org/licenses/by/4.0/'
            || ($credit['docs'] ?? null) !== 'https://www.wadifa-info.com/developpeurs'
            || ! is_string($credit['required'] ?? null) || mb_strlen($credit['required']) > 1024
            || preg_match('/[<>\x00-\x1f\x7f]/u', $credit['required'])) {
            return false;
        }
        // Reviewed equivalents of the documented visible, per-item source link obligation.
        // Arabic examples are synthetic contract fixtures, not retained live response text.
        $messages = [
            "Affichez « Source : Wadifa Info » avec un lien visible vers l'URL de chaque élément (champ url).",
            'Affichez « Source : Wadifa Info » avec un lien visible et cliquable vers le champ url de chaque élément.',
            'اعرض «المصدر: Wadifa Info» مع رابط مرئي إلى عنوان URL لكل عنصر (حقل url).',
            'اعرض «المصدر: Wadifa Info» مع رابط واضح وقابل للنقر إلى حقل url لكل عنصر.',
            'اعرض «Source : Wadifa Info» مع رابط مرئي إلى عنوان URL لكل عنصر (حقل url).',
        ];
        $normalize = static function (string $text): string {
            $text = mb_strtolower(str_replace(['«', '»', '“', '”', '’'], ['', '', '', '', "'"], $text));
            $text = preg_replace('/[\p{Z}\s]+/u', ' ', $text);
            $text = preg_replace('/\s*:\s*/u', ':', $text);

            return rtrim(trim($text), '.');
        };

        return in_array($normalize($credit['required']), array_map($normalize, $messages), true);
    }

    /** Pair already validated metadata by provider ID. Never create a second discovery. */
    public function bilingual(array $french, array $arabic): array
    {
        if (count($french) > 100 || count($arabic) > 100) {
            throw new RuntimeException('api_too_large');
        }
        $byId = [];
        foreach ($arabic as $item) {
            $id = $item['source_identifier'] ?? '';
            if (! is_string($id) || ! preg_match('/^[1-9][0-9]*$/D', $id)
                || ($item['provider_metadata']['provider_id'] ?? null) !== $id
                || ($item['provider_metadata']['language'] ?? null) !== 'ar'
                || ! self::articleUrl($item['source_article_url'] ?? null, $id) || isset($byId[$id])) {
                throw new RuntimeException('invalid_bilingual_identity');
            }
            $byId[$id] = $item;
        }
        $seen = [];
        foreach ($french as &$item) {
            $id = $item['source_identifier'] ?? '';
            if (! is_string($id) || ! preg_match('/^[1-9][0-9]*$/D', $id)
                || ($item['provider_metadata']['provider_id'] ?? null) !== $id
                || ($item['provider_metadata']['language'] ?? 'fr') !== 'fr'
                || ! self::articleUrl($item['source_article_url'] ?? null, $id) || isset($seen[$id])) {
                throw new RuntimeException('invalid_bilingual_identity');
            }
            $seen[$id] = true;
            $provider = self::bilingualMetadata($item['provider_metadata'], $item['source_article_url']);
            $provider['employer_ar'] = null;
            $provider['grade_ar'] = null;
            $provider['arabic_status'] = 'missing';
            $provider['article_urls']['ar'] = null;
            $translation = $byId[$id] ?? null;
            if ($translation) {
                $other = $translation['provider_metadata'];
                $conflict = false;
                foreach (['publication_date', 'application_deadline'] as $field) {
                    $conflict = $conflict || (isset($item[$field], $translation[$field]) && $item[$field] !== $translation[$field]);
                }
                foreach (['positions', 'reported_official_url'] as $field) {
                    $conflict = $conflict || (isset($provider[$field], $other[$field]) && $provider[$field] !== $other[$field]);
                }
                if ($conflict) {
                    $provider['arabic_status'] = 'conflict';
                    $provider['employer_ar'] = null;
                    $provider['grade_ar'] = null;
                } else {
                    $provider['employer_ar'] = $this->arabic($other['employer_ar'] ?? null);
                    $provider['grade_ar'] = $this->arabic($other['grade_ar'] ?? null);
                    $provider['arabic_status'] = $this->arabicStatus($provider['employer_ar'], $provider['grade_ar']);
                    $provider['article_urls']['ar'] = $translation['source_article_url'];
                }
            }
            $item['provider_metadata'] = $provider;
        }
        unset($item);

        return $french;
    }

    /** Add read defaults for legacy revisions without rewriting their stored snapshots. */
    public static function bilingualMetadata(array $provider, ?string $article): array
    {
        return $provider + ['language' => 'fr', 'employer_fr' => $provider['employer'] ?? null,
            'grade_fr' => $provider['grade'] ?? null, 'employer_ar' => null, 'grade_ar' => null,
            'article_urls' => ['fr' => $article, 'ar' => null], 'arabic_status' => 'missing'];
    }

    /** Persist/cache only the documented factual fields, never unexpected article content. */
    public function minimizedBody(string $body, string $language): string
    {
        $items = $this->parse($body, $language);
        $data = json_decode($body, true, 32, JSON_THROW_ON_ERROR);
        $rows = array_map(fn ($item) => ['id' => (int) $item['source_identifier'], 'employer' => $item['institution'], 'grade' => $item['grade'],
            'posts' => $item['provider_metadata']['positions'], 'published' => $item['publication_date'], 'deadline' => $item['application_deadline'],
            'url' => $item['source_article_url'], 'official_notice' => $item['provider_metadata']['reported_official_url']], $items);

        return json_encode(['attribution' => array_intersect_key($data['attribution'], array_flip(['license', 'license_url', 'docs', 'required'])),
            'count' => count($rows), 'items' => $rows], JSON_THROW_ON_ERROR | JSON_UNESCAPED_UNICODE);
    }

    private function arabic(?string $value): ?string
    {
        $value = $this->text($value, 255);

        return $value !== null && preg_match('/\p{Arabic}/u', $value) ? $value : null;
    }

    private function arabicStatus(?string $employer, ?string $grade): string
    {
        return $employer && $grade ? 'available' : ($employer || $grade ? 'partial' : 'missing');
    }

    public function classification(array $metadata): array
    {
        // Employer and role are provider-declared hints, never verified institution/track associations.
        $provider = $metadata['provider_metadata'] ?? [];
        if (empty($provider['employer']) || empty($provider['grade'])) {
            return ['candidate_category' => 'excluded', 'candidate_type' => 'unknown', 'classification_reason' => 'incomplete_provider_employment'];
        }

        return app(CandidateClassifier::class)->classify($provider['employer'].' : concours de recrutement '.$provider['grade'].' '.rawurldecode(parse_url($metadata['source_article_url'] ?? '', PHP_URL_PATH) ?? ''));
    }

    public static function articleUrl(mixed $url, ?string $id = null): bool
    {
        if (! is_string($url) || strlen($url) > 2048 || ! filter_var($url, FILTER_VALIDATE_URL)) {
            return false;
        }
        $parts = parse_url($url);

        return ($parts['scheme'] ?? '') === 'https' && ($parts['host'] ?? '') === 'www.wadifa-info.com'
            && ! isset($parts['user']) && ! isset($parts['pass'])
            && ! isset($parts['port']) && ! isset($parts['query']) && ! isset($parts['fragment'])
            && ! preg_match('/[\x00-\x20\x7f\\\\]/', $url)
            && (bool) preg_match('~^/(fr|ar)/'.($id !== null ? preg_quote($id, '~') : '[1-9][0-9]*').'/[^/]+$~uD', $parts['path'] ?? '');
    }

    public static function credit(string $article): array
    {
        return ['provider' => self::KEY, 'name' => 'Wadifa Info', 'url' => $article,
            'license' => 'CC BY 4.0', 'license_url' => 'https://creativecommons.org/licenses/by/4.0/',
            'changes' => 'selected_verified_adapted'];
    }

    private function text(mixed $value, int $max): ?string
    {
        return is_string($value) && trim($value) !== '' && mb_strlen($value) <= $max
            && ! preg_match('/[<>\x00-\x1f\x7f]/u', $value) ? trim($value) : null;
    }

    private function date(mixed $value): ?string
    {
        if (! is_string($value) || ! preg_match('/^(\d{4})-(\d{2})-(\d{2})$/D', $value, $m)) {
            return null;
        }

        return checkdate((int) $m[2], (int) $m[3], (int) $m[1]) ? $value : null;
    }
}
