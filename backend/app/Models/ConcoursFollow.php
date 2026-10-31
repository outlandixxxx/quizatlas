<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ConcoursFollow extends Model
{
    protected $guarded = ['id'];

    protected $dateFormat = 'Y-m-d H:i:s.u';

    protected function casts(): array
    {
        return ['active' => 'boolean', 'in_app' => 'boolean', 'browser_push' => 'boolean', 'announcements' => 'boolean',
            'updates' => 'boolean', 'deadlines' => 'boolean', 'reminder_days' => 'array', 'version' => 'integer', 'followed_at' => 'immutable_datetime'];
    }

    public function concours(): BelongsTo
    {
        return $this->belongsTo(Concours::class, 'concours_id');
    }

    public function preparationOptions(): BelongsToMany
    {
        return $this->belongsToMany(ConcoursPreparationOption::class, 'concours_follow_preparation_option', 'follow_id', 'preparation_option_id');
    }
}
