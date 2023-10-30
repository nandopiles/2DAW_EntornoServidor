<?php

// read the JSON file
$configFile = file_get_contents('../config/config.json');
// decode the JSON into an associative array
$config = json_decode($configFile, true); // true => convert to associative array
// get the details of the connection
$host = $config['serverName'];
$user = $config['userName'];
$password = $config['password'];
$dataBase = $config['dbName'];

// Establecer la conexión vía librería
$link = new mysqli($host, $user, $password, $dataBase);

// Verificar la conexión
if ($link->connect_error) {
    die("Error de conexión: " . $link->connect_error);
}
echo 'todo ok';

// Cerrar la conexión
$link->close();
