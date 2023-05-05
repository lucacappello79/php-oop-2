<?php

require_once './traits/TraitExample.php';
require_once __DIR__ . "/../Traits/Rateable.php";
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
