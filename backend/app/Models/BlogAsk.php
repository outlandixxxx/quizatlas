<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BlogAsk extends Model
{
    protected $fillable = ['author_id', 'major_id', 'subject_id', 'title', 'body'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function major(): BelongsTo
    {
        return $this->belongsTo(Major::class);
    }

    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }

    public function responses(): HasMany
    {
        return $this->hasMany(BlogResponse::class);
    }

    public function acceptedResponse(): HasMany
    {
        return $this->responses()->where('is_accepted', true);
    }
}