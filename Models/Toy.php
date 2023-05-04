<?php

class Toy extends Product

{
    public $material;

    public function __construct(string $brand, string $name, int $price, string $icon, string $category, string $material)

    {
        parent::__construct($brand, $name, $price, $icon, $category);
        $this->material = $material;
    }

    public function getMaterial()
    {
        return $this->material;
    }
}
