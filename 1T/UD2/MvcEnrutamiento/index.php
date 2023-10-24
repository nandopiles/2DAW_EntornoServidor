<?php
#Puedes acceder a la lista de tareas visitando index.php?route=list y agregar nuevas tareas visitando
# index.php?route=add. Esto facilita la expansión de la aplicación con más rutas y controladores según
#sea necesario.
#http://localhost/UD2/MvcEnrutamiento/index.php?route=add
#http://localhost/UD2/MvcEnrutamiento/index.php?route=list


$route = $_GET['route'];
header("Location: router.php?route=$route"); 
# header("Location: router.php?".$_SERVER['QUERY_STRING']);
# require_once './router.php'