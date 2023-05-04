<?php

class CatFood extends CatProduct
{
    public $brand;
    public $weight;

    public function __construct(string $name, int $price, int $year, string $brand, int $weight)
    {
        parent::__construct($name, $price, $year, "Food");

        $this->brand = $brand;
        $this->weight = $weight;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function getWeight()
    {
        return $this->weight;
    }
}
