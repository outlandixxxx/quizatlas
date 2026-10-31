<?php

namespace App\Models;

use App\Services\ConcoursDiscovery\WadifaInfoNormalizer;
use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ConcoursAnnouncement extends Model
{
    public const EDITORIAL_FIELDS = ['concours_id', 'institution_id', 'slug', 'title_fr', 'title_ar', 'description_fr', 'description_ar', 'eligibility_fr', 'eligibility_ar', 'required_documents_fr', 'required_documents_ar', 'specialties', 'regions', 'positions', 'official_publication_date', 'registration_opens_on', 'registration_deadline', 'examination_date', 'application_url', 'official_source_url', 'official_decision', 'session_year', 'official_pdf_id', 'official_pdf_sha256', 'replaces_announcement_id'];

    protected $fillable = self::EDITORIAL_FIELDS;

    protected $with = ['originRevision'];

    public function originRevision(): HasOne
    {
        return $this->hasOne(ConcoursAnnouncementRevision::class, 'announcement_id')->oldestOfMany();
    }

    public function getSourceAttributionAttribute(): ?array
    {
        $credit = $this->originRevision?->snapshot['source_attribution'] ?? null;

        // Immutable first-revision provenance; never accept a client-supplied link or licence.
        if (! is_array($credit) || ($credit['provider'] ?? null) !== WadifaInfoNormalizer::KEY
            || ! WadifaInfoNormalizer::articleUrl($credit['url'] ?? null)) {
            return null;
        }
        $result = WadifaInfoNormalizer::credit($credit['url']);
        $id = explode('/', parse_url($credit['url'], PHP_URL_PATH))[2] ?? null;
        if (WadifaInfoNormalizer::articleUrl($credit['url_ar'] ?? null, $id)) {
            $result['url_ar'] = $credit['url_ar'];
        }

        return $result;
    }

    protected function casts(): array
    {
        return ['specialties' => 'array', 'regions' => 'array', 'positions' => 'integer', 'version' => 'integer', 'session_year' => 'integer',
            'official_publication_date' => 'immutable_date:Y-m-d', 'registration_opens_on' => 'immutable_date:Y-m-d',
            'registration_deadline' => 'immutable_date:Y-m-d', 'examination_date' => 'immutable_date:Y-m-d',
            'verified_at' => 'immutable_datetime', 'published_at' => 'immutable_datetime',
            'first_published_at' => 'immutable_datetime', 'archived_at' => 'immutable_datetime', 'withdrawn_at' => 'immutable_datetime', 'superseded_at' => 'immutable_datetime', 'replaces_announcement_id' => 'integer'];
    }

    public function announcementStatus(): string
    {
        if ($this->superseded_at) {
            return 'superseded';
        }
        if ($this->publication_status === 'archived') {
            return 'archived';
        }
        $status = $this->registrationStatus();
        if (in_array($status, ['cancelled', 'postponed'], true)) {
            return $status;
        }
        if ($this->verification_status === 'verified' && $this->examination_date && $this->examination_date->toDateString() < self::today()) {
            return 'completed';
        }

        return $status === 'unknown' && $this->publication_status === 'published' ? 'published' : $status;
    }

    public function concours(): BelongsTo
    {
        return $this->belongsTo(Concours::class, 'concours_id');
    }

    public function institution(): BelongsTo
    {
        return $this->belongsTo(ConcoursInstitution::class, 'institution_id');
    }

    public function revisions(): HasMany
    {
        return $this->hasMany(ConcoursAnnouncementRevision::class, 'announcement_id');
    }

    public function preparationOptions(): BelongsToMany
    {
        return $this->belongsToMany(ConcoursPreparationOption::class, 'concours_announcement_preparation_option', 'announcement_id', 'preparation_option_id');
    }

    public function officialPdf(): BelongsTo
    {
        return $this->belongsTo(ExamPdf::class, 'official_pdf_id');
    }

    public function scopeVisible(Builder $query): Builder
    {
        return $query->where('publication_status', 'published')->where('verification_status', 'verified')
            ->whereNotNull('verified_at')->whereNotNull('verified_by')
            ->where(fn ($q) => $q->whereNotNull('official_source_url')->orWhereNotNull('official_pdf_id'))
            ->whereHas('concours', fn ($q) => $q->visible())
            ->where(fn ($q) => $q->whereNull('institution_id')->orWhereHas('institution', fn ($i) => $i->where('is_active', true)));
    }

    public static function today(): string
    {
        return CarbonImmutable::now('Africa/Casablanca')->toDateString();
    }

    /** Calendar-day precision; a deadline stays open for the entire stated Moroccan date. */
    public function registrationStatus(): string
    {
        if ($this->verification_status !== 'verified') {
            return 'unknown';
        }
        if ($this->official_decision) {
            return $this->official_decision;
        }
        $today = self::today();
        if ($this->registration_deadline && $this->registration_deadline->toDateString() < $today) {
            return 'closed';
        }
        if ($this->registration_opens_on && $this->registration_opens_on->toDateString() > $today) {
            return 'upcoming';
        }
        // An absent opening date is not evidence that registration has opened.
        if ($this->registration_opens_on && $this->registration_deadline) {
            return 'open';
        }

        return 'unknown';
    }

    public function scopeRegistration(Builder $query, string $status): Builder
    {
        $today = self::today();

        return $query->where('verification_status', 'verified')->whereNull('official_decision')
            ->when($status === 'closed', fn ($q) => $q->where('registration_deadline', '<', $today))
            ->when($status === 'upcoming', fn ($q) => $q->where('registration_opens_on', '>', $today))
            ->when($status === 'open', fn ($q) => $q->where('registration_opens_on', '<=', $today)->where('registration_deadline', '>=', $today));
    }
}
