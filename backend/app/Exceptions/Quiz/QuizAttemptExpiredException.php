<?php

namespace App\Exceptions\Quiz;

use App\Exceptions\ApiException;

class QuizAttemptExpiredException extends ApiException
{
    public function __construct()
    {
        parent::__construct('Quiz attempt has expired.', 409);
    }
}
