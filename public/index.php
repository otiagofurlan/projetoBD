<?php

use TsukiTerrace\MVC\Controller\{
    Controller,
    DeleteProductController,
    Error404Controller,
    MainListController,
    NewProductController,
    ProductFormController,
    ProductListController,
    UpdateProductController,
    RegisterUserFormController,
    RegisterUserController
};
use TsukiTerrace\MVC\Repository\ProductRepository;
use TsukiTerrace\MVC\Repository\UserRepository;

require_once __DIR__ . '/../vendor/autoload.php';

$pdo = new PDO("mysql:host=localhost;dbname=tsuki_terrace", "root", "");
$productRepository = new ProductRepository($pdo);
$userRepository = new UserRepository($pdo);


$routes = require_once __DIR__ . '/../config/routes.php';

$pathInfo = $_SERVER['PATH_INFO'] ?? '/';
$httpMethod = $_SERVER['REQUEST_METHOD'];


session_start();
$isLoginRoute = $pathInfo === '/login';
$isRegisterRoute = $pathInfo === '/register-user';
if(!array_key_exists('logged', $_SESSION) && !$isLoginRoute && !$isRegisterRoute){
    header('Location: /login');
    return;
}

$key = "$httpMethod|$pathInfo";
if(array_key_exists($key, $routes) && $pathInfo!=="/register-user"){

    $controllerClass = $routes["$httpMethod|$pathInfo"];
    
    /** @var Controller $controller */

    
    $controller = new $controllerClass($productRepository);
} else if(array_key_exists($key, $routes) && $pathInfo==="/register-user"){
    $controllerClass = $routes["$httpMethod|$pathInfo"];
    
    /** @var Controller $controller */
    
    
    $controller = new $controllerClass($userRepository);
} else{
    $controller = new Error404Controller();
}

$controller->proccessRequest();