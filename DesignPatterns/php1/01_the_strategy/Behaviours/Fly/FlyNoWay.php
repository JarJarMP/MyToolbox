<?php

require_once(__DIR__.'/../FlyBehavior.php');

class FlyNoWay implements FlyBehavior
{
    public function fly()
    {
        echo "I can't fly";
        echo "<br/>";
    }
}
