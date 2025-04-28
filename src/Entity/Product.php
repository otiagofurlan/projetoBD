<?php

namespace TsukiTerrace\MVC\Entity;

class Product{
    public readonly int $id;
    private ?string $image = null;
    public function __construct(
        public string $name,
        public string $description,
        public float $price,
    )
    {
        $this->setName($name);
    }
    public function setId(int $id):void
    {
        $this->id = $id;
    }
    private function setName(string $name)
    {
        $this->name = $name;
    }
        public function setDescription(string $description):void
    {
        $this->description = $description;
    }
    public function setPrice(float $price):void
    {
        $this->price = $price;
    }
    public function setImage(string $image): void
    {
        $this->image = $image;
    }
    public function getId():int
    {
        return $this->id;
    }
    public function getName():string
    {
        return $this->name;
    }
    public function getDescription():string
    {
        return $this->description;
    }
    public function getPrice():float
    {
        return $this->price;
    }
    public function getImage(): ?string{
        return $this->image;
    }
}