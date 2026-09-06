<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BlogResponse extends Model
{
    protected $fillable = ['blog_ask_id', 'author_id', 'body', 'is_accepted'];

    protected $casts = ['is_accepted' => 'boolean'];

    public function ask(): BelongsTo
    {
        return $this->belongsTo(BlogAsk::class, 'blog_ask_id');
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}