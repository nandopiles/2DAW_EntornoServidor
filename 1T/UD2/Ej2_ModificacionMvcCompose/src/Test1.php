<?php
require('./models/DataBase.php');
require('./models/FunctionsDB.php');
// require('../vendor/autoload.php');

$db = new DataBase();

$functions = new FunctionsDb($db->getLink());
$functions->select1();
