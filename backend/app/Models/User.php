<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use PHPOpenSourceSaver\JWTAuth\Contracts\JWTSubject;
use App\Notifications\ResetPasswordNotification;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'avatar_url',
        'university',
        'major',
        'academic_year',
        'target_exam_date',
        'bio',
        'preferences',
        'xp',
        'current_streak',
        'last_active_date',
        'country',
        'is_premium',
        'premium_expires_at',
        'provider',
        'provider_id',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'preferences' => 'array',
            'xp' => 'integer',
            'current_streak' => 'integer',
            'last_active_date' => 'date',
            'is_premium' => 'boolean',
            'premium_expires_at' => 'datetime',
        ];
    }

    /**
     * JWT Identifier.
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * JWT Custom Claims.
     */
    public function getJWTCustomClaims(): array
    {
        return [
            'role' => $this->role,
            'email' => $this->email,
            'name' => $this->name,
        ];
    }

    /**
     * Check if user is admin.
     */
    public function isAdmin(): bool
    {
        return $this->role === 'admin';
    }

    public function isManager(): bool
    {
        return $this->role === 'manager';
    }

    /**
     * Check if user is normal user.
     */
    public function isUser(): bool
    {
        return $this->role === 'user';
    }

    public function hasRole(array $roles): bool
    {
        return in_array($this->role, $roles, true);
    }

    public function isPremium(): bool
    {
        if (!$this->is_premium) {
            return false;
        }

        return $this->premium_expires_at === null || $this->premium_expires_at->isFuture();
    }

    public function quizAttempts()
    {
        return $this->hasMany(QuizAttempt::class);
    }

    public function userAchievements(): HasMany
    {
        return $this->hasMany(UserAchievement::class);
    }

    public function xpTransactions(): HasMany
    {
        return $this->hasMany(XpTransaction::class);
    }

    public function sendPasswordResetNotification($token): void
    {
        $this->notify(
            new ResetPasswordNotification($token)
        );
    }

    /**
     * XP required to go from $level to $level+1.
     * Grows non-linearly so higher levels take meaningfully longer.
     */
    private static function xpRequiredForLevel(int $level): int
    {
        return (int) round(80 * ($level ** 1.6));
    }

    public function level(): int
    {
        $remaining = $this->xp ?? 0;
        $level = 1;

        while ($remaining >= self::xpRequiredForLevel($level)) {
            $remaining -= self::xpRequiredForLevel($level);
            $level++;
            if ($level > 500) break; // safety cap
        }

        return $level;
    }

    public function xpForNextLevel(): int
    {
        return self::xpRequiredForLevel($this->level());
    }

    public function xpIntoCurrentLevel(): int
    {
        $remaining = $this->xp ?? 0;
        $level = 1;

        while ($remaining >= self::xpRequiredForLevel($level)) {
            $remaining -= self::xpRequiredForLevel($level);
            $level++;
        }

        return $remaining;
    }

    /**
     * Turn the stored avatar_url (which may be a relative storage path for
     * uploads, or a frontend asset path for presets) into a usable URL.
     */
    public function avatarFullUrl(): ?string
    {
        if (!$this->avatar_url) {
            return null;
        }

        // Uploaded avatars are stored as "avatars/xxxx.ext" on the public disk
        if (str_starts_with($this->avatar_url, 'avatars/')) {
            return Storage::disk('public')->url($this->avatar_url);
        }

        // Preset avatars are frontend static assets — already a usable path
        return $this->avatar_url;
    }

    public static function levelThresholds(int $maxLevel = 6): array
    {
        $thresholds = [];
        $cumulative = 0;

        for ($level = 1; $level <= $maxLevel; $level++) {
            $required = self::xpRequiredForLevel($level);
            $thresholds[] = [
                'level' => $level,
                'xp_start' => $cumulative,
                'xp_end' => $cumulative + $required - 1,
            ];
            $cumulative += $required;
        }

        return $thresholds;
    }
}