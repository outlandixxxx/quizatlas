<?php

namespace App\Services;

use InvalidArgumentException;

final class YouTubeVideoUrl
{
    public static function id(string $url): string
    {
        $url = trim($url);
        if (strlen($url) > 2048 || preg_match('/[\x00-\x20\x7f\\\\]/', $url)) {
            throw new InvalidArgumentException('Enter a valid YouTube video URL.');
        }
        $parts = parse_url($url);
        if (! is_array($parts) || ! in_array(strtolower($parts['scheme'] ?? ''), ['http', 'https'], true)
            || isset($parts['user']) || isset($parts['pass']) || isset($parts['port'])) {
            throw new InvalidArgumentException('Enter a valid YouTube video URL.');
        }
        $host = strtolower($parts['host'] ?? '');
        $path = $parts['path'] ?? '';
        $id = null;
        if ($host === 'youtu.be' && preg_match('~^/([A-Za-z0-9_-]{11})/?$~D', $path, $match)) {
            $id = $match[1];
        } elseif (in_array($host, ['youtube.com', 'www.youtube.com', 'm.youtube.com'], true)) {
            if ($path === '/watch') {
                parse_str($parts['query'] ?? '', $query);
                // Ambiguous duplicate IDs are rejected rather than depending on query-parser order.
                $keys = array_map(fn ($part) => urldecode(explode('=', $part, 2)[0]), explode('&', $parts['query'] ?? ''));
                if (count(array_filter($keys, fn ($key) => $key === 'v')) === 1 && is_string($query['v'] ?? null)) {
                    $id = $query['v'];
                }
            } elseif (preg_match('~^/(?:shorts|embed)/([A-Za-z0-9_-]{11})/?$~D', $path, $match)) {
                $id = $match[1];
            }
        } elseif (in_array($host, ['youtube-nocookie.com', 'www.youtube-nocookie.com'], true)
            && preg_match('~^/embed/([A-Za-z0-9_-]{11})/?$~D', $path, $match)) {
            $id = $match[1];
        }
        if (! is_string($id) || ! preg_match('/^[A-Za-z0-9_-]{11}$/D', $id)) {
            throw new InvalidArgumentException('Use a YouTube watch, Shorts, youtu.be or embed URL with an 11-character video ID.');
        }

        return $id;
    }
}
