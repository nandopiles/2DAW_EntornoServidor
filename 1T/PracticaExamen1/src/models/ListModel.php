<?php

namespace Ferran\App\Models;

use Ferran\App\Core\DataBase2;
use PDO;
use PDOException;


class ListModel
{
    private $dbInstance;

    public function __construct()
    {
        $this->setDbInstance(Database2::getInstance());
    }

    /**
     * Retrieves all people from the database
     *
     * @return Array an associated array with all the tasks represented by keys
     */
    public function getAllPeople(): array
    {
        try {
            $query = "SELECT name, age, style FROM people";
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
}
