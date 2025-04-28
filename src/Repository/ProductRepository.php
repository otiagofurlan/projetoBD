<?php

namespace TsukiTerrace\MVC\Repository;

use PDO;
use TsukiTerrace\MVC\Entity\Product;

class ProductRepository
{
    public function __construct(private PDO $pdo)
    {
    }
    public function create(Product $product): bool
    {
        $sql = 'INSERT INTO products (name, description, price, image) VALUES (?,?,?,?)';
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $product->name);
        $statement->bindValue(2, $product->description);
        $statement->bindValue(3, $product->price);
        $statement->bindValue(4, $product->getImage());

        
        $result = $statement->execute();
        
        $id = $this->pdo->lastInsertId();
        $product->setId(intval($id));

        return $result;
    }
    public function delete(int $id): bool
    {
        $sql = 'DELETE FROM products WHERE id = ?';
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $id);
        return $statement->execute();
    }
    public function update(Product $product):bool
    {
        $updateImageSql = '';
        if($product->getImage()!==null){
            $updateImageSql = ', image = :image';
        }
        $sql = "UPDATE products SET name= :name, description= :description, price= :price $updateImageSql WHERE id = :id;";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(':name', $product->name);
        $statement->bindValue(':description', $product->description);
        $statement->bindValue(':price', $product->price);
        if($product->getImage()!==null){
            $statement->bindValue(':image', $product->getImage());
        }
        $statement->bindValue(':id', $product->id, PDO::PARAM_INT);
        return $statement->execute();
    }
    public function read():array
    {
        $productList = $this->pdo->query('SELECT * FROM products;')->fetchAll(PDO::FETCH_ASSOC);
        return array_map($this->createObject(...),
            $productList
        );
    }
    public function find(int $id)
    {
        $sql = "SELECT * FROM products WHERE id = ?";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $id, PDO::PARAM_INT);
        $statement->execute();

        return $this->createObject($statement->fetch(PDO::FETCH_ASSOC));
    }
    public function createObject(array $productData):Product
    {
        $product = new Product($productData['name'], $productData['description'], $productData['price'], $productData['image']);
        $product->setId($productData['id']);
        if($productData['image']!==null){
            $product->setImage($productData['image']);
        }
        return $product;
    }
}