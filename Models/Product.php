<?php
class Product
{

    public $name;
    public $price;
    public $year;

    public function __construct(string $name, int $price, int $year)
    {

        $this->name = $name;
        $this->price = $price;
        $this->year = $year;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getYear()
    {
        return $this->year;
    }
}

class DogProduct extends Product
{

    public $type;
}

class CatProduct extends Product
{

    public $type;
}
