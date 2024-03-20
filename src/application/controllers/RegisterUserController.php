<?php

namespace App\application\controllers;

use App\application\services\RegisterUserService;
use App\domain\services\RegisterUserServiceInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class RegisterUserController
{
    public static function createDefault(): RegisterUserController
    {
        return new RegisterUserController(
            registerUserService: RegisterUserService::createDefault(),
        );
    }

    public function __construct(
        private readonly RegisterUserServiceInterface $registerUserService,
    ) {
    }

    public function __invoke(Request $request): Response
    {
        $email = $request->get('email');

        $user = $this->registerUserService->register($email);

        return new Response('OK. New User ID: ' . $user->userId);
    }
}
