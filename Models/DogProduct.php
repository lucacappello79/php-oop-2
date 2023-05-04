<?php

class DogProduct extends Product
{

    public $type;

    function __construct(string $name, int $price, int $year, string $type) {

        parent::__construct($name, $price, $year);

        $this->type = $type;
    }
}
