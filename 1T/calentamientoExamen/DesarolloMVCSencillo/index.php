<?php
#Puedes acceder a la lista de tareas visitando index.php?route=list y agregar nuevas tareas visitando
# index.php?route=add. Esto facilita la expansión de la aplicación con más rutas y controladores según
#sea necesario.
#http://localhost/ud2/mvcsencillo3/index.php?route=add
#http://localhost/ud2/mvcsencillo3/index.php?route=list

header("Location: router.php?".$_SERVER['QUERY_STRING']);
?>