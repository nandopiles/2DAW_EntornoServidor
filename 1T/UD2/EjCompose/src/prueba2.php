<?php
// Configuración de la conexión
$host = "127.0.0.1";
$usuario = "root";
$contrasena = "root";
$base_de_datos = "todolist";

// Establecer la conexión
$enlace = new mysqli($host, $usuario, $contrasena, $base_de_datos);

// Verificar la conexión
if ($enlace->connect_error) {
    die("Error de conexión: " . $enlace->connect_error);
}
echo 'todo ok';

// Cerrar la conexión
$enlace->close();
