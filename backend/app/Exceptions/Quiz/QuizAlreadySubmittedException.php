<?php

namespace App\Exceptions\Quiz;

use App\Exceptions\ApiException;

class QuizAlreadySubmittedException extends ApiException
{
    public function __construct()
    {
        parent::__construct('Quiz attempt is no longer in progress.', 409);
    }
}
