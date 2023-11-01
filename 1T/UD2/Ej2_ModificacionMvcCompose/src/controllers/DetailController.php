<?php

include('./src/models/DataBase.php');
include('./src/views/DetailView.php');

class DetailController
{
    private $model;
    private $view;

    public function __construct($model, $view)
    {
        $this->model = $model;
        $this->view = $view;
    }

    public function getTaskDetail($id)
    {
        try {
            $query = "SELECT * FROM tareas WHERE id=$id";
            // Preparar la consulta
            $statement = $this->getModel()->getLink()->prepare($query);

            // Exec the query
            $statement->execute();

            // Get and store the result
            $result = array();
            while ($row = $statement->fetch(PDO::FETCH_ASSOC))
                $result[] = $row;

            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return array(); // return an empty array
        }
    }

    /**
     * Get the value of model
     */
    public function getModel()
    {
        return $this->model;
    }
}
