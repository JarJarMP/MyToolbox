<?php

require_once('Pizza.php');

class PepperoniPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Pepperoni Pizza';
        $this->dough = 'Crust';
        $this->sauce = 'Marinara sauce';
        $this->toppings = array(
            'Sliced Pepperoni',
            'Sliced Onion',
            'Grated parmesan cheese',
        );
    }
}
