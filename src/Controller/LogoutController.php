<?php

namespace TsukiTerrace\MVC\Controller;

class LogoutController implements Controller
{
    public function proccessRequest(): void
    {
        session_destroy();
        header('Location: /login');
    }
}