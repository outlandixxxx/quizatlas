<?php

namespace App\Exceptions\Quiz;

use Exception;

class InvalidQuizAnswerException extends Exception
{
    protected $message = 'The submitted answer is invalid.';
}