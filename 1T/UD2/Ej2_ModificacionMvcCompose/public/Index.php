<?php

require_once '../vendor/autoload.php';


if (isset($_GET['action']))
    $action = $_GET['action'];
else
    $action = 'list';

if ($action == 'list') {
    $model = new Ferran\App\Models\DataBase();
    $view = new Ferran\App\Views\ListView();
    $controller = new Ferran\App\Controllers\ListController($model, $view);

    $model->connect();
    $data = $controller->getAllTasks();
    $view->printHTML($data);
} else if ($action == 'detail') {
    if (isset($_GET['id']))
        $id = $_GET['id'];
    else
        $id = '1';

    $model = new Ferran\App\Models\DataBase();
    $view = new Ferran\App\Views\DetailView();
    $controller = new Ferran\App\Controllers\DetailController($model, $view);

    $model->connect();
    $data = $controller->getTaskById($id);
    $view->printHTML($data);
}
