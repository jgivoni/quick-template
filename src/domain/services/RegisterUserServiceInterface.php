<?php

namespace App\domain\services;

use App\domain\models\UserAccountEntity;
use App\domain\models\ValueObject\ValidEmailValue;

interface RegisterUserServiceInterface
{
    public function register(ValidEmailValue $email): UserAccountEntity;
}
