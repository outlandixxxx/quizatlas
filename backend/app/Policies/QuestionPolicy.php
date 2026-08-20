<?php

namespace App\Policies;

use App\Models\Question;
use App\Models\User;

class QuestionPolicy
{
    public function update(User $user, Question $question): bool
    {
        return $user->isAdmin() || $question->quiz->owner_id === $user->id;
    }

    public function delete(User $user, Question $question): bool
    {
        return $this->update($user, $question);
    }
}