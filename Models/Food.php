<?php

require_once __DIR__ . "/../Traits/Traitable.php";
class Food extends Product

{

    use Traitable;

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
