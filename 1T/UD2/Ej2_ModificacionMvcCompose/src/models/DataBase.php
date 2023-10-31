<?php

class DataBase
{
    private $host;
    private $user;
    private $password;
    private $dbName;
    private $link;

    public function __construct()
    {
        try {
            // read the JSON file
            $configFile = file_get_contents(__DIR__ . '/../../config/config.json');
            // decode the JSON into an associative array
            $config = json_decode($configFile, true); // true => convert to associative array
            // get the details of the connection
            $this->host = $config['serverName'];
            $this->user = $config['userName'];
            $this->password = $config['password'];
            $this->dbName = $config['dbName'];

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
