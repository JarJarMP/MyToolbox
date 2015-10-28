<?php

require_once(__DIR__.'/../Condiment.php');

class Soy extends Condiment
{
    protected $beverage;

    public function __construct($beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription() 
    {
        return $this->beverage->getDescription() . " with Soy";
    }

    public function cost()
    {
        return .15 + $this->beverage->cost();
    }
}
