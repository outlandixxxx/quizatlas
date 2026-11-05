<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContentUsageOperation extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded = [];

    protected function casts(): array
    {
        return ['parents' => 'array', 'output' => 'array', 'attempt' => 'integer', 'actor_id' => 'integer',
            'reserved_at' => 'immutable_datetime', 'expires_at' => 'immutable_datetime',
            'completed_at' => 'immutable_datetime', 'released_at' => 'immutable_datetime'];
    }

    public function items() { return $this->hasMany(ContentUsageItem::class, 'operation_id'); }
}
