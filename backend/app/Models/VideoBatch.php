<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class VideoBatch extends Model
{
    protected $fillable = [
        'major_id',
        'name',
        'status',
        'target_video_count',
        'questions_per_video',
        'difficulty_filter',
        'settings',
    ];

    protected function casts(): array
    {
        return [
            'target_video_count' => 'integer',
            'questions_per_video' => 'integer',
            'settings' => 'array',
        ];
    }

    public function major(): BelongsTo
    {
        return $this->belongsTo(Major::class);
    }

    public function videoSets(): HasMany
    {
        return $this->hasMany(VideoSet::class);
    }
}