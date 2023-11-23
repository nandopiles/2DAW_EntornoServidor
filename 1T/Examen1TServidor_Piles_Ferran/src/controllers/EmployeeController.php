<?php

namespace Ferran\App\Controllers;

use Ferran\App\Models\EmployeeModel;
use Ferran\App\Views\EmployeeView;


class EmployeeController
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
        $this->setModel(new EmployeeModel());
        $this->setView(new EmployeeView());
    }

    /**
     * Displays all the Employees getting the info from the current model and printing it to the current view.
     *
     * @return void
     */
    public function displayAllEmployees()
    {
        $clients = $this->getModel()->findAll();
        $this->getView()->printHTML($clients);
    }

    /**
     * Displays an specific Employee getting the info from the current model and printing it to the current view.
     *
     * @return void
     */
    public function displaySpecificEmployee($employeeId)
    {
        if ($employeeId !== null) {
            $employeeInfo = $this->getModel()->find($employeeId);
            $this->getView()->printEmployeeDetails($employeeInfo);
        } else
            echo "Error: Employee doesn't exist.";
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
