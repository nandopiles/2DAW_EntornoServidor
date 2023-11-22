<?php

namespace Ferran\App\Core;

use Ferran\App\Core\Interfaces\IDataBase;
use PDO;
use PDOException;
use PDOStatement;

class DataBase implements IDataBase
{
    private static $instance = null;
    private $host;
    private $user;
    private $password;
    private $dbName;
    private $link;

    private function __construct()
    {
        // decode the JSON into an associative array
        $config = json_decode(file_get_contents(__DIR__ . '/../../config/config.json'), true); // true => convert to associative array
        // get the details of the connection
        $this->host = $config['serverName'];
        $this->user = $config['userName'];
        $this->password = $config['password'];
        $this->dbName = $config['dbName'];
        $this->connect();
    }

    /**
     * Connects with the database getting the config specified
     *
     * @return void
     */
    private function connect()
    {
        try {
            // $this->link = new mysqli($this->getHost(), $this->getUser(), $this->getPassword(), $this->getDbName());
            $this->link = new PDO("mysql:host=" . $this->getHost() . ";dbname=" . $this->getDbName(), $this->getUser(), $this->getPassword());
            $this->link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    /**
     * Gets the instance of the class (Singleton pattern).
     *
     * @return self Returns the single instance of the class.
     */
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * Does a SQL query and return the result.
     *
     * @param  String $sql
     * @return PDOStatement
     */
    public function executeSQL(string $sql): PDOStatement
    {
        $statement = $this->getLink()->prepare($sql);
        $statement->execute();

        return $statement;
    }

    /**
     * Gets the value of link
     */
    private function getLink()
    {
        return $this->link;
    }

    /**
     * Gets the value of dbName
     */
    private function getDbName()
    {
        return $this->dbName;
    }

    /**
     * Gets the value of password
     */
    private function getPassword()
    {
        return $this->password;
    }

    /**
     * Gets the value of user
     */
    private function getUser()
    {
        return $this->user;
    }

    /**
     * Gets the value of host
     */
    private function getHost()
    {
        return $this->host;
    }
}
