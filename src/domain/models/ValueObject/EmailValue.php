<?php

namespace App\domain\models\ValueObject;

use App\domain\models\Exception\InvalidEmailException as ExceptionInvalidEmailException;
use App\library\models\Validation\Validatable;

class EmailValue extends Validatable
{
    public function __construct(
        protected readonly string $value
    ) {
    }

    public function validate(): void
    {
        if (!filter_var($this->value, FILTER_VALIDATE_EMAIL)) {
            throw new ExceptionInvalidEmailException();
        }
    }

    public function value(): string
    {
        return $this->value;
    }
}
