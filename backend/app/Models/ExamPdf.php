<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ExamPdf extends Model
{
    protected $fillable = [
        'title', 'subject_id','major_id', 'year', 'file_path',
        'file_size_bytes', 'page_count', 'questions_count', 'is_active',
    ];

    protected function casts(): array
    {
        return ['is_active' => 'boolean'];
    }

    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }

    public function major(): BelongsTo
    {
        return $this->belongsTo(Major::class);
    }

    public function fileSizeHuman(): string
    {
        $bytes = $this->file_size_bytes;
        if ($bytes >= 1024 * 1024) {
            return round($bytes / (1024 * 1024), 1) . ' MB';
        }
        return round($bytes / 1024, 1) . ' KB';
    }
}