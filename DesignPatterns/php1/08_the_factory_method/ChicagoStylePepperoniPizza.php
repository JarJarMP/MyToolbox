<?php 

require_once('Pizza.php');

class ChicagoStylePepperoniPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Chicago Style Pepperoni Pizza';
        $this->dough = 'Extra Thick Crust Dough';
        $this->sauce = 'Plum Tomato Sauce';
 
        $this->toppings = array(
            'Shredded Mozzarella Cheese',
            'Black Olives',
            'Spinach',
            'Eggplant',
            'Sliced Pepperoni',
        );
    }
 
    public function cut()
    {
        echo 'Cutting the pizza into square slices';
    }
}
