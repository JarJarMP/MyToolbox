<?php

require_once(__DIR__.'/../QuackBehavior.php');

class MuteQuack implements QuackBehavior
{
    public function quack()
    {
        echo "{{ Silence }}";
        echo "<br/>";
    }
}
