<?php

namespace Ferran\App\Models;

use Ferran\App\Core\DataBase;
use PDO;
use PDOException;

class ListModel
{
    private $dbInstance;

    public function __construct(DataBase $dbInstance)
    {
        // $dbInstance = ;
        // $this->dbInstance = DataBase::getInstance();
    }

    /**
     * Retrieves all tasks from the database
     *
     * @return Array an associated array with all the tasks represented by keys
     */
    public function getAllTasks(): array
    {

        try {
            $query = "SELECT titulo, fecha_vencimiento FROM tareas";
            $statement = $this->dbInstance->prepare($query);
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
}
