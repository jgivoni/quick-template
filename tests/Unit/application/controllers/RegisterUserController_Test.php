<?php

namespace tests\Unit\application\controllers;

use App\application\controllers\RegisterUserController;
use App\domain\models\UserAccountEntity;
use App\domain\services\RegisterUserServiceInterface;
use PHPUnit\Framework\Attributes\Test;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use tests\Unit\UnitTestCase;

class RegisterUserController_Test extends UnitTestCase
{
    #[Test]
    public function invokeOk(): void
    {
        // Setup
        $controller = new RegisterUserController(
            registerUserService: $this->createConfiguredMock(RegisterUserServiceInterface::class, [
                'register' => new UserAccountEntity(
                    userId: '123',
                    email: 'user@email.com',
                ),
            ]),
        );

        // Execution
        $response = $controller(new Request(['email' => 'user@email.com']));

        // Evaluation / expectations
        self::assertInstanceOf(Response::class, $response);
        self::assertEquals('OK. New User ID: 123', $response->getContent());
    }

    #[Test]
    public function invalidEmailThrowsException(): void
    {
        // Setup
        $controller = new RegisterUserController(
            registerUserService: $this->createMock(RegisterUserServiceInterface::class),
        );

        // Evaluation / expectations
        $this->expectException(BadRequestException::class);

        // Execution
        $controller(new Request(['email' => 'invalid_email.com']));
    }
}
