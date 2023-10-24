<html>

<body>
    <?php


    function PruebaSinGlobal()
    {
        $var++; //no está creada pero la crea y la inicializa a 0
        echo "Prueba sin global. \$var: $var <br>";
    }
    function PruebaConGlobal()
    {
        global $var;
        $var++;
        echo "Prueba con global. \$var: $var<br>";
    }
    function PruebaConGlobals()
    {
        $GLOBALS["var"]++;
        echo "Prueba con GLOBALS. \$var: " .
            $GLOBALS["var"] . "<br>";
    }

    $var = 20; //variable global
    PruebaSinGlobal();
    PruebaConGlobal();
    PruebaConGlobals();
    echo "<br>Php Version => " . PHP_VERSION .
        "<br>Nombre SO => " . PHP_OS
    ?>
</body>

</html>