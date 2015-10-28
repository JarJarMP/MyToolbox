<?php

require_once('Pizza.php');

class CheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Cheese Pizza';
        $this->dough = 'Regular Crust';
        $this->sauce = 'Marinara Pizza Sauce';
        $this->toppings = array(
            'Fresh Mozzarella', 
            'Parmesan',
        );
    }
}
