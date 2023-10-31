<?php

include('./models/SayingModel.php');
include('./views/SayingView.php');

class SayingController
{
    private $model;
    private $view;

    public function __construct($model, $view)
    {
        $this->model = $model;
        $this->view = $view;
    }

    /**
     * print the current time in the view specified
     *
     * @return void
     */
    public function printSaying()
    {
        return $this->getModel()->saySaying();
    }

    /**
     * Get the value of model
     */
    public function getModel()
    {
        return $this->model;
    }
}
