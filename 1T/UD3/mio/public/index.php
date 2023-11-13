<?php

require_once "../vendor/autoload.php";

$classA = new Ferran\App\Models\ClassA();
$classB = new Ferran\App\Pepito\ClassB();

echo $classA->show();
echo $classB->show();