<?php

namespace App\Exceptions\Quiz;

use Exception;

class QuizAlreadyStartedException extends Exception
{
    protected $message = 'You already have an active attempt for this quiz.';
}