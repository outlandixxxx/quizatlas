<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class VideoLibraryEntry extends Model
{
    public const FORMATS = ['short', 'long'];
    public const CATEGORIES = ['quiz', 'facts'];
    public const TEMPLATES = ['general', 'five-seconds', 'defi-du-jour', 'niveau-concours', 'language-day', 'facts-short', 'facts-long', 'quiz-long'];
    public const LANGUAGES = ['fr', 'ar', 'en'];
    public const STATUSES = ['draft', 'published'];

    protected $fillable = [
        'youtube_id', 'title', 'format', 'category', 'template', 'language', 'status',
        'published_at',
    ];

    protected function casts(): array
    {
        return ['published_at' => 'datetime'];
    }

    public function scopePublished(Builder $query): Builder
    {
        return $query->where('status', 'published')->whereNotNull('published_at')->where('published_at', '<=', now());
    }
}
