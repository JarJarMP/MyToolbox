<?php

require_once('CheesePizza.php');
require_once('PepperoniPizza.php');
require_once('ClamPizza.php');
require_once('VeggiePizza.php');

class SimplePizzaFactory
{
    public function createPizza($type)
    {
        switch ($type) {
            case 'cheese':
                $pizza = new CheesePizza();
                break;
            
            case 'pepperoni':
                $pizza = new PepperoniPizza();
                break;
            
            case 'clam':
                $pizza = new ClamPizza();
                break;
            
            case 'veggie':
                $pizza = new VeggiePizza();
                break;
            
            default:
                $pizza = null;
                break;
        }

        return $pizza;
    }
}
