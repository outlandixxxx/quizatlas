<?php

namespace App\Exceptions\Quiz;

use App\Exceptions\ApiException;

class InvalidQuizAnswerException extends ApiException
{
    public function __construct()
    {
        parent::__construct('The submitted answer is invalid.', 422);
    }
}
