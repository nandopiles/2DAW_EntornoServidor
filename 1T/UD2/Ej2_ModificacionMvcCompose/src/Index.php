<?php
require_once '../vendor/autoload.php';

use Ferran\App\Models\DataBase;
use Ferran\App\Controllers\ListController;
use Ferran\App\Controllers\DetailController;
use Ferran\App\Views\ListView;
use Ferran\App\Views\DetailView;


if (isset($_GET['action']))
    $action = $_GET['action'];
else
    $action = 'list';

if ($action == 'list') {
    // require_once('./models/DataBase.php');
    // require_once('./views/ListView.php');
    // require_once('./controllers/ListController.php');

    $model = new DataBase();
    $view = new ListView();
    $controller = new ListController($model, $view);

    $data = $controller->getAllTasks();
    $view->printHTML($data);
} else if ($action == 'detail') {
    // require_once('./models/DataBase.php');
    // require_once('./views/DetailView.php');
    // require_once('./controllers/DetailController.php');

    if (isset($_GET['id']))
        $id = $_GET['id'];
    else
        $id = '1';

    $model = new DataBase();
    $view = new DetailView();
    $controller = new DetailController($model, $view);

    $data = $controller->getTaskById($id);
    $view->printHTML($data);
}
