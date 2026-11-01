<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

class ExamPdf extends Model
{
    public function resolveRouteBinding($value, $field = null)
    {
        if ($field === null || $field === 'id') {
            abort_unless(filter_var($value, FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]]) !== false, 404);
        }

        return parent::resolveRouteBinding($value, $field);
    }

    protected $fillable = [
        'title', 'subject_id', 'major_id', 'year', 'file_path',
        'file_size_bytes', 'page_count', 'questions_count', 'is_active',
        'document_type', 'concours_id', 'announcement_id', 'specialty', 'source_url',
        'attribution', 'sha256', 'distribution_permission', 'distribution_confirmed_at', 'approved_at', 'approved_by',
        'corrects_exam_pdf_id', 'download_allowed',
    ];

    protected function casts(): array
    {
        return ['version' => 'integer', 'is_active' => 'boolean', 'download_allowed' => 'boolean', 'year' => 'integer', 'corrects_exam_pdf_id' => 'integer', 'concours_id' => 'integer', 'approved_at' => 'immutable_datetime', 'distribution_confirmed_at' => 'immutable_datetime'];
    }

    public function linkedConcours(): BelongsToMany
    {
        return $this->belongsToMany(Concours::class, 'concours_exam_pdf_links', 'exam_pdf_id', 'concours_id')->withTimestamps();
    }

    public function correctedExam(): BelongsTo
    {
        return $this->belongsTo(self::class, 'corrects_exam_pdf_id');
    }

    public function corrections(): HasMany
    {
        return $this->hasMany(self::class, 'corrects_exam_pdf_id');
    }

    public function preparationOptions(): BelongsToMany
    {
        return $this->belongsToMany(ConcoursPreparationOption::class, 'exam_pdf_preparation_option', 'exam_pdf_id', 'preparation_option_id')->orderBy('concours_preparation_options.id');
    }

    public function availableFile(): bool
    {
        $path = $this->file_path;
        if (! is_string($path) || $path === '' || str_contains($path, '\\') || str_contains($path, "\0") || str_starts_with($path, '/') || preg_match('/(^|\/)\.\.?($|\/)|^[a-zA-Z]:/', $path)) {
            return false;
        }
        $disk = Storage::disk('exam_pdfs');
        $root = realpath($disk->path(''));
        $file = realpath($disk->path($path));

        return $root !== false && $file !== false && str_starts_with($file, $root.DIRECTORY_SEPARATOR) && is_file($file) && is_readable($file);
    }

    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }

    public function major(): BelongsTo
    {
        return $this->belongsTo(Major::class);
    }

    public function concours(): BelongsTo
    {
        return $this->belongsTo(Concours::class, 'concours_id');
    }

    public function announcement(): BelongsTo
    {
        return $this->belongsTo(ConcoursAnnouncement::class, 'announcement_id');
    }

    public function scopePublicDocument(Builder $query): Builder
    {
        return $query->where('is_active', true)->whereNotNull('approved_at')->whereNotNull('approved_by')
            ->whereNotNull('distribution_permission')->whereNotNull('distribution_confirmed_at')
            ->where(fn ($q) => $q->whereHas('concours', fn ($owner) => $owner->visible())->orWhereHas('linkedConcours', fn ($linked) => $linked->visible()))
            ->where(fn ($q) => $q->where(fn ($q) => $q->where('document_type', 'official_announcement')
                ->whereHas('announcement', fn ($a) => $a->visible()->whereColumn('concours_announcements.concours_id', 'exam_pdfs.concours_id')))
                ->orWhere(fn ($q) => $q->whereIn('document_type', ['previous_exam', 'correction', 'summary', 'preparation_guide'])->whereNull('announcement_id')
                    ->where(fn ($q) => $q->whereNull('corrects_exam_pdf_id')->orWhereExists(fn ($exam) => $exam->selectRaw('1')->from('exam_pdfs as original_exam')->where('exam_pdfs.document_type', 'correction')
                        ->whereColumn('original_exam.id', 'exam_pdfs.corrects_exam_pdf_id')
                        ->whereColumn('original_exam.concours_id', 'exam_pdfs.concours_id')
                        ->where(fn ($years) => $years->whereColumn('original_exam.year', 'exam_pdfs.year')->orWhere(fn ($nulls) => $nulls->whereNull('original_exam.year')->whereNull('exam_pdfs.year')))
                        ->where('original_exam.document_type', 'previous_exam')->whereNull('original_exam.announcement_id')
                        ->where('original_exam.is_active', true)->whereNotNull('original_exam.approved_at')->whereNotNull('original_exam.approved_by')
                        ->whereNotNull('original_exam.distribution_permission')->whereNotNull('original_exam.distribution_confirmed_at')))));
    }

    public function fileSizeHuman(): string
    {
        $bytes = $this->file_size_bytes;
        if ($bytes >= 1024 * 1024) {
            return round($bytes / (1024 * 1024), 1).' MB';
        }

        return round($bytes / 1024, 1).' KB';
    }
}
