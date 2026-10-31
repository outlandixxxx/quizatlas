<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Notification extends Model
{
    protected $fillable = ['user_id', 'type', 'data', 'read_at'];

    protected $casts = [
        'data' => 'array',
        'read_at' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function concoursDelivery(): HasOne
    {
        return $this->hasOne(ConcoursNotificationDelivery::class, 'notification_id');
    }

    public function scopeAvailable($query)
    {
        return $query->where(fn ($q) => $q->whereNotIn('type', ['concours_published', 'concours_updated', 'concours_deadline'])
            ->orWhereHas('concoursDelivery.event.announcement', fn ($a) => $a->visible()->whereNull('superseded_at')));
    }

    public function scopeUnread($query)
    {
        return $query->whereNull('read_at');
    }
}
