<?php

abstract class Pizza
{
    protected $name = '';
    protected $dough = '';
    protected $sauce = '';
    protected $toppings = array();
 
    public function prepare()
    {
        echo '<br/>Prepare ' . $this->name . '<br/>';
        echo 'Tossing dough...<br/>';
        echo 'Adding sauce...<br/>';
        echo 'Adding toppings: ' . implode(', ', $this->toppings) . '<br/>';
    }
  
    public function bake()
    {
        echo '<br/> Bake for 25 minutes at 350';
    }
 
    public function cut()
    {
        echo '<br/> Cut the pizza into diagonal slices';
    }
  
    public function box()
    {
        echo '<br/> Place pizza in official PizzaStore box';
    }
 
    public function getName()
    {
        return $this->name;
    }

    public function toString()
    {
        echo "<br/>---- {$this->name} ----<br/>";
        echo "Dough: {$this->dough}<br/>";
        echo "Sauce: {$this->sauce}<br/>";
        echo "Toppings: " . implode(', ', $this->toppings) . "<br/>";
    }
}
