<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

// Shared concours vocabulary. Future resource types can reuse these options with their own pivot.
class ConcoursPreparationOption extends Model
{
    protected $fillable = ['name_fr', 'name_en', 'name_ar', 'parent_id', 'display_order', 'is_active'];

    protected function casts(): array
    {
        return ['concours_id' => 'integer', 'parent_id' => 'integer', 'display_order' => 'integer', 'is_active' => 'boolean'];
    }

    public function concours(): BelongsTo
    {
        return $this->belongsTo(Concours::class, 'concours_id');
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function pdfs(): BelongsToMany
    {
        return $this->belongsToMany(ExamPdf::class, 'exam_pdf_preparation_option', 'preparation_option_id', 'exam_pdf_id');
    }

    public function scopeAvailable(Builder $query): Builder
    {
        return $query->where('is_active', true)->where(fn ($q) => $q->whereNull('parent_id')
            ->orWhereHas('parent', fn ($parent) => $parent->where('is_active', true)));
    }
}
