<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fact extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'major_id',
        'subject_id',
        'text_fr',
        'text_en',
        'text_ar',
        'source_url',
        'is_verified',
        'verified_at',
    ];

    protected function casts(): array
    {
        return [
            'major_id' => 'integer',
            'subject_id' => 'integer',
            'is_verified' => 'boolean',
            'verified_at' => 'datetime',
        ];
    }

    public function major(): BelongsTo
    {
        return $this->belongsTo(Major::class);
    }

    /** Optional historical association; ownership and selection use major_id. */
    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }

    public function socialPosts(): HasMany
    {
        return $this->hasMany(SocialPost::class);
    }
}
