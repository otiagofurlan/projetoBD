<?php

$pdo = new PDO("mysql:host=localhost;dbname=tsuki_terrace", "root", "");

$pdo->exec('ALTER TABLE products ADD COLUMN image VARCHAR(255)');