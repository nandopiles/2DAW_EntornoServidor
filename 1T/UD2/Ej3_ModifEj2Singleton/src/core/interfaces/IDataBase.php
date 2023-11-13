<?php

namespace Ferran\App\Core\Interfaces\IDataBase;

interface IDataBase
{
    public function executeSQL(String $sql);
}
