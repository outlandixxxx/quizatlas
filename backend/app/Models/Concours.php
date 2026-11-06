<?php

namespace App\Models;

use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class Concours extends Model
{
    protected $table = 'concours';

    protected $fillable = ['category_id', 'institution_id', 'slug', 'name_fr', 'name_ar', 'description_fr', 'description_ar', 'type', 'exam_formats', 'is_active', 'display_order', 'session_year', 'session_policy', 'session_rollover_on', 'session_year_override', 'advice_fr', 'advice_ar'];

    protected function casts(): array
    {
        return ['is_active' => 'boolean', 'display_order' => 'integer', 'exam_formats' => 'array', 'session_year' => 'integer', 'session_year_override' => 'integer', 'session_rollover_on' => 'immutable_date:Y-m-d', 'official_announcement_id' => 'integer'];
    }

    public function displayedSessionYear(): ?int
    {
        if ($this->session_year_override !== null) {
            return $this->session_year_override;
        }
        if ($this->session_year !== null) {
            $year = $this->session_year;
            $boundary = $this->session_rollover_on;
            if ($this->session_policy === 'annual' && $boundary) {
                $today = CarbonImmutable::parse(ConcoursAnnouncement::today(), 'Africa/Casablanca');
                if ($today->toDateString() >= $boundary->toDateString()) {
                    $elapsed = $today->year - $boundary->year;
                    $year += $elapsed + ($today->format('m-d') >= $boundary->format('m-d') ? 1 : 0);
                }
            }

            return min(2100, $year);
        }

        // Legacy compatibility uses only a declared, verified published session.
        // Registration dates and the current calendar year are never evidence.
        return $this->currentCandidates()->concat($this->archivedCandidates())->max('session_year');
    }

    public function currentCandidates(): Collection
    {
        return $this->relationLoaded('sessionAnnouncements') ? $this->sessionAnnouncements : $this->sessionAnnouncements()->get();
    }

    public function sessionAnnouncements(): HasMany
    {
        return $this->announcements()->visible()->whereNull('superseded_at')
            ->with(['institution', 'officialPdf', 'preparationOptions',
                'officialPdfs' => fn ($pdfs) => $pdfs->publicDocument()->with('subject')->orderBy('id')])->orderByRaw('official_publication_date IS NULL')
            ->orderByDesc('official_publication_date')->orderByDesc('first_published_at')->orderByDesc('id');
    }

    public function archivedCandidates(): Collection
    {
        return $this->relationLoaded('archivedSessionAnnouncements') ? $this->archivedSessionAnnouncements : $this->archivedSessionAnnouncements()->get();
    }

    public function archivedSessionAnnouncements(): HasMany
    {
        // Expose only an archived-state flag, never an archived notice or PDF DTO.
        return $this->announcements()->select(['id', 'concours_id', 'session_year'])
            ->where('publication_status', 'archived')->where('verification_status', 'verified')
            ->whereNotNull('first_published_at')->whereNotNull('verified_at')->whereNotNull('verified_by')
            ->whereNull('superseded_at')
            ->where(fn ($q) => $q->whereNull('institution_id')->orWhereHas('institution', fn ($i) => $i->where('is_active', true)));
    }

    public function validateSessionPolicy(): void
    {
        $rules = [
            'session_year' => ['nullable', 'integer', 'between:1990,2100'],
            'session_year_override' => ['nullable', 'integer', 'between:1990,2100'],
            'session_policy' => ['required', 'in:manual,annual'],
            'session_rollover_on' => ['nullable', 'date_format:Y-m-d'],
        ];
        if ($this->session_policy === 'annual') {
            $rules['session_year'][] = 'required';
            $rules['session_rollover_on'][] = 'required';
        }
        Validator::make([
            'session_year' => $this->session_year, 'session_policy' => $this->session_policy ?? 'manual',
            'session_year_override' => $this->session_year_override,
            'session_rollover_on' => $this->session_rollover_on?->toDateString(),
        ], $rules)->validate();
        if ($this->session_policy === 'annual' && $this->session_rollover_on?->format('m-d') === '02-29') {
            throw ValidationException::withMessages(['session_rollover_on' => 'Choose a date that occurs every year.']);
        }
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(ConcoursCategory::class, 'category_id');
    }

    public function institution(): BelongsTo
    {
        return $this->belongsTo(ConcoursInstitution::class, 'institution_id');
    }

    public function announcements(): HasMany
    {
        return $this->hasMany(ConcoursAnnouncement::class, 'concours_id');
    }

    public function resources(): HasMany
    {
        return $this->hasMany(ExamPdf::class, 'concours_id');
    }

    public function linkedResources(): BelongsToMany
    {
        return $this->belongsToMany(ExamPdf::class, 'concours_exam_pdf_links', 'concours_id', 'exam_pdf_id')->withTimestamps();
    }

    public function preparationOptions(): HasMany
    {
        return $this->hasMany(ConcoursPreparationOption::class, 'concours_id')->orderBy('display_order')->orderBy('id');
    }

    public function preparationMajors(): BelongsToMany
    {
        return $this->belongsToMany(Major::class, 'concours_major_links', 'concours_id', 'major_id')
            ->withPivot(['id', 'version'])->withTimestamps();
    }

    public function preparationQuizzes(): BelongsToMany
    {
        return $this->belongsToMany(Quiz::class, 'concours_quiz_links', 'concours_id', 'quiz_id')->withPivot(['id', 'version'])->withTimestamps();
    }

    public function preparationSubjects(): BelongsToMany
    {
        return $this->belongsToMany(Subject::class, 'concours_subject_links', 'concours_id', 'subject_id')->withPivot(['id', 'version'])->withTimestamps();
    }

    public function scopeVisible(Builder $query): Builder
    {
        return $query->where('is_active', true)
            ->whereIn('category_id', ConcoursCategory::visibleIds())
            ->where(fn ($q) => $q->whereNull('institution_id')
                ->orWhereHas('institution', fn ($institution) => $institution->where('is_active', true)));
    }
}
