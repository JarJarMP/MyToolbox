<?php 

require_once('PancakeHouseMenu.php');
require_once('DinerMenu.php');

class Cafe
{
    public static function index()
    {
        $pancakeHouseMenu = new PancakeHouseMenu();
        $dinerMenu = new DinerMenu();
        
        // ---------------------------
        // with no iterators
        echo "<br/>MENU<br/>----<br/>BREAKFAST";
        $breakfastItems = $pancakeHouseMenu->getMenuItems();
        for ($i = 0; $i < count($breakfastItems); $i++) {
            $menuItem = $breakfastItems[$i];
            echo $menuItem . '<br/>';
        } // or foreach

        echo "<br/>LUNCH";
        $lunchItems = $dinerMenu->getMenuItems();
        for ($i = 0; $i < count($lunchItems); $i++) {
            $menuItem = $lunchItems[$i];
            echo $menuItem . '<br/>';
        } // or foreach
        
        // ---------------------------
        // with iterators
        $pancakeIterator = $pancakeHouseMenu->createIterator();
        $dinerIterator = $dinerMenu->createIterator();

        echo "<br/>MENU (with iterators)<br/>----<br/>BREAKFAST";
        self::printMenu($pancakeIterator);
        echo "<br/>LUNCH";
        self::printMenu($dinerIterator); 
    }
 
    private static function printMenu($iterator)
    {
        while ($iterator->hasNext()) {
            $menuItem = $iterator->next();
            echo $menuItem . '<br/>';
        }
    }
}
