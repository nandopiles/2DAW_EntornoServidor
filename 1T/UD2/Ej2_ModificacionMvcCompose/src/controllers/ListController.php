<?php

include('./src/models/DataBase.php');
include('./src/views/ListView.php');

class ListController
{
    private $model;
    private $view;

    public function __construct($model, $view)
    {
        $this->model = $model;
        $this->view = $view;
    }

    public function getTaskList()
    {
        try {
            $query = "SELECT titulo, fecha_vencimiento FROM tareas";
            // prepare the query
            $statement = $this->getModel()->getLink()->prepare($query);

            // Exec the query
            $statement->execute();

            // Get and store the results
            $result = array();
            while ($row = $statement->fetch(PDO::FETCH_ASSOC))
                $result[] = $row;

            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return array(); // return an empty array if smth goes wrong
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
