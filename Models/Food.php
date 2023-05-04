<?php

class Food extends Product

{
    public $weight;

    public function __construct(string $brand, string $name, int $price, string $icon, string $category, int $weight)

    {
        parent::__construct($brand, $name, $price, $icon, $category);
        $this->weight = $weight;
    }

    public function getWeight()
    {
        return $this->weight;
    }
}
