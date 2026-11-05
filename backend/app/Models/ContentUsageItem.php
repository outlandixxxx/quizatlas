<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContentUsageItem extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected function casts(): array { return ['identity_keys' => 'array', 'source_id' => 'integer', 'completed_at' => 'immutable_datetime']; }
    public function operation() { return $this->belongsTo(ContentUsageOperation::class, 'operation_id'); }
}
