<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class VideoSet extends Model
{
    protected $fillable = [
        'video_batch_id',
        'subject_id',
        'video_number',
        'title',
        'status',
        'settings',
    ];

    protected function casts(): array
    {
        return [
            'video_number' => 'integer',
            'settings' => 'array',
        ];
    }

    public function videoBatch(): BelongsTo
    {
        return $this->belongsTo(VideoBatch::class);
    }

    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }

    public function videoSetQuestions(): HasMany
    {
        return $this->hasMany(VideoSetQuestion::class)
            ->orderBy('question_order');
    }
}