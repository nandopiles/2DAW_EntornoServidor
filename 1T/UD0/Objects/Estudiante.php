<?php

//include("./Persona.php");

class Estudiante extends Persona
{
    private $curso;

    public function __construct($nombre, $edad, $curso)
    {
        parent::__construct($nombre, $edad);
        $this->curso = $curso;
    }

    public function estudiar()
    {
        echo "{$this->getNombre()} está estudiando en el curso de {$this->getCurso()}<br>";
    }



    /**
     * Get the value of curso
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set the value of curso
     *
     * @return  self
     */
    public function setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }
}
