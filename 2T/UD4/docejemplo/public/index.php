<?php
require_once "../vendor/autoload.php";

use App\Core\Dispatcher;
use App\Core\Request;
use App\Core\RouteCollection;
use App\Core\EntityManager;

/* $obj = new EntityManager(); */

$routes = new RouteCollection();
$request = new Request();
$dispatcher = new Dispatcher($routes, $request);