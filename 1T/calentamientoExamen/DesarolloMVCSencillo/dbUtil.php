<?php
 
class dbUtil{
    
    private static $instance = null;
    private $connection;
 
    private function __construct() {
        // Recogemos los datos del archivo config
        $database = file_get_contents("./config.json");
        $config = json_decode($database, true);
        $host = $config["host"];
        $username = $config["usuario"];
        $password = $config["contrasena"];
        $dbname = $config["nombre_base_datos"];
 
        echo($host." ".$username." ".$password." ".$dbname);
        // Abrimos la conexión
        $this->connection = new mysqli($host, $username, $password, $dbname);
 
        if ($this->connection->connect_error) {
            die("Error de conexión: " . $this->connection->connect_error);
        }
    }
 
    public static function getInstance() {
        // Verifica si ya hay una instancia existente
        if (self::$instance === null) {
            // Si no existe una instancia, crea una nueva
            self::$instance = new self();
        }
        // Devuelve la instancia existente o recién creada
        return self::$instance;
    }
   
    public function getConnection() {
        // Devuelve la conexión a la base de datos
        return $this->connection;
    }
   
}
?>