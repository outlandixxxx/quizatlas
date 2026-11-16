<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VideoSetQuestion extends Model
{
    protected $fillable = [
        'video_set_id',
        'question_id',
        'question_order',
        'selection_score',
        'selection_metadata',
    ];

    protected function casts(): array
    {
        return [
            'video_set_id' => 'integer',
            'question_id' => 'integer',
            'question_order' => 'integer',
            'selection_score' => 'decimal:2',
            'selection_metadata' => 'array',
        ];
    }

    public function videoSet(): BelongsTo
    {
        return $this->belongsTo(VideoSet::class);
    }

    public function scopeRestrictsVideoReuse(Builder $query, ?string $template = null): Builder
    {
        return $query->whereNull('selection_metadata->quiz_video_usage_reset')
            ->whereNull('selection_metadata->quiz_video_usage_release')
            ->where(fn (Builder $q) => $q->whereNull('selection_metadata->quiz_video_usage_lifecycle')
                ->orWhere('selection_metadata->quiz_video_usage_lifecycle', '!=', 'generation'))
            ->when($template !== null, fn (Builder $q) => $q->where(fn (Builder $scoped) =>
                $scoped->whereNull('selection_metadata->quiz_video_usage_templates')
                    ->orWhereJsonContains('selection_metadata->quiz_video_usage_templates', $template)));
    }

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }
}
