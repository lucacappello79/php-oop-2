<?php

class CatBed extends CatProduct
{
    public $size;

    function __construct(string $name, int $price, int $year, string $size)
    {
        parent::__construct($name, $price, $year, "Bed");

        $this->size = $size;
    }
}
