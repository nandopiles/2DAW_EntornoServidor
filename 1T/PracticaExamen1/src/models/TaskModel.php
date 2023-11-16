<?php

namespace Ferran\App\Models;

use Ferran\App\Core\DataBase;
use PDO;
use PDOException;

class TaskModel
{
    private $dbInstance;

    /**
     * __construct gets the instance of the connection (Singleton's Model).
     *
     * @return void
     */
    public function __construct()
    {
        $this->setDbInstance(DataBase::getInstance());
    }

    /**
     * Retrieves all tasks from the database
     *
     * @return Array an associated array with all the tasks represented by keys
     */
    public function getAllTasks(): array
    {
        try {
            $query = "SELECT id, titulo, descripcion, fecha_creacion, fecha_vencimiento FROM tareas";
            $statement = $this->getDbInstance()->prepare($query);
            $statement->execute();

            // Get and store the results
            $result = array();
            while ($row = $statement->fetch(PDO::FETCH_ASSOC))
                $result[] = $row;

            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return array(); // returns an empty array if smth goes wrong
        }
    }

    /**
     * Set the value of dbInstance
     *
     * @return  self
     */
    public function setDbInstance($dbInstance)
    {
        $this->dbInstance = $dbInstance;

        return $this;
    }

    /**
     * Get the value of dbInstance
     */
    public function getDbInstance()
    {
        return $this->dbInstance;
    }
}
