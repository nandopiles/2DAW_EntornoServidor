<?php
namespace App\Core\Interfaces;

interface IDataBase{
    public function executeSQL($sql);
}