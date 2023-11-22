<?php

class Vista{



    public function mostrar($nombre, $apellido){

        require __DIR__ ."/vendor/autoload.php";
        $loader=new \Twig\Loader\FilesystemLoader("templates");
        $twig=new \Twig\Environment($loader);
        echo $twig->render("index.html.twig",["nombre"=>$nombre, "apellido"=>$apellido]);

    }
}


?>