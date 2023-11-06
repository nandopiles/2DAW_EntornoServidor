<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../vendor/autoload.php';



if (isset($_GET['action']))
    $action = $_GET['action'];
else
    $action = 'list';

if ($action == 'list') {
    $controller = new Ferran\App\Controllers\ListController();

    $data = $controller->getModel()->getAllTasks();
    $controller->getView()->printHTML($data);
} else if ($action == 'detail') {
    if (isset($_GET['id']))
        $id = $_GET['id'];
    else
        $id = '1';

    $controller = new Ferran\App\Controllers\DetailController();

    $data = $controller->getModel()->getTaskById($id);
    $controller->getView()->printHTML($data);
}
