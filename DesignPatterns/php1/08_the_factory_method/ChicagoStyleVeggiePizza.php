<?php 

require_once('Pizza.php');

class ChicagoStyleVeggiePizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Chicago Deep Dish Veggie Pizza';
        $this->dough = 'Extra Thick Crust Dough';
        $this->sauce = 'Plum Tomato Sauce';
 
        $this->toppings = array(
            'Shredded Mozzarella Cheese',
            'Black Olives',
            'Spinach',
            'Eggplant',
        );
    }
 
    public function cut()
    {
        echo 'Cutting the pizza into square slices';
    }
}
