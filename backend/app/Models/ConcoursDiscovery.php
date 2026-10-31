<?php

namespace App\Models;

use App\Services\ConcoursDiscovery\FactualMetadataPolicy;
use App\Services\ConcoursDiscovery\WadifaInfoNormalizer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ConcoursDiscovery extends Model
{
    protected $guarded = ['id'];

    protected $hidden = ['latestObservation'];

    protected $appends = ['is_stale', 'metadata_scope', 'provider_metadata'];

    public function latestObservation(): HasOne
    {
        return $this->hasOne(ConcoursDiscoveryRevision::class, 'discovery_id')->latestOfMany();
    }

    public function getProviderMetadataAttribute(): ?array
    {
        $provider = $this->latestObservation?->snapshot['provider_metadata'] ?? null;

        return $provider ? WadifaInfoNormalizer::bilingualMetadata($provider, $this->source_article_url) : null;
    }

    public function getMetadataScopeAttribute(): string
    {
        return (str_starts_with($this->title ?? '', FactualMetadataPolicy::TITLE_PREFIX) || str_starts_with($this->title ?? '', WadifaInfoNormalizer::TITLE_PREFIX)) ? 'facts_only' : 'source_metadata';
    }

    protected function casts(): array
    {
        return ['version' => 'integer', 'session_year' => 'integer', 'publication_date' => 'immutable_date:Y-m-d',
            'application_deadline' => 'immutable_date:Y-m-d', 'first_seen_at' => 'immutable_datetime',
            'last_seen_at' => 'immutable_datetime', 'reviewed_at' => 'immutable_datetime',
            'official_verified_at' => 'immutable_datetime', 'verified_identity' => 'array'];
    }

    public function getIsStaleAttribute(): bool
    {
        return $this->publication_date !== null && $this->publication_date->lt(now()->subDays(config('concours_discovery.stale_after_days', 180))->startOfDay());
    }

    public function source(): BelongsTo
    {
        return $this->belongsTo(ConcoursAnnouncementSource::class, 'source_id');
    }

    public function revisions(): HasMany
    {
        return $this->hasMany(ConcoursDiscoveryRevision::class, 'discovery_id');
    }
}
