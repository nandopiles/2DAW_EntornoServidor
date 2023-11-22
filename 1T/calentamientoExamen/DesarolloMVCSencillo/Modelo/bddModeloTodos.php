<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once(__DIR__ ."../../dbUtil.php");
class BddModeloTodos{

    public function obtenerTodosLosDatos() {
            $model = dbUtil::getInstance(); // Usar el Singleton para obtener la instancia
            
            $con = $model->getConnection(); // Obtener la conexión
            
            // Consulta SQL para seleccionar todos los registros de una tabla 
            $query = "SELECT * FROM tareas";
        
            $result = $con->query($query);
            
            if ($result) {
                if($result->num_rows > 0){
                    $arrayNuev=array();
                    while ($row = $result->fetch_assoc()) {
                        // Agregar cada fila de datos al arreglo
                        
                        $arrayNuev[]=$row;
                    }
                    return $arrayNuev;
                }
              
            }else{
                echo"Errrrrror";
            }
    
            
        }
}



?>