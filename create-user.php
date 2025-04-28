<?php

$pdo = new PDO("mysql:host=localhost;dbname=tsuki_terrace", "root", "");

$name = $argv[1];
$email = $argv[2];
$password = $argv[3];
$hash = password_hash($password, PASSWORD_ARGON2ID);

$sql = 'INSERT INTO users (name, email, password) VALUES(?,?,?);';
$statement = $pdo->prepare($sql);
$statement->bindValue(1, $name);
$statement->bindValue(2, $email);
$statement->bindValue(3, $hash);
$statement->execute();