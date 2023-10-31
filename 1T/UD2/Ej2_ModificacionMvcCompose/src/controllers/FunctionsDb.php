<?php

class FunctionsDb
{
    private $link;

    public function __construct($link)
    {
        try {
            $this->link = $link;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function select1()
    {
        $query = "SELECT titulo, fecha_vencimiento FROM tareas";
        // Preparar la consulta
        $statement = $this->getLink()->prepare($query);

        // Ejecutar la consulta
        $statement->execute();

        // Obtener y mostrar los resultados
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            echo "<b>Titulo:</b> " . $row['titulo'] . "<br><b>Fecha Vencimiento:</b> " . $row['fecha_vencimiento'] . "<br>" . "________________________________<br>";
        }
    }

    public function select2($id)
    {
        $query = "SELECT * FROM tareas WHERE id=$id";
        // Preparar la consulta
        $statement = $this->getLink()->prepare($query);

        // Ejecutar la consulta
        $statement->execute();

        // Obtener y mostrar los resultados
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            echo "<b>Id:</b> ". $id . "<br>";
            echo "________________________________<br>";
            echo "<b>Titulo:</b> " . $row['titulo'] . "<br>";
            echo "<b>Descripción:</b> " . $row['descripcion'] . "<br>";
            echo "<b>Fecha Creación:</b> " . $row['fecha_creacion'] . "<br>";
            echo "<b>Fecha Vencimiento:</b> " . $row['fecha_vencimiento'] . "<br>";
            echo "________________________________<br>";
        }
    }

    /**
     * Get the value of link
     */
    public function getLink()
    {
        return $this->link;
    }
}
