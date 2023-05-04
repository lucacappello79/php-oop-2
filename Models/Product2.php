<?php
class Product
{

    public $brand;
    public $name;
    public $price;
    public $icon;
    public $category;

    public function __construct(string $brand, string $name, int $price, string $icon, string $category)
    {
        $this->brand = $brand;
        $this->name = $name;
        $this->price = $price;
        $this->icon = $icon;
        $this->category = $category;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getIcon()
    {
        return $this->icon;
    }

    public function getCategory()
    {
        return $this->category;
    }
}
