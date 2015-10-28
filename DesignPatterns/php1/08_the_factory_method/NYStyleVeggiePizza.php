<?php 

require_once('Pizza.php');

class NYStyleVeggiePizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'NY Style Veggie Pizza';
        $this->dough = 'Thin Crust Dough';
        $this->sauce = 'Marinara Sauce';
 
        $this->toppings = array(
            'Grated Reggiano Cheese',
            'Garlic',
            'Onion',
            'Mushrooms',
            'Red Pepper',
        );
    }
}
