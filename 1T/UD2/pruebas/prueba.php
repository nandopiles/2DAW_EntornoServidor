<?php
try {
    // Conexión a la base de datos utilizando PDO
    //$pdo = new PDO("mysql:host=localhost;port=3306;dbname=todolist2;", "root", "root");

    //$pdo = new PDO("mysql:127.0.0.1=localhost;dbname=todolist2", "root", "root");
    
    // Configurar el modo de error de PDO para lanzar excepciones
    
    
     // Conexión a la base de datos utilizando PDO
     $serverName = '172.24.0.2';
     $userName = 'root';
     $password = 'root';
     $dbName = 'midb';

     
    $pdo = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
    // Consulta SQL
    $query = "SELECT titulo, descripcion FROM tareas";
    
    // Preparar la consulta
    $statement = $pdo->prepare($query);
    
    // Ejecutar la consulta
    $statement->execute();
    
    // Obtener y mostrar los resultados
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        echo "Titulo: " . $row['titulo'] . " Descripcion: " . $row['descripcion'] . "<br>";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>



