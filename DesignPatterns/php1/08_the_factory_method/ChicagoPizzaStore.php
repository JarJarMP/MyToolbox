<?php 

require_once('PizzaStore.php');

require_once('ChicagoStyleCheesePizza.php');
require_once('ChicagoStyleVeggiePizza.php');
require_once('ChicagoStyleClamPizza.php');
require_once('ChicagoStylePepperoniPizza.php');

class ChicagoPizzaStore extends PizzaStore
{
    public function createPizza($type)
    {
        switch ($type) {
            case 'cheese':
                $pizza = new ChicagoStyleCheesePizza();
                break;
            
            case 'veggie':
                $pizza = new ChicagoStyleVeggiePizza();
                break;
            
            case 'clam':
                $pizza = new ChicagoStyleClamPizza();
                break;
            
            case 'pepperoni':
                $pizza = new ChicagoStylePepperoniPizza();
                break;
            
            default:
                $pizza = null;
                break;
        }

        return $pizza;
    }
}
