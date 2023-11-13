<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "../vendor/autoload.php";

use App\Core\Dispatcher;
use App\Core\Request;
use App\Core\RouteCollection;

$routes = new RouteCollection();
$request = new Request();
$dispatcher = new Dispatcher($routes, $request);
