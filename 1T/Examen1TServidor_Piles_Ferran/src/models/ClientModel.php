<?php

namespace Ferran\App\Models;

use Ferran\App\Core\DataBase;
use Ferran\App\Core\Interfaces\IDataBase;
use PDO;
use PDOException;

class ClientModel implements IDataBase
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
     * Retrieves all clients from the database
     *
     * @return Array an associated array with all the clients represented by keys
     */
    public function findAll(): array
    {
        try {
            $query = "SELECT cliente_cod, nombre, ciudad FROM CLIENTE";
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
     * Retrieves an specific id that it will use for searching a specific employee from the database
     *
     * @param  int $id the id of the client you want to search.
     * @return array
     */
    public function find($id): array
    {
        try {
            $query = "SELECT cliente_cod, nombre, direc, ciudad, estado, cod_postal, area, telefono, repr_cod, limite_credito, observaciones FROM CLIENTE WHERE cliente_cod = :id";
            $statement = $this->getDbInstance()->prepare($query);
            $statement->bindParam(':id', $id, PDO::PARAM_INT);
            $statement->execute();

            $result = array();
            while ($row = $statement->fetch(PDO::FETCH_ASSOC))
                $result[] = $row;

            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return array();
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
