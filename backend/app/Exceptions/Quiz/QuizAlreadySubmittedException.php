<?php

namespace App\Exceptions\Quiz;

use Exception;

class QuizAlreadySubmittedException extends Exception
{
    protected $message = 'Quiz attempt has already been submitted.';
}