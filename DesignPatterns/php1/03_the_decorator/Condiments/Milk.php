<?php

require_once(__DIR__.'/../Condiment.php');

class Milk extends Condiment
{
    protected $beverage;

    public function __construct($beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription() 
    {
        return $this->beverage->getDescription() . " with Milk";
    }

    public function cost()
    {
        return .10 + $this->beverage->cost();
    }
}
