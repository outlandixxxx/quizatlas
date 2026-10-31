<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConcoursAnnouncementRevision extends Model
{
    public $timestamps = false;

    protected $guarded = ['id'];

    protected function casts(): array
    {
        return ['changes' => 'array', 'snapshot' => 'array', 'events' => 'array', 'verified_changes' => 'array', 'created_at' => 'immutable_datetime'];
    }
}
