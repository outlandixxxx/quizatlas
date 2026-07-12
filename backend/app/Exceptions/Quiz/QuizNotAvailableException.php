<?php

namespace App\Exceptions\Quiz;

use Exception;

class QuizNotAvailableException extends Exception
{
    protected $message = 'This quiz is not available.';
}