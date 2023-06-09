<?php
require_once __DIR__ . "/../Traits/Traitable.php";
class Bed extends Product

{
    use Traitable;

    public $size;

    public function __construct(string $brand, string $name, int $price, string $icon, string $category, string $size)

    {
        parent::__construct($brand, $name, $price, $icon, $category);
        $this->size = $size;
    }

    public function getSize()
    {
        return $this->size;
    }
}
