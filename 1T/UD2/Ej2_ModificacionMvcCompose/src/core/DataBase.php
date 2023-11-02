<?php

namespace Ferran\App\Core;

use PDO;
use PDOException;


class DataBase
{
    private $host;
    private $user;
    private $password;
    private $dbName;
    private $link;

    public function __construct()
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
     * connect with the database getting the config specified
     *
     * @return void
     */
    public function connect()
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
     * Get the value of link
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Get the value of dbName
     */
    public function getDbName()
    {
        return $this->dbName;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Get the value of user
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Get the value of host
     */
    public function getHost()
    {
        return $this->host;
    }
}
