<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ConcoursAnnouncementSource extends Model
{
    protected $guarded = ['id'];

    public function discoveries(): HasMany
    {
        return $this->hasMany(ConcoursDiscovery::class, 'source_id');
    }

    protected function casts(): array
    {
        return ['enabled' => 'boolean', 'version' => 'integer', 'check_interval_minutes' => 'integer',
            'permission_checked_at' => 'immutable_datetime', 'last_attempt_at' => 'immutable_datetime', 'last_success_at' => 'immutable_datetime'];
    }
}
