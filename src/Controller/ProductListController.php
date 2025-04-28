<?php

namespace TsukiTerrace\MVC\Controller;

use PDO;
use TsukiTerrace\MVC\Repository\ProductRepository;

class ProductListController implements Controller
{
    public function __construct(private ProductRepository $productRepository)
    {
    }
    public function proccessRequest(): void
    {
        $productList = $this->productRepository->read();
        require_once __DIR__ . '/../../views/product-list.php';
    }
}