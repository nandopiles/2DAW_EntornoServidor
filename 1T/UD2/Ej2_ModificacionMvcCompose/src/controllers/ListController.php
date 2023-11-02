<?php

namespace Ferran\App\Controllers;

use PDO;
use PDOException;


class ListController
{
    private $model;
    private $view;

    public function __construct($model, $view)
    {
        $this->model = $model;
        $this->view = $view;
    }

    /**
     * retrieve all tasks from the database
     *
     * @return Array an associated array with all the tasks represented by keys
     */
    public function getAllTasks(): array
    {
        try {
            $query = "SELECT titulo, fecha_vencimiento FROM tareas";
            $statement = $this->getModel()->getLink()->prepare($query);
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
