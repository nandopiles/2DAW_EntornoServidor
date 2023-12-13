<?php

namespace App\Entity;

use App\Repository\TasksRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TasksRepository::class)
 * @ORM\Table(name="tareas") 
 */
class Tasks
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /** @ORM\Column(type="string", length="255") */
    private $titulo;

    /** @ORM\Column(type="string") */
    private $descripcion;

    /** @ORM\Column(type="datetime") */
    private $fecha_creacion;

    /** @ORM\Column(type="datetime") */
    private $fecha_vencimiento;



    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of fecha_creacion
     */
    public function getFecha_creacion()
    {
        return $this->fecha_creacion->format('Y-m-d');
    }

    /**
     * Set the value of fecha_creacion
     *
     * @return  self
     */
    public function setFecha_creacion($fecha_creacion)
    {
        $this->fecha_creacion = $fecha_creacion;

        return $this;
    }

    /**
     * Get the value of descripcion
     */ 
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */ 
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get the value of fecha_vencimiento
     */ 
    public function getFecha_vencimiento()
    {
        return $this->fecha_vencimiento;
    }

    /**
     * Set the value of fecha_vencimiento
     *
     * @return  self
     */ 
    public function setFecha_vencimiento($fecha_vencimiento)
    {
        $this->fecha_vencimiento = $fecha_vencimiento;

        return $this;
    }
}
