<?php

namespace TsukiTerrace\MVC\Controller;

use TsukiTerrace\MVC\Entity\User;
use TsukiTerrace\MVC\Repository\UserRepository;

class RegisterUserController implements Controller
{
    public function __construct(private UserRepository $userRepository)
    {
        
    }
    public function proccessRequest(): void
    {
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        $hash = password_hash($password, PASSWORD_ARGON2ID);
        $user = new User($name, $email, $hash);

        $success = $this->userRepository->create($user);
        if($success===false){
            header('Location: login?success=0');
        } else{
            header('Location: login?success=1');
        }
    }
}