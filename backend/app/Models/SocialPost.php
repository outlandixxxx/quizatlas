<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SocialPost extends Model
{
    public const FORMAT_QUESTION_DU_JOUR = 'question_du_jour';
    public const FORMAT_QUIZ_SHORT = 'quiz_short';
    public const FORMAT_FACEBOOK_GROUP = 'facebook_group';
    public const FORMAT_FACT_SHORT = 'fact_short';
    public const FORMAT_FACT_VIDEO = 'fact_video';

    public const QUESTION_FORMATS = [
        self::FORMAT_QUESTION_DU_JOUR,
        self::FORMAT_QUIZ_SHORT,
        self::FORMAT_FACEBOOK_GROUP,
    ];

    public const FACT_FORMATS = [
        self::FORMAT_FACT_SHORT,
        self::FORMAT_FACT_VIDEO,
    ];

    protected $fillable = [
        'post_date',
        'format',
        'subject_id',
        'question_id',
        'fact_id',
        'series_number',
        'position',
    ];

    protected function casts(): array
    {
        return [
            'post_date' => 'date',
            'subject_id' => 'integer',
            'question_id' => 'integer',
            'fact_id' => 'integer',
            'series_number' => 'integer',
            'position' => 'integer',
        ];
    }

    public static function allFormats(): array
    {
        return array_merge(self::QUESTION_FORMATS, self::FACT_FORMATS);
    }

    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }

    public function fact(): BelongsTo
    {
        return $this->belongsTo(Fact::class);
    }
}
