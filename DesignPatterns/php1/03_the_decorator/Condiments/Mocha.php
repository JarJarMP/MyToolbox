<?php

require_once(__DIR__.'/../Condiment.php');

class Mocha extends Condiment
{
    protected $beverage;

    public function __construct($beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription() 
    {
        $x = $this->beverage->getDescription();
        return $this->beverage->getDescription() . " with Mocha";
    }

    public function cost()
    {
        return .20 + $this->beverage->cost();
    }
}
