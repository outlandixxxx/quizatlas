<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Str;

class Quiz extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'subject_id',
        'title',
        'description',
        'duration',
        'passing_score',
        'total_marks',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
            'duration' => 'integer',
            'passing_score' => 'integer',
            'total_marks' => 'integer',
        ];
    }

    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }

    public function questions(): HasMany
    {
        return $this->hasMany(Question::class);
    }

    protected function title(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) => trim($value)
        );
    }

    public function quizAttempts()
{
    return $this->hasMany(QuizAttempt::class);
}
}