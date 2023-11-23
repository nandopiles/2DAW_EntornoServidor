<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "../vendor/autoload.php";

// Default value for the action.
if (isset($_GET['action']))
    $action = $_GET['action'];
else
    $action = 'main';


// Displays the view with the model appropriated depending on the action selected by the user.
if ($action == 'main') {
    $view = new Ferran\App\Views\MainView();

    $view->printHTML();
} else if ($action == 'clients') {
    $controller = new \Ferran\App\Controllers\ClientController();

    $controller->displayAllClients();
} else if ($action == 'employees') {
    $controller = new \Ferran\App\Controllers\EmployeeController();

    $controller->displayAllEmployees();
} else if ($action == 'clientsdetail') {
    $controller = new \Ferran\App\Controllers\ClientController();

    $clientId = isset($_GET['id']) ? $_GET['id'] : null;
    $controller->displaySpecificClient($clientId);
} else if ($action == 'employeesdetail') {
    $controller = new \Ferran\App\Controllers\EmployeeController();

    $employeeId = isset($_GET['id']) ? $_GET['id'] : null;
    $controller->displaySpecificEmployee($employeeId);
}
