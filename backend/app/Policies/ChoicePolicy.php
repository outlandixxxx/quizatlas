<?php

namespace App\Policies;

use App\Models\Choice;
use App\Models\User;

class ChoicePolicy
{
    public function update(User $user, Choice $choice): bool
    {
        return $user->isAdmin() || $choice->question->quiz->owner_id === $user->id;
    }

    public function delete(User $user, Choice $choice): bool
    {
        return $this->update($user, $choice);
    }
}