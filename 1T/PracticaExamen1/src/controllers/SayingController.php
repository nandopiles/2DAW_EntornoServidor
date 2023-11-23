<?php

namespace Ferran\App\Controllers;

use Ferran\App\Models\SayingModel;
use Ferran\App\Views\SayingView;

class SayingController
{
    private $model;
    private $view;

    /**
     * __construct that selects the model and view appropriated.
     *
     * @return void
     */
    public function __construct()
    {
        $this->setModel(new SayingModel());
        $this->setView(new SayingView());
    }

    /**
     * Displays the data getting the info from the current model and printing it to the current view.
     *
     * @return void
     */
    public function displayData()
    {
        $saying = $this->getModel()->getSaying();
        $this->getView()->printHTML($saying);
    }

    /**
     * Get the value of model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Get the value of view
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * Set the value of model
     *
     * @return  self
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Set the value of view
     *
     * @return  self
     */
    public function setView($view)
    {
        $this->view = $view;

        return $this;
    }
}
