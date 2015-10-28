<?php

require_once(__DIR__.'/../Beverage.php');

class HouseBlend extends Beverage
{
    public function __construct()
    {
        $this->description = "House Blend Coffee";
    }
 
    public function cost()
    {
        return .89;
    }
}
