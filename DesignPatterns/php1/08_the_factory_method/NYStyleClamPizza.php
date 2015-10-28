<?php 

require_once('Pizza.php');

class NYStyleClamPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'NY Style Clam Pizza';
        $this->dough = 'Thin Crust Dough';
        $this->sauce = 'Marinara Sauce';
 
        $this->toppings = array(
            'Grated Reggiano Cheese',
            'Fresh Clams from Long Island Sound',
        );
    }
}
