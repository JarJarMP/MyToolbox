<?php 

require_once('PizzaStore.php');

require_once('NYStyleCheesePizza.php');
require_once('NYStyleVeggiePizza.php');
require_once('NYStyleClamPizza.php');
require_once('NYStylePepperoniPizza.php');

class NYPizzaStore extends PizzaStore
{
    public function createPizza($type)
    {
        switch ($type) {
            case 'cheese':
                $pizza = new NYStyleCheesePizza();
                break;
            
            case 'veggie':
                $pizza = new NYStyleVeggiePizza();
                break;
            
            case 'clam':
                $pizza = new NYStyleClamPizza();
                break;
            
            case 'pepperoni':
                $pizza = new NYStylePepperoniPizza();
                break;
            
            default:
                $pizza = null;
                break;
        }

        return $pizza;
    }
}
