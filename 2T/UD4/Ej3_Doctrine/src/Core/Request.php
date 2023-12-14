<?php

namespace App\Core;

use App\Core\Interfaces\IRequest;

class Request implements IRequest
{
    private $route;
    private $params;


    function __construct()
    {
        $rawRoute = $_SERVER["REQUEST_URI"];
        $rawRouteElements = explode("/", $rawRoute);
        $this->route = "/" . $rawRouteElements[5];
        $this->params = array_slice($rawRouteElements, 6);
    }

    /**
     * Get the value of route
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * Get the value of params
     */
    public function getParams()
    {
        return $this->params;
    }
}
