<?php

require_once(__DIR__.'/../FlyBehavior.php');

class FlyWithWings implements FlyBehavior
{
    public function fly()
    {
        echo "I'm flying!!";
        echo "<br/>";
    }
}
