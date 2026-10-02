<?php

namespace App\domain\models\Exception;

class InvalidEmailException extends InvalidValueException
{
    public function __construct(string $message = 'Invalid email', int $code = 0, ?\Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
