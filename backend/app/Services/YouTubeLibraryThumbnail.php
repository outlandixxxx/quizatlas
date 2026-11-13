<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use RuntimeException;

class YouTubeLibraryThumbnail
{
    private const MAX_BYTES = 1048576;

    public function fetch(string $id): string
    {
        if (! preg_match('/^[A-Za-z0-9_-]{11}$/D', $id)) {
            throw new RuntimeException('Invalid thumbnail identifier.');
        }

        return Cache::remember('video-library:thumbnail:'.$id, now()->addDay(), function () use ($id) {
            $response = Http::accept('image/jpeg')->connectTimeout(3)->timeout(8)
                ->withOptions(['allow_redirects' => false, 'stream' => true])
                ->get('https://i.ytimg.com/vi/'.$id.'/hqdefault.jpg');
            $stream = $response->toPsrResponse()->getBody();
            try {
                if (! $response->successful() || ! str_starts_with(strtolower($response->header('Content-Type')), 'image/jpeg')
                    || (int) $response->header('Content-Length') > self::MAX_BYTES) {
                    throw new RuntimeException('Thumbnail unavailable.');
                }
                $body = '';
                while (! $stream->eof()) {
                    $body .= $stream->read(8192);
                    if (strlen($body) > self::MAX_BYTES) {
                        throw new RuntimeException('Thumbnail too large.');
                    }
                }
                if (! str_starts_with($body, "\xff\xd8\xff")) {
                    throw new RuntimeException('Invalid thumbnail.');
                }

                return $body;
            } finally {
                $stream->close();
            }
        });
    }
}
