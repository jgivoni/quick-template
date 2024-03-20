<?php

namespace App\application\models;

class UserIdGenerator
{
    public function __invoke(): string
    {
        return \uniqid();
    }
}
