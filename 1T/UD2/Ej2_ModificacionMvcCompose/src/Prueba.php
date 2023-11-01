<?php
try {
    // read the JSON file
    $configFile = file_get_contents('../config/config.json');
    // decode the JSON into an associative array
    $config = json_decode($configFile, true); // true => convert to associative array
    // get the details of the connection
    $host = $config['serverName'];
    $user = $config['userName'];
    $password = $config['password'];
    $dataBase = $config['dbName'];

    $pdo = new PDO("mysql:host=$host;dbname=$dataBase", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // consult SQL
    $query = "SELECT titulo, fecha_vencimiento FROM tareas";

    // Preparar la consulta
    $statement = $pdo->prepare($query);

    // Ejecutar la consulta
    $statement->execute();

    // Obtener y mostrar los resultados
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        echo "<b>Titulo:</b> " . $row['titulo'] . "<br><b>Fecha Vencimiento:</b> " . $row['fecha_vencimiento'] . "<br>" . "________________________________<br>";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
