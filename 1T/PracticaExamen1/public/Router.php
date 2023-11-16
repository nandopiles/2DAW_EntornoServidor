<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "../vendor/autoload.php";

// Default value for the action.
if (isset($_GET['action']))
    $action = $_GET['action'];
else
    $action = 'hello';


// Displays the view with the model appropriated depending on the action selected by the user.
if ($action == 'hello') {
    $controller = new \Ferran\App\Controllers\HelloController();

    $time = $controller->getModel()->getTime();
    $controller->getView()->printHTML($time);
} else if ($action == 'bye') {
    $controller = new \Ferran\App\Controllers\ByeController();

    $time = $controller->getModel()->getTime();
    $controller->getView()->printHTML($time);
} else if ($action == 'saying') {
    $controller = new \Ferran\App\Controllers\SayingController();

    $saying = $controller->getModel()->getSaying();
    $controller->getView()->printHTML($saying);
} else if ($action == 'tasks') {
    $controller = new \Ferran\App\Controllers\TaskController();

    $tasks = $controller->getModel()->getAllTasks();
    // var_dump($tasks);
    $controller->getView()->printHTML($tasks);
} else if ($action == 'templates') {
    $loader = new \Twig\Loader\FilesystemLoader('../templates');
    $twig = new \Twig\Environment($loader);

    echo $twig->render('index.html', ['username' => 'Ferran Piles Lablanca']);
}
