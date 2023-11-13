<?php

namespace App\Core;

use App\Core\Interfaces\ISession;
use Exception;

class SessionManager implements ISession
{

    private $sessionVars;
    function __construct()
    {
        session_start();
        $this->sessionVars = json_decode(file_get_contents(__DIR__ . "/../../config/SessionVars.json"), true)["registered"];
    }

    public function __call($name, $argument = null)
    {
        $function = substr($name, 0, 3);
        $sessionVar = lcfirst(substr($name, - (strlen($name) - 3)));
        if (in_array($function, ["set", "get"]) && in_array($sessionVar, $this->sessionVars)) {
            $this->$function($sessionVar, array_shift($argument));
        } else {
            throw new Exception("La variable de sessión $sessionVar no está permitida");
        }
    }

    private function set($sessionVar, $value)
    {
        $_SESSION[$sessionVar] = $value;
    }
    private function get($sessionVar)
    {
        return isset($_SESSION[$sessionVar]) ? $_SESSION[$sessionVar] : null;
    }

    public function setTemplateEngineAvailable(&$templateEnvironment)
    {
        $templateEnvironment->addExtension(new \Twig\Extension\DebugExtension());
        if (!isset($templateEnvironment->getGlobals()["session"])) {
            $templateEnvironment->addGlobal('session', $_SESSION);
        }
    }
}
