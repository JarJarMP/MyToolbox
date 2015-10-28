<?php

require_once(__DIR__.'/../QuackBehavior.php');

class Squeak implements QuackBehavior
{
    public function quack()
    {
        echo "Squeak";
        echo "<br/>";
    }
}
