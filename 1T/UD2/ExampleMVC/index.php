<?php
require_once 'model.php';
require_once 'view.php';
require_once 'controller.php';

$model = new Model();
$view = new View();
$controller = new Controller($model, $view);

$controller->updateTask();
