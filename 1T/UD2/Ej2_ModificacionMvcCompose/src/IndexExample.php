<?php
/*
if (isset($_GET['action']))
    $action = $_GET['action'];
else
    $action = 'hello';

if ($action == 'hello') {
    require_once('./controllers/HelloController.php');
    require_once('./models/TimeModel.php');
    require_once('./views/HelloView.php');

    $timeModel = new TimeModel();
    $helloView = new HelloView();
    $controller = new HelloController($timeModel, $helloView);

    $vTime = $controller->printTime();
    $helloView->printHTML($vTime);
} else if ($action == 'bye') {
    require_once('./controllers/ByeController.php');
    require_once('./models/TimeModel.php');
    require_once('./views/ByeView.php');

    // use controllers\Bye\ByeController as ByeController;

    $timeModel = new TimeModel();
    $byeView = new ByeView();
    $controller = new ByeController($timeModel, $byeView);

    $vTime = $controller->printTime();
    $byeView->printHTML($vTime);
} else if ($action == 'saying') {
    require_once('./controllers/SayingController.php');
    require_once('./models/SayingModel.php');
    require_once('./views/SayingView.php');

    $sayingModel = new SayingModel();
    $sayingView = new SayingView();
    $controller = new SayingController($sayingModel, $sayingView);

    $vSaying = $controller->printSaying();
    $sayingView->printHTML($vSaying);
} else {
    echo "<h1>Ruta no encontrada</h1>";
}
*/