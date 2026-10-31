<?php

namespace App\Services\ConcoursDiscovery;

use App\Models\ConcoursAnnouncementSource;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\RateLimiter;
use RuntimeException;

class AuthorizedFeedClient
{
    public function __construct(private OfficialUrl $urls, private PublicAddressResolver $resolver) {}

    public static function errorCode(\Throwable $exception): string
    {
        // Guzzle wraps header/progress callback failures. Preserve only sanitized codes.
        for ($cause = $exception, $depth = 0; $cause && $depth < 10; $cause = $cause->getPrevious(), $depth++) {
            if (preg_match('/^(http_\d{3}|[a-z_]{3,60})$/D', $cause->getMessage())) {
                return $cause->getMessage();
            }
        }

        return 'collection_failed';
    }

    public function eligible(ConcoursAnnouncementSource $source): bool
    {
        return (bool) ($source->enabled && $source->permission_status === 'allowed' && $source->permission_evidence
            && $source->permission_checked_at && in_array($source->collection_method, ['json_feed', 'rss_atom'], true)
            && app(FactualMetadataPolicy::class)->eligible($source)
            && ($source->key !== WadifaInfoNormalizer::KEY || app(WadifaInfoNormalizer::class)->eligible($source))
            && in_array($source->listing_url, config('concours_discovery.authorized_feed_urls', []), true));
    }

    public function fetch(ConcoursAnnouncementSource $source, string $language = 'fr', int $itemLimit = 100): string
    {
        if (! $this->eligible($source)) {
            throw new RuntimeException('source_not_authorized');
        }
        $this->urls->normalizeSource($source->listing_url, $source);
        if (preg_match('/\.pdf(?:$|[?#])/i', $source->listing_url)) {
            throw new RuntimeException('pdf_fetch_forbidden');
        }
        $host = parse_url($source->listing_url, PHP_URL_HOST);
        $api = $source->key === WadifaInfoNormalizer::KEY;
        $url = $api ? WadifaInfoNormalizer::endpoint($language, $itemLimit) : $source->listing_url;
        if (($api && ! in_array($url, config('concours_discovery.authorized_feed_urls', []), true)) || (! $api && $language !== 'fr')) {
            throw new RuntimeException('source_not_authorized');
        }
        $cacheKey = 'concours-wadifa-response:'.hash('sha256', $url);
        if ($api && is_string($cached = $this->cachedBody($cacheKey))) {
            return $cached;
        }
        // Shared across direct clients, command invocations and endpoint variants.
        $requestLock = $api ? Cache::lock('concours-wadifa-http', 30) : null;
        if ($requestLock && ! $requestLock->get()) {
            throw new RuntimeException('provider_request_in_progress');
        }
        try {
            if ($api && is_string($cached = $this->cachedBody($cacheKey))) {
                return $cached;
            }
            if ($api && ! RateLimiter::attempt('concours-wadifa-host:'.$host, 1, fn () => true, 60)) {
                throw new RuntimeException('provider_rate_limited');
            }
            $address = $this->resolver->resolve($host);
            $limit = config('concours_discovery.max_bytes');
            $response = Http::withHeaders(['User-Agent' => 'MaroQuiz-Discovery/1.0',
                'Accept' => 'application/feed+json, application/json, application/rss+xml, application/atom+xml, application/xml, text/xml',
                'Accept-Encoding' => 'identity'])
                ->connectTimeout(5)->timeout(15)->withOptions([
                    'allow_redirects' => false, 'proxy' => '', 'decode_content' => false,
                    // Pin the public IPv4 address after checking DNS; retain TLS host verification.
                    'curl' => [CURLOPT_RESOLVE => ["{$host}:443:{$address}"], CURLOPT_IPRESOLVE => CURL_IPRESOLVE_V4],
                    'on_headers' => function ($response) use ($limit, $api) {
                        if ($response->getStatusCode() < 200 || $response->getStatusCode() >= 300) {
                            throw new RuntimeException('http_'.$response->getStatusCode());
                        }
                        $type = strtolower(explode(';', $response->getHeaderLine('Content-Type'))[0]);
                        if (($api && $type !== 'application/json') || ! in_array($type, ['application/feed+json', 'application/json', 'application/rss+xml', 'application/atom+xml', 'application/xml', 'text/xml'], true)
                            || (int) $response->getHeaderLine('Content-Length') > $limit
                            || ! in_array(strtolower($response->getHeaderLine('Content-Encoding')), ['', 'identity'], true)) {
                            throw new RuntimeException('unsupported_or_oversized_feed');
                        }
                    },
                    'progress' => function ($total, $downloaded) use ($limit) {
                        if ($total > $limit || $downloaded > $limit) {
                            throw new RuntimeException('feed_too_large');
                        }
                    },
                ])->get($url);
            // No in-run retries: even a 429 waits until the next due check (>= 1h).
            if (! $response->successful()) {
                throw new RuntimeException('http_'.$response->status());
            }
            $type = strtolower(explode(';', $response->header('Content-Type'))[0]);
            if (($api && $type !== 'application/json') || ! in_array($type, ['application/feed+json', 'application/json', 'application/rss+xml', 'application/atom+xml', 'application/xml', 'text/xml'], true)) {
                throw new RuntimeException('unsupported_feed_type');
            }
            $body = $response->body();
            if (strlen($body) > $limit || str_starts_with($body, '%PDF-')) {
                throw new RuntimeException('unsupported_or_oversized_feed');
            }

            if ($api) {
                // This is one private API client cache, never an HTTP response cache for end users.
                // Retention (provider minimum) and HTTP freshness are separate: no stale reuse.
                $control = strtolower($response->header('Cache-Control') ?? '');
                if (preg_match('/(?:^|,)\s*no-store(?:\s*(?:,|$))/', $control)) {
                    throw new RuntimeException('provider_cache_no_store');
                }
                $age = max(0, (int) $response->header('Age'));
                $date = strtotime($response->header('Date') ?? '');
                if ($date !== false) {
                    $age = max($age, now()->timestamp - $date);
                }
                $freshSeconds = 3600;
                if (preg_match('/(?:^|,)\s*max-age="?(\d+)"?/', $control, $matches)) {
                    $freshSeconds = max(0, (int) $matches[1] - $age);
                } elseif (($expires = strtotime($response->header('Expires') ?? '')) !== false) {
                    $freshSeconds = max(0, $expires - now()->timestamp);
                }
                if (preg_match('/(?:^|,)\s*no-cache(?:\s*(?:=|,|$))/', $control) || $response->header('Vary') === '*') {
                    $freshSeconds = 0;
                }
                // Earlier revalidation than a very long origin max-age is permitted.
                $freshSeconds = min(604800, $freshSeconds);
                $ttl = max(3600, $freshSeconds);
                // Validate before caching. Only this bounded API metadata response is cached.
                $parsed = app(WadifaInfoNormalizer::class)->parse($body, $language);
                if (count($parsed) > $itemLimit) {
                    throw new RuntimeException('provider_sample_limit_exceeded');
                }
                $body = app(WadifaInfoNormalizer::class)->minimizedBody($body, $language);
                Cache::put($cacheKey.':fresh_until', now()->timestamp + $freshSeconds, $ttl);
                Cache::put($cacheKey, $body, $ttl);
                Cache::put($cacheKey.':status', ['fetched_at' => now()->toIso8601String(), 'cache_seconds' => $ttl,
                    'fresh_seconds' => $freshSeconds, 'private_client_cache' => true,
                    'http_status' => $response->status(), 'bytes' => strlen($body), 'sha256' => hash('sha256', $body), 'language' => $language], $ttl);
            }

            return $body;
        } finally {
            $requestLock?->release();
        }
    }

    private function cachedBody(string $key): ?string
    {
        $body = Cache::get($key);
        if (! is_string($body)) {
            return null;
        }
        // Keep the response for >=1h without refetching or presenting stale/no-cache data as fresh.
        // After retention expires, the next due check performs one fresh GET.
        $freshUntil = Cache::get($key.':fresh_until');
        if (! is_int($freshUntil) || now()->timestamp >= $freshUntil) {
            throw new RuntimeException('provider_cache_revalidation_deferred');
        }

        return $body;
    }
}
