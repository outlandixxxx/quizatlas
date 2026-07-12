<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Choice extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'question_id',
        'choice_text',
        'is_correct',
        'order',
    ];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function userAnswers()
{
    return $this->hasMany(UserAnswer::class);
}
}