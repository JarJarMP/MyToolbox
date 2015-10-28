<?php 

require_once('Pizza.php');

class NYStylePepperoniPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'NY Style Pepperoni Pizza';
        $this->dough = 'Thin Crust Dough';
        $this->sauce = 'Marinara Sauce';
 
        $this->toppings = array(
            'Grated Reggiano Cheese',
            'Sliced Pepperoni',
            'Garlic',
            'Onion',
            'Mushrooms',
            'Red Pepper',
        );
    }
}
