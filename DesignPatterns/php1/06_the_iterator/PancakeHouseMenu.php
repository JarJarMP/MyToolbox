<?php

require_once('Menu.php');
require_once('PancakeHouseMenuIterator.php');

class PancakeHouseMenu implements Menu
{
    private $menuItems; // ArrayList<String> menuItems;
 
    public function __construct()
    {
        /*menuItems = new ArrayList<String>();
        menuItems.add("K&B's Pancake Breakfast");
        menuItems.add("Regular Pancake Breakfast");
        menuItems.add("Blueberry Pancakes");
        menuItems.add("Waffles");*/

        $this->menuItems = array(
            "K&B's Pancake Breakfast",
            "Regular Pancake Breakfast",
            "Blueberry Pancakes",
            "Waffles",
        );
    }
 
    public function getMenuItems()
    {
        return $this->menuItems;
    }
  
    public function createIterator()
    {
        return new PancakeHouseMenuIterator($this->menuItems);
    }
  
    public function toString()
    {
        return "Pancake House Menu";
    }
}
