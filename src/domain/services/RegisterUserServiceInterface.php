<?php

namespace App\domain\services;

use App\domain\models\UserAccountEntity;

interface RegisterUserServiceInterface
{
    public function register(string $email): UserAccountEntity;
}
