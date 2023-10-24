<?php

class Shape{
    private $type;
    function __construct($type)
    {
        $this->type = $type;
    }
    public function draw(){
        switch($this->type){
            case "square":
                echo "es un cuadrado";
                break;
            case "triangle":
                echo "es un triangle";
                break;
            case "circle":
                echo "es un circle";
                break;
            default:
                echo "no se que es...";
                break;
        }
    }
}

$shape = new Shape("square");
$shape = $shape->draw();