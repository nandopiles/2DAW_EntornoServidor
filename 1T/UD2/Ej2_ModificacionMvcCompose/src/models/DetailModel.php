<?php

namespace Ferran\App\Models;

use Ferran\App\Core\DataBase;
use PDO;
use PDOException;

class DetailModel extends DataBase
{
    /**
     * Retrieves a specific task from the database
     *
     * @param  number $id
     * @return Array an associated array with the task represented by keys
     */
    public function getTaskById(int $id): array
    {
        try {
            $query = "SELECT * FROM tareas WHERE id=$id";
            $statement = $this->getLink()->prepare($query);
            $statement->execute();

            // Get and store the result
            $result = array();
            while ($row = $statement->fetch(PDO::FETCH_ASSOC))
                $result[] = $row;

            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return array(); // returns an empty array
        }
    }
}
