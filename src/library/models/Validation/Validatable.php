<?php

namespace App\library\models\Validation;

use App\domain\models\Exception\InvalidValueException;

abstract class Validatable implements ValidatableInterface
{
    public function isValid(): bool
    {
        try {
            $this->validate();
        } catch (InvalidValueException) {
            return \false;
        }

        return true;
    }
}
