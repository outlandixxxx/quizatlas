<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;

class QuizAttempt extends Model
{
    use HasFactory;

protected $fillable = [
    'user_id',
    'quiz_id',
    'mode',        
    'status',
    'started_at',
    'submitted_at',
    'score',
    'percentage',
    'passed',
    'source',
    'title',
    'passing_score',
];

    protected $casts = [
        'started_at' => 'datetime',
        'submitted_at' => 'datetime',
        'passed' => 'boolean',
        'percentage' => 'decimal:2',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function deadline(): ?Carbon
    {
        return $this->mode === 'exam' && $this->started_at && $this->quiz
            ? $this->started_at->copy()->addMinutes($this->quiz->duration)
            : null;
    }

    public function isDue(): bool
    {
        return $this->status === 'in_progress' && ($this->deadline()?->lessThanOrEqualTo(now()) ?? false);
    }

    public function scopeCompleted(Builder $query): Builder
    {
        return $query->whereIn('quiz_attempts.status', ['submitted', 'expired'])
            ->whereNotNull('quiz_attempts.submitted_at');
    }

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    public function answers()
    {
        return $this->hasMany(UserAnswer::class);
    }

    public function userAnswers()
{
    return $this->hasMany(UserAnswer::class);
}
}
