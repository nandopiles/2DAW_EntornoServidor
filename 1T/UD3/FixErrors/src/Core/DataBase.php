<?php

namespace App\Core;

use App\Core\Interfaces\IDataBase;

class DataBase implements IDataBase
{
    private $dbConfig;
    private $conn;
    public function __construct()
    {
        $this->dbConfig = json_decode(file_get_contents(__DIR__ . "/../../config/dbConfig.json"), true);
        $this->connect();
    }
    private function connect()
    {
        $servername = $this->dbConfig["server"];
        $username = $this->dbConfig["user"];
        $password = $this->dbConfig["password"];
        $dbName = $this->dbConfig["dbname"];
        echo $servername;

        // Create connection
        $this->conn = new \mysqli($servername, $username, $password, $dbName);
    }

    public function executeSQL($sql)
    {
        return $this->conn->query($sql)->fetch_all(MYSQLI_ASSOC);
    }
    public function __destruct()
    {
        if ($this->conn != null) $this->conn->close();
    }
}
