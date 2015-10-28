<?php

abstract class Beverage
{
    protected $description = "Unknown Beverage";

    public abstract function cost();

    public function getDescription()
    {
        return $this->description;
    }   
}
