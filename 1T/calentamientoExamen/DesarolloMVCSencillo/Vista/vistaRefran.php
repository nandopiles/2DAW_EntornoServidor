<?php

class VistaRefran{
    //muestra los refranes por un array por parametro
    public function verRefran($refranes)
    {

        $min = 0;
        $max = count( $refranes );
        $numeroAleatorio = rand($min, $max);     
        
        echo "<h1>".$refranes[$numeroAleatorio]."</h1>";
    
    }
}





?>