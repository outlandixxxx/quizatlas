<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Throwable;

class YouTubeLibraryMetadata
{
    /** One bounded official request for at most 50 IDs, never a request to an entered URL. */
    public function fetch(array $ids): array
    {
        $ids = array_values(array_unique(array_filter($ids, fn ($id) => is_string($id) && preg_match('/^[A-Za-z0-9_-]{11}$/D', $id))));
        $ids = array_slice($ids, 0, 50);
        $key = config('services.youtube.api_key');
        $result = [];
        $missing = [];
        foreach ($ids as $id) {
            $cached = Cache::get('video-library:metadata:'.$id);
            if (is_array($cached)) {
                $result[$id] = $cached;
            } elseif (! $key) {
                $result[$id] = ['error' => 'metadata_not_configured'];
            } else {
                $missing[] = $id;
            }
        }
        if ($missing === []) {
            return $result;
        }
        try {
            $response = Http::acceptJson()->connectTimeout(3)->timeout(8)
                ->withOptions(['allow_redirects' => false])
                ->get('https://www.googleapis.com/youtube/v3/videos', [
                    'part' => 'snippet,contentDetails,status', 'id' => implode(',', $missing), 'key' => $key,
                    'fields' => 'items(id,snippet(title),contentDetails(duration),status(embeddable,privacyStatus))',
                ]);
            $items = $response->successful() ? $response->json('items') : null;
            if (! is_array($items)) {
                throw new \RuntimeException('Metadata unavailable.');
            }
            foreach ($missing as $id) {
                $result[$id] = ['error' => 'video_not_found'];
            }
            foreach ($items as $item) {
                $id = $item['id'] ?? '';
                if (! in_array($id, $missing, true)) {
                    continue;
                }
                $seconds = null;
                if (preg_match('/^PT(?:(\d+)H)?(?:(\d+)M)?(?:(\d+)S)?$/D', $item['contentDetails']['duration'] ?? '', $match)) {
                    $seconds = (int) ($match[1] ?? 0) * 3600 + (int) ($match[2] ?? 0) * 60 + (int) ($match[3] ?? 0);
                }
                $result[$id] = [
                    'title' => mb_substr(html_entity_decode((string) ($item['snippet']['title'] ?? ''), ENT_QUOTES | ENT_HTML5, 'UTF-8'), 0, 250),
                    'duration_seconds' => $seconds,
                    'embeddable' => isset($item['status']['embeddable']) ? (bool) $item['status']['embeddable'] : null,
                    'source' => 'youtube-data-api-v3',
                    'fetched_at' => now()->toIso8601String(),
                ];
            }
            foreach ($missing as $id) {
                Cache::put('video-library:metadata:'.$id, $result[$id], now()->addHours(6));
            }
        } catch (Throwable) {
            // Never log request exceptions: their URLs may contain the private API key.
            foreach ($missing as $id) {
                $result[$id] = ['error' => 'metadata_unavailable'];
                Cache::put('video-library:metadata:'.$id, $result[$id], now()->addMinutes(5));
            }
        }

        return $result;
    }
}
