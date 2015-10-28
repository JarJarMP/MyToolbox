<?php

require_once(__DIR__.'/../FlyBehavior.php');

class FlyRocketPowered implements FlyBehavior
{
    public function fly()
    {
        echo "I'm flying with a rocket";
        echo "<br/>";
    }
}
