<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ConcoursNotificationEvent extends Model
{
    public $timestamps = false;

    protected $guarded = ['id'];

    protected $dateFormat = 'Y-m-d H:i:s.u';

    protected function casts(): array
    {
        return ['snapshot' => 'array', 'occurred_at' => 'immutable_datetime', 'processed_at' => 'immutable_datetime'];
    }

    public function announcement(): BelongsTo
    {
        return $this->belongsTo(ConcoursAnnouncement::class, 'announcement_id');
    }
}
