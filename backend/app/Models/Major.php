<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Major extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'is_active',
        'icon',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }

    protected static function booted(): void
    {
        static::creating(function (Major $major) {
            if (empty($major->slug)) {
                $major->slug = Str::slug($major->name);
            }
        });
    }

    protected function name(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) => trim($value)
        );
    }

    public function subjects(): HasMany
{
    return $this->hasMany(Subject::class);
}
}