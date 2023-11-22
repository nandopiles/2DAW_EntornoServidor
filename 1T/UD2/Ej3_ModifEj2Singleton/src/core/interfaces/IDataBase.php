<?php

namespace Ferran\App\Core\Interfaces;

use PDOStatement;

interface IDataBase
{
    public function executeSQL(String $sql): PDOStatement;
}
