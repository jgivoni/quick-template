<?php

namespace App\domain\models;

/**
 * Represents a valid user account entity.
 */
class UserAccountEntity
{
    public function __construct(
        public readonly string $userId,
        public readonly string $email,
    ) {
    }
}
