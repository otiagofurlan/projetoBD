<?php
namespace TsukiTerrace\MVC\Controller;

use PDO;

class LoginController implements Controller
{
    private PDO $pdo;
    public function __construct()
    {
        $this->pdo = new PDO("mysql:host=localhost;dbname=tsuki_terrace", "root", "");
    }
    public function proccessRequest(): void
    {
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, 'password');
        $sql = 'SELECT * FROM users WHERE email = ?';
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $email);
        $statement->execute();

        $userData = $statement->fetch(PDO::FETCH_ASSOC);
        $correctPassword = password_verify($password, $userData['password']);

        if($correctPassword){
            $_SESSION['logged'] = true;
            header("Location: /");
        } else{
            header("Location: /login?success=0");
        }
    }
}