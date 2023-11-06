<?php

namespace Ferran\App\Controllers;

use Ferran\App\Models\DetailModel;
use Ferran\App\Views\DetailView;



class DetailController
{
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new DetailModel();
        $this->view = new DetailView();
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
