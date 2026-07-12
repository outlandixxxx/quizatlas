<?php

namespace App\Exceptions\Quiz;

use Exception;

class QuizAttemptExpiredException extends Exception
{
    protected $message = 'Quiz attempt has expired.';
}