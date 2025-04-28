<?php
namespace TsukiTerrace\MVC\Controller;

use TsukiTerrace\MVC\Repository\ProductRepository;

class DeleteProductController implements Controller
{
    public function __construct(private ProductRepository $productRepository)
    {
    }
    public function proccessRequest():void
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        if($id===null || $id ===false){
            header('Location: /?success=0');
            return;
        }
        $success = $this->productRepository->delete($id);
        if($success === false){
            header('Location: admin?success=0');
        } else{
            header('Location: admin?success=1');
        }
    }
}