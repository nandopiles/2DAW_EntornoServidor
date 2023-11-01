<?php
// require('../vendor/autoload.php');

if (isset($_GET['action']))
    $action = $_GET['action'];
else
    $action = 'list';

if ($action == 'list') {
    require_once('./models/DataBase.php');
    require_once('./views/ListView.php');
    require_once('./controllers/ListController.php');

    $model = new DataBase();
    $view = new ListView();
    $controller = new ListController($model, $view);

    $data = $controller->getTaskList();
    $view->printHTML($data);
} else if ($action == 'detail') {
    require_once('./models/DataBase.php');
    require_once('./views/DetailView.php');
    require_once('./controllers/DetailController.php');

    if (isset($_GET['id']))
        $id = $_GET['id'];
    else
        $id = '1';

    $model = new DataBase();
    $view = new DetailView();
    $controller = new DetailController($model, $view);

    $data = $controller->getTaskDetail($id);
    $view->printHTML($data);
}
