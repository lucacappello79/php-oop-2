<?php

trait Traitable
{

    public $sharedProperty = "available";

    public function getSharedProperty()
    {
        return $this->sharedProperty;
    }

    public function setSharedProperty(string $sharedProperty)
    {
        $allowedValues = ['available', 'out of stock'];

        if (in_array($sharedProperty, $allowedValues)) {

            $this->sharedProperty = $sharedProperty;
        } else {

            throw new Exception("Invalid value, please us: 'available', 'out of stock'");
        }
    }
}
