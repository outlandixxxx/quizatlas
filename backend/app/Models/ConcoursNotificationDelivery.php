<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ConcoursNotificationDelivery extends Model
{
    public $timestamps = false;

    protected $guarded = ['id'];

    public function event(): BelongsTo
    {
        return $this->belongsTo(ConcoursNotificationEvent::class, 'event_id');
    }
}
