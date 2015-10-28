<?php

require_once('Menu.php');
require_once('DinerMenuIterator.php');

class DinerMenu implements Menu
{
    private $MAX_ITEMS = 6;
    private $numberOfItems = 0;
    private $menuItems; //String[] menuItems;
  
    public function __construct()
    {
        /*menuItems = new String[MAX_ITEMS]; 
        addItem("Vegetarian BLT");
        addItem("BLT");
        addItem("Soup of the day");
        addItem("Hotdog");
        addItem("Steamed Veggies and Brown Rice");
        addItem("Pasta");*/

        $this->menuItems = array(
            "Vegetarian BLT",
            "BLT",
            "Soup of the day",
            "Hotdog",
            "Steamed Veggies and Brown Rice",
            "Pasta",
        );
    }
  
    /*public void addItem(String name) 
    {
        if (numberOfItems >= MAX_ITEMS) {
            System.err.println("Sorry, menu is full!  Can't add item to menu");
        } else {
            menuItems[numberOfItems] = name;
            numberOfItems = numberOfItems + 1;
        }
    }*/
 
    public function getMenuItems()
    {
        return $this->menuItems;
    }
  
    public function createIterator() {
        return new DinerMenuIterator($this->menuItems);
    }
 
    public function toString()
    {
        return "Diner Menu";
    }
}
