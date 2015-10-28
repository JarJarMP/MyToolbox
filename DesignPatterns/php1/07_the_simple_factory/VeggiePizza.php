<?php

require_once('Pizza.php');

class VeggiePizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Veggie Pizza';
        $this->dough = 'Crust';
        $this->sauce = 'Marinara sauce';
        $this->toppings = array(
            'Shredded mozzarella',
            'Grated parmesan',
            'Diced onion',
            'Sliced mushrooms',
            'Sliced red pepper',
            'Sliced black olives',
        );
    }
}
