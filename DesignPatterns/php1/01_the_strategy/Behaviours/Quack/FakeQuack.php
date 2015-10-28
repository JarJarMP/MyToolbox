<?php

require_once(__DIR__.'/../QuackBehavior.php');

class FakeQuack implements QuackBehavior
{
    public function quack()
    {
        echo "Qwak";
        echo "<br/>";
    }
}
