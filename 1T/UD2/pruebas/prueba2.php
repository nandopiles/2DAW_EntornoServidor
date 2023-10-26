<?php
// Configuración de la conexión
$host = "172.24.0.2";
$usuario = "nando";
$contrasena = "1234";
$base_de_datos = "midb";

// Establecer la conexión
$enlace = new mysqli($host, $usuario, $contrasena, $base_de_datos);

// Verificar la conexión
if ($enlace->connect_error) {
    die("Error de conexión: " . $enlace->connect_error);
}
echo 'todo ok';

// Cerrar la conexión
$enlace->close();
?>
