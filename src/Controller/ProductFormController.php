<?php
namespace TsukiTerrace\MVC\Controller;

use TsukiTerrace\MVC\Repository\ProductRepository;

class ProductFormController implements Controller
{
    public function __construct(private ProductRepository $productRepository)
    {
    }
    public function proccessRequest(): void
    {
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    $product = null;
    if($id!==false && $id !== null){
        $product = $this->productRepository->find($id);
    }
    require_once __DIR__ . '/../../views/product-form.php';
    }
}