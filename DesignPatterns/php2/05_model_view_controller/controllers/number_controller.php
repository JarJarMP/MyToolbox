<?php

require_once('number_model');

class NumberController extends DefaultController
{
    public $model = null;

    public function __construct()
    {
        $this->model = new NumberModel();
    }

    public function view($value = 0)
    {
        $model = $this->model;

        include('views/view_number.php');
    }
}
