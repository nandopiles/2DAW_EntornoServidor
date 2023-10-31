<?php

class SayingModel
{
    private $sayings = [
        "A quien madruga, Dios le ayuda",
        "No hay mal que por bien no venga",
        "De tal palo, tal astilla",
        "En casa del herrero cuchara de palo",
        "El que no corre, vuela",
        "A lo hecho, pecho",
        "Ojo por ojo, diente por diente",
        "A rey muerto, rey puesto"
    ];

    /**
     * say a random saying of the database
     *
     * @return String a random saying
     */
    public function saySaying()
    {
        $randomKey = array_rand($this->getSayings());
        return $this->getSayings()[$randomKey];
    }


    /**
     * Get the value of sayings
     */
    public function getSayings()
    {
        return $this->sayings;
    }
}
