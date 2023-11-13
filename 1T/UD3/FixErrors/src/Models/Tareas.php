<?php

namespace App\Models;

use App\Core\Interfaces\IDataBase;

class Tareas
{
    private IDatabase $database;
    public function __construct(IDatabase $database)
    {
        $this->database = $database;  
    }
    public function findAll(){
        $sql = "SELECT * FROM tareas";
        return $this->database->executeSQL($sql);
    }

    public function findById($id){
        $sql = "SELECT * FROM tareas WHERE id=$id";
        return array_shift($this->database->executeSQL($sql));
    }

}
