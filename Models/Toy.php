<?php

// require_once './Traits/Traitable.php';
require_once __DIR__ . "/../Traits/Traitable.php";
class Toy extends Product

{

    use Traitable;

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
