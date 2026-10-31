<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConcoursPushSubscription extends Model
{
    protected $guarded = ['id'];

    protected $dateFormat = 'Y-m-d H:i:s.u';

    protected $hidden = ['endpoint', 'keys', 'endpoint_hash'];

    protected function casts(): array
    {
        return ['endpoint' => 'encrypted', 'keys' => 'encrypted:array', 'active' => 'boolean', 'consented_at' => 'immutable_datetime', 'generation' => 'integer'];
    }
}
