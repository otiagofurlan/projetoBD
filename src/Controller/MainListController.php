<?php

namespace TsukiTerrace\MVC\Controller;

use PDO;
use TsukiTerrace\MVC\Repository\ProductRepository;

class MainListController implements Controller
{
    public function __construct(private ProductRepository $productRepository)
    {
    }
    public function proccessRequest():void
    {
        if(!array_key_exists('logged', $_SESSION)){
            header('Location: /login');
            return;
        }
        $productList = $this->productRepository->read();
        require_once __DIR__ . '/../../views/main-list.php';
    }
}