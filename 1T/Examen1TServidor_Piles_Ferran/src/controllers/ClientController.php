<?php

namespace Ferran\App\Controllers;

use Ferran\App\Models\ClientModel;
use Ferran\App\Views\ClientView;


class ClientController
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
        $this->setModel(new ClientModel());
        $this->setView(new ClientView());
    }

    /**
     * Displays the all the Clients getting the info from the current model and printing it to the current view.
     *
     * @return void
     */
    public function displayAllClients()
    {
        $clients = $this->getModel()->findAll();
        $this->getView()->printHTML($clients);
    }

    /**
     * Displays the and specific Client getting the info from the current model and printing it to the current view.
     *
     * @return void
     */
    public function displaySpecificClient($clientId)
    {
        if ($clientId !== null) {
            $clientInfo = $this->getModel()->find($clientId);
            $this->getView()->printClientDetails($clientInfo);
        } else
            echo "Error: Client doesn't exist.";
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
