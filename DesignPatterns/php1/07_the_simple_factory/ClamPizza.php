<?php

require_once('Pizza.php');

class ClamPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Clam Pizza';
        $this->dough = 'Thin crust';
        $this->sauce = 'White garlic sauce';
        $this->toppings = array(
            'Clams',
            'Grated parmesan cheese', 
        );
    }
}
