<?php

namespace tests\Unit\App\application\services;

use App\application\models\UserIdGenerator;
use App\application\services\RegisterUserService;
use App\domain\models\UserAccountEntity;
use App\domain\models\ValueObject\ValidEmailValue;
use PHPUnit\Framework\Attributes\Test;
use tests\Unit\UnitTestCase;

class RegisterUserService_Test extends UnitTestCase
{
    #[Test]
    public function registerOk(): void
    {
        // Setup
        $service = new RegisterUserService(
            userIdGenerator: $this->createConfiguredMock(UserIdGenerator::class, [
                '__invoke' => 'myUserId123',
            ])
        );

        // Execution
        $userAccount = $service->register(new ValidEmailValue('user@email.com'));

        // Expectations
        self::assertInstanceOf(UserAccountEntity::class, $userAccount);
        self::assertEquals('myUserId123', $userAccount->userId);
        self::assertEquals('user@email.com', $userAccount->email->value());
    }
}
