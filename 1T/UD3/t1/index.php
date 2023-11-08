<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require_once "./vendor/autoload.php";

$loader = new FilesystemLoader("templates");
$twig = new Environment($loader);

class clase1
{
    public $attr1 = 10;
    public function getAttr1()
    {
        return $this->attr1;
    }
}

echo $twig->render('template.html.twig', [
    "nombre" => "Jorge",
    "direccion" => [
        "calle" => "Mayor",
        "numero" => 8
    ],
    "modulo" => ["DWES", "PROG"],
    "claseEjemplo" => new clase1()
]);
echo $twig->render('template.html.twig', []);
//echo $twig->render('template2.html.twig', []);
//echo $twig->render('template3.html.twig', []);
