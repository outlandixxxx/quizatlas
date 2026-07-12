<?php

namespace App\Exceptions;

use Exception;

abstract class ApiException extends Exception
{
    protected int $status;

    public function __construct(
        string $message = 'An error occurred.',
        int $status = 400
    ) {
        parent::__construct($message);

        $this->status = $status;
    }

    public function status(): int
    {
        return $this->status;
    }
}