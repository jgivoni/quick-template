<?php

namespace App\domain\models\Exception;

abstract class InvalidValueException extends \RuntimeException
{
    public function __construct(string $message = 'Invalid value', int $code = 0, ?\Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
