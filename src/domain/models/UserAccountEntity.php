<?php

namespace App\domain\models;

use App\domain\models\ValueObject\EmailValue;
use App\library\models\Validation\ValidInterface;

/**
 * Represents a valid user account entity.
 */
class UserAccountEntity
{
    public function __construct(
        public readonly string $userId,
        public readonly EmailValue&ValidInterface $email,
    ) {
    }
}
