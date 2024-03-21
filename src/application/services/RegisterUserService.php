<?php

namespace App\application\services;

use App\application\models\UserIdGenerator;
use App\domain\models\UserAccountEntity;
use App\domain\models\ValueObject\ValidEmailValue;
use App\domain\services\RegisterUserServiceInterface;

class RegisterUserService implements RegisterUserServiceInterface
{
    public static function createDefault(): RegisterUserService
    {
        return new RegisterUserService(
            userIdGenerator: new UserIdGenerator(),
        );
    }

    public function __construct(
        private readonly UserIdGenerator $userIdGenerator,
    ) {
    }

    public function register(ValidEmailValue $email): UserAccountEntity
    {
        return new UserAccountEntity(
            userId: $this->userIdGenerator->__invoke(),
            email: $email,
        );
    }
}
