<?php 
class Product {

    public $type;
    public $name;
    public $price;
    public $year;

    function __construct(Type $type, string $name, int $price, int $year) {

        $this->type = $type;
        $this->name = $name;
        $this->price = $price;
        $this->year = $year;

    }

    public function getType() {
        return $this->type;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getYear() {
        return $this->year;
    }

}
