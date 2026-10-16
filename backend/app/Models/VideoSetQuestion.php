<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
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

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }
}