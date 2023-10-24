<?php

include('./models/TimeModel.php');
include('./views/ByeView.php');

class ByeController
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
    public function printTime()
    {
        return $this->getModel()->getTime();
    }

    /**
     * Get the value of model
     */
    public function getModel()
    {
        return $this->model;
    }
}
