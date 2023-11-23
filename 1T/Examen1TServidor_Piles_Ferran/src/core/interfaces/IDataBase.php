<?php

namespace Ferran\App\Core\Interfaces;


interface IDataBase
{
    public function findAll();
    public function find($id);
}
