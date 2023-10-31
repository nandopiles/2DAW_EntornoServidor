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

    /**
     * Get the value of link
     */
    public function getLink()
    {
        return $this->link;
    }
}
