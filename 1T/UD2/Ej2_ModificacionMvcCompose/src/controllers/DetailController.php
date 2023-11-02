<?php

namespace Ferran\App\Controllers;

use PDO;
use PDOException;


class DetailController
{
    private $model;
    private $view;

    public function __construct($model, $view)
    {
        $this->model = $model;
        $this->view = $view;
    }

    /**
     * retrieve a specific task from the database
     *
     * @param  number $id
     * @return Array an associated array with the task represented by keys
     */
    public function getTaskById($id): array
    {
        try {
            $query = "SELECT * FROM tareas WHERE id=$id";
            $statement = $this->getModel()->getLink()->prepare($query);
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
