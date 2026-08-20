<?php

namespace App\Http\Resources\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
  public function toArray(Request $request): array
{
    return [
        'id' => $this->id,
        'name' => $this->name,
        'email' => $this->email,
        'role' => $this->role,
        'is_premium' => $this->isPremium(),
        'xp' => $this->xp,
        'level' => $this->level(),
        'xp_into_current_level' => $this->xpIntoCurrentLevel(),
        'xp_for_next_level' => $this->xpForNextLevel(),
        'current_streak' => $this->current_streak,
        'created_at' => $this->created_at,
        'updated_at' => $this->updated_at,
    ];
}
}