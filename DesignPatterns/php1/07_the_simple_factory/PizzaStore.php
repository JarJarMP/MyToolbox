<?php

class PizzaStore
{
    private $factory;
 
    public function __construct($factory)
    {
        $this->factory = $factory;
    }
 
    public function orderPizza($type)
    {
        $pizza = $this->factory->createPizza($type);
 
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}
