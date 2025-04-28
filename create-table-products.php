<?php
$pdo = new PDO("mysql:host=localhost;dbname=tsuki_terrace", "root", "");
$pdo->exec('CREATE TABLE products(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    description TEXT,
    price FLOAT
    );');