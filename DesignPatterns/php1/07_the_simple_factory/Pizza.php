<?php

abstract class Pizza
{
    protected $name = '';
    protected $dough = '';
    protected $sauce = '';
    protected $toppings = array();

    public function getName()
    {
        return $this->name;
    }

    public function prepare()
    {
        echo 'Preparing ' . $this->name . '<br/>';
    }

    public function bake()
    {
        echo 'Baking ' . $this->name . '<br/>';
    }

    public function cut()
    {
        echo 'Cutting ' . $this->name . '<br/>';
    }

    public function box()
    {
        echo 'Boxing ' . $this->name . '<br/>';
    }

    // display pizza name and ingredients
    public function toString()
    {
        echo "---- {$this->name} ----<br/>";
        echo "Dough: {$this->dough}<br/>";
        echo "Sauce: {$this->sauce}<br/>";
        echo "Toppings: " . implode(', ', $this->toppings) . "<br/>";
    }
}
