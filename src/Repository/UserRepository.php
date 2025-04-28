<?php

namespace TsukiTerrace\MVC\Repository;

use PDO;
use TsukiTerrace\MVC\Entity\User;

class UserRepository
{
    public function __construct(private PDO $pdo)
    {
    }
    public function create(User $user): bool
    {
        $sql = 'INSERT INTO users (name, email, password) VALUES (?,?,?)';
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $user->getName());
        $statement->bindValue(2, $user->getEmail());
        $statement->bindValue(3, $user->getPassword());
        
        $result = $statement->execute();

        return $result;
    }
}