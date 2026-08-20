<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class QuizShareEnrollment extends Model
{
public $timestamps = false;
    protected $fillable = ['quiz_share_id', 'student_id', 'joined_at'];

    protected function casts(): array
    {
        return ['joined_at' => 'datetime'];
    }

    public function quizShare(): BelongsTo
    {
        return $this->belongsTo(QuizShare::class);
    }

    public function student(): BelongsTo
    {
        return $this->belongsTo(User::class, 'student_id');
    }
}