<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require_once "../vendor/autoload.php";
$e= $_SERVER["REQUEST_URI"];

$ruta = explode("/", $_SERVER["REQUEST_URI"])[4];
$loader = new FilesystemLoader("../templates");
$twig = new Environment($loader);

switch ($ruta) {
    case "":
        echo "hola2";
        echo $twig->render('index.html.twig', [
            "ruta" => "index",
            "nombre" => "jorge"
        ]);
        break;
    case "contact":
        echo "hola3";
        echo $twig->render('contact.html.twig', [
            "ruta" => "contact",
            "nombre" => "Pepe"
        ]);
        break;
#http://localhost/ud3/t2/public/index.php/team
    case "team":
        echo "hola4";
        echo $twig->render('team.html.twig', [
            "ruta" => "team",
            "nombre" => "Antonio"
        ]);
        break;
    default:
#comprobar la ruta que pasamos para hacer el routing
        echo $ruta;
        echo ": ";
        echo $e;
        break;
}
