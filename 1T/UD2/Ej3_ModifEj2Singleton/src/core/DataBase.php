<?php

namespace Ferran\App\Core;

use Ferran\App\Core\Interfaces\IDataBase\IDataBase;
use PDO;
use PDOException;


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
     * Get the Singleton PDO instance for database connection.
     *
     * Provides a single point of access to the PDO database connection instance.
     * If the instance doesn't exist, it creates one and returns it.
     *
     * @return PDO The Singleton PDO instance for database connection.
     */
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance->getLink();
    }

    public function executeSQL(string $sql)
    {
        
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
