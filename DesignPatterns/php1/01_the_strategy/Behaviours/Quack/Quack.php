<?php

require_once(__DIR__.'/../QuackBehavior.php');

class Quack implements QuackBehavior
{
    public function quack()
    {
        echo "Quack";
        echo "<br/>";
    }
}
