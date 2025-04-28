<?php

namespace TsukiTerrace\MVC\Controller;


class RegisterUserFormController implements Controller
{
    public function proccessRequest(): void
    {
        require_once __DIR__  . '/../../views/register-user.php';
    }
}