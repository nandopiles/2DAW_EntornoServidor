<?php

namespace Ferran\App\Controllers;

use Ferran\App\Models\TaskModel;
use Ferran\App\Views\TaskView;


class TaskController
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
        $this->setModel(new TaskModel());
        $this->setView(new TaskView());
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
}
