<?php

namespace App\Services\ConcoursDiscovery;

use App\Models\ConcoursAnnouncementSource;
use Illuminate\Validation\ValidationException;

class OfficialUrl
{
    public function normalize(string $url): string
    {
        return $this->normalizeHosts($url, config('concours_discovery.official_hosts', []));
    }

    public function normalizeSource(string $url, ConcoursAnnouncementSource $source, bool $article = false): string
    {
        $hosts = $source->source_kind === 'third_party'
            ? config('concours_discovery.third_party_hosts.'.$source->key, [])
            : config('concours_discovery.official_hosts', []);
        if ($article && $source->source_kind === 'third_party') {
            $hosts = array_merge($hosts, config('concours_discovery.official_hosts', []));
        }

        return $this->normalizeHosts($url, $hosts);
    }

    private function normalizeHosts(string $url, array $hosts): string
    {
        $parts = parse_url($url);
        $host = strtolower($parts['host'] ?? '');
        if (strlen($url) > 2048 || ! filter_var($url, FILTER_VALIDATE_URL) || ($parts['scheme'] ?? '') !== 'https'
            || isset($parts['user']) || isset($parts['pass']) || (isset($parts['port']) && $parts['port'] !== 443)
            || ! in_array($host, $hosts, true)
            || preg_match('/[\x00-\x20\x7f\\\\]/', $url)) {
            throw ValidationException::withMessages(['official_url' => 'Use an HTTPS URL on a configured official host, without credentials or a custom port.']);
        }
        // Preserve all semantic query parameters (including round/amendment IDs),
        // their order and duplicates. Remove only known marketing parameters.
        $query = array_filter(explode('&', $parts['query'] ?? ''), function ($pair) {
            $key = strtolower(rawurldecode(explode('=', $pair, 2)[0]));

            return $pair !== '' && ! str_starts_with($key, 'utm_') && ! in_array($key, ['fbclid', 'gclid'], true);
        });

        return 'https://'.$host.($parts['path'] ?? '/').($query ? '?'.implode('&', $query) : '');
    }
}
