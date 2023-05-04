<?php

class DogToy extends DogProduct {

    public $material;

    public function __construct(string $name, int $price, int $year, string $material) {
        parent::__construct($name, $price, $year, "Toy");

        $this->material = $material;
    }
}
