<?php
// require('../vendor/autoload.php');
require('./models/DataBase.php');
require('./controllers/FunctionsDB.php');

if (isset($_GET['action']))
    $action = $_GET['action'];
else
    $action = 'list';

$db = new DataBase();
$functions = new FunctionsDb($db->getLink());

if ($action == 'list')
    $functions->select1();
else if ($action == 'detail') {
    if (isset($_GET['id']))
        $id = $_GET['id'];
    else
        $id = '1';
    $functions->select2($id);
}
