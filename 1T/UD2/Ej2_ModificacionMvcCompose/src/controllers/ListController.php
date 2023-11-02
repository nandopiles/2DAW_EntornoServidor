<?php

namespace Ferran\App\Controllers;

use Ferran\App\Models\ListModel;
use Ferran\App\Views\ListView;

class ListController
{
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new ListModel();
        $this->view = new ListView();
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
