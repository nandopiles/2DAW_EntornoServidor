<?php

namespace Ferran\App\Core;

use PDO;
use PDOException;



class Database2
{
    private static $instance = null;
    private $host;
    private $user;
    private $password;
    private $dbName;
    private $link;

    private function __construct()
    {
        $config = json_decode(file_get_contents(__DIR__ . '/../../config/config2.json'), true);

        $this->host = $config['host'];
        $this->user = $config['username'];
        $this->password = $config['password'];
        $this->dbName = $config['dbname'];
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
            $this->setLink(new PDO("mysql:host=" . $this->getHost() . ";dbname=" . $this->getDbName(), $this->getUser(), $this->getPassword()));
            $this->getLink()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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



    /**
     * Get the value of link
     */
    private function getLink()
    {
        return $this->link;
    }

    /**
     * Set the value of link
     *
     * @return  self
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get the value of host
     */
    private function getHost()
    {
        return $this->host;
    }

    /**
     * Get the value of user
     */
    private function getUser()
    {
        return $this->user;
    }

    /**
     * Get the value of password
     */
    private function getPassword()
    {
        return $this->password;
    }

    /**
     * Get the value of dbName
     */
    private function getDbName()
    {
        return $this->dbName;
    }
}
