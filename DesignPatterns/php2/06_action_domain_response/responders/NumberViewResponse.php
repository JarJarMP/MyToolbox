<?php

require_once('Number.php');

class NumberViewResponse
{
    protected $domain = null;
    public $number = 0;

    public function __construct()
    {
        $this->domain = new Number();
    }

    public function run()
    {
        $value = $this->domain->square($this->number);

        include('templates/view_number.php');
    }
}
