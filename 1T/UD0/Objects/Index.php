<?php

include("./Persona.php");
include("./Estudiante.php");
include("./Figura.php");
include("./Forma.php");
include("./Circulo.php");

$fig = new Circulo("verde", 3);
echo "El área del círculo es => {$fig->calcularArea()}<br>";

$maria = new Persona("Maria", 18);
$maria->saludar();

$estudiante1 = new Estudiante("Xavi", 20, "6º A");
$estudiante1->saludar();
$estudiante1->estudiar();

$estudiante1->setCurso("5ºC");
echo $estudiante1->estudiar();

$circulo = new Circulo("azul", 11);
echo "Calc área -> ".$circulo->calcularArea();
