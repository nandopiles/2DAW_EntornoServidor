<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once("./controller.php");
require_once("./modelo.php");
require_once("./vista.php");


$vista=new Vista();
$modelo=new Modelo();
$control = new Controller($modelo,$vista);

$control->mostrarTodo();




?>