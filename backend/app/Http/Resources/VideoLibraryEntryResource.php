<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Cache;

class VideoLibraryEntryResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        // API-derived data lives only in a six-hour cache; editorial titles remain in the DB.
        $metadata = Cache::get('video-library:metadata:'.$this->youtube_id);
        $fresh = is_array($metadata) && empty($metadata['error']);

        return [
            'id' => $this->id, 'youtube_id' => $this->youtube_id, 'title' => $this->title,
            'url' => 'https://www.youtube.com/watch?v='.$this->youtube_id,
            'thumbnail_url' => '/api/v1/public/videos/'.$this->id.'/thumbnail',
            'embed_url' => 'https://www.youtube-nocookie.com/embed/'.$this->youtube_id,
            'format' => $this->format, 'category' => $this->category, 'template' => $this->template,
            'language' => $this->language, 'status' => $this->status,
            'published_at' => $this->published_at?->toIso8601String(),
            'duration_seconds' => $fresh ? ($metadata['duration_seconds'] ?? null) : null,
            'embeddable' => $fresh ? ($metadata['embeddable'] ?? null) : null,
            'metadata_source' => $fresh ? ($metadata['source'] ?? null) : null,
            'metadata_fetched_at' => $fresh ? ($metadata['fetched_at'] ?? null) : null,
        ];
    }
}
