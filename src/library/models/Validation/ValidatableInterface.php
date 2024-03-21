<?php

namespace App\library\models\Validation;

use App\domain\models\Exception\InvalidValueException;

/**
 * Interface implemented by entities and value objects that may ensure validity.
 */
interface ValidatableInterface
{
    /**
     * @throws InvalidValueException
     */
    public function validate(): void;
}
