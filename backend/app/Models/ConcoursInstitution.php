<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ConcoursInstitution extends Model
{
    protected $fillable = ['slug', 'name_fr', 'name_ar', 'website_url', 'is_active'];

    protected function casts(): array
    {
        return ['is_active' => 'boolean'];
    }

    public function concours(): HasMany
    {
        return $this->hasMany(Concours::class, 'institution_id');
    }
}
