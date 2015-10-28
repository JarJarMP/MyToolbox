<?php 

require_once('Pizza.php');

class ChicagoStyleClamPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Chicago Style Clam Pizza';
        $this->dough = 'Extra Thick Crust Dough';
        $this->sauce = 'Plum Tomato Sauce';
 
        $this->toppings = array(
            'Shredded Mozzarella Cheese',
            'Frozen Clams from Chesapeake Bay',
        );
    }
 
    public function cut()
    {
        echo 'Cutting the pizza into square slices';
    }
}
