<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ConcoursCategory extends Model
{
    protected $fillable = ['parent_id', 'slug', 'name_fr', 'name_ar', 'description_fr', 'description_ar', 'display_order', 'is_active'];

    protected function casts(): array
    {
        return ['is_active' => 'boolean', 'display_order' => 'integer'];
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function concours(): HasMany
    {
        return $this->hasMany(Concours::class, 'category_id');
    }

    /** An inactive ancestor hides its entire subtree. Cycles fail closed. */
    public static function visibleIds(): array
    {
        $nodes = self::all(['id', 'parent_id', 'is_active'])->keyBy('id');

        return $nodes->filter(function ($node) use ($nodes) {
            $seen = [];
            while ($node) {
                if (! $node->is_active || isset($seen[$node->id])) {
                    return false;
                }
                $seen[$node->id] = true;
                if ($node->parent_id === null) {
                    return true;
                }
                $node = $nodes->get($node->parent_id);
            }

            return false;
        })->keys()->all();
    }

    public function scopeVisible(Builder $query): Builder
    {
        return $query->whereIn('id', self::visibleIds());
    }
}
