<?php

class Connection
{
    private function __construct()
    {
        echo 'This created a new object! <br />';
    }

    public static function getInstance()
    {
        static $instance = null;
        if (null === $instance) {
            $instance = new static();
        } else {
            echo 'This used the same object as before! <br />';
        }

        return $instance;
    }
}
