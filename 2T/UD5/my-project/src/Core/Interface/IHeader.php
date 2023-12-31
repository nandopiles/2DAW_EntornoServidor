<?php

namespace App\Core\Interface;

use Symfony\Component\HttpFoundation\Response;

interface IHeader
{
    public function redirectToList(): Response;
}
