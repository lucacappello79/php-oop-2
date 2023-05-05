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
    }
}
