<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientRepository::class)
 * @ORM\Table(name="CLIENTE")
 */
class Client
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer", nullable=false, options={"unsigned"=true})
     */
    private $CLIENTE_COD;

    /** @ORM\Column(type="string", length="45") */
    private $NOMBRE;

    /** @ORM\Column(type="string", length="40") */
    private $DIREC;

    /** @ORM\Column(type="string", length="30") */
    private $CIUDAD;

    /** @ORM\Column(type="string", length="2", nullable=true, options={"default" : NULL}) */
    private $ESTADO;

    /** @ORM\Column(type="string", length="9") */
    private $COD_POSTAL;

    /** @ORM\Column(type="integer", nullable=true, options={"default" : NULL}) */
    private $AREA;

    /** @ORM\Column(type="string", length="9", options={"default" : NULL}) */
    private $TELEFONO;

    /**
     * @ORM\Column(type="integer", nullable=true, options={"unsigned"=true, "default"=NULL})
     */
    private $REPR_COD;

    /**
     * @ORM\Column(type="decimal", precision=9, scale=2, nullable=true, options={"unsigned"=true, "default"=NULL})
     */
    private $LIMITE_CREDITO;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $OBSERVACIONES;


    /**
     * Get the value of CLIENTE_COD
     */
    public function getCLIENTE_COD()
    {
        return $this->CLIENTE_COD;
    }

    /**
     * Set the value of CLIENTE_COD
     *
     * @return  self
     */
    public function setCLIENTE_COD($CLIENTE_COD)
    {
        $this->CLIENTE_COD = $CLIENTE_COD;

        return $this;
    }

    /**
     * Get the value of NOMBRE
     */
    public function getNOMBRE()
    {
        return $this->NOMBRE;
    }

    /**
     * Set the value of NOMBRE
     *
     * @return  self
     */
    public function setNOMBRE($NOMBRE)
    {
        $this->NOMBRE = $NOMBRE;

        return $this;
    }

    /**
     * Get the value of DIREC
     */
    public function getDIREC()
    {
        return $this->DIREC;
    }

    /**
     * Set the value of DIREC
     *
     * @return  self
     */
    public function setDIREC($DIREC)
    {
        $this->DIREC = $DIREC;

        return $this;
    }

    /**
     * Get the value of CIUDAD
     */
    public function getCIUDAD()
    {
        return $this->CIUDAD;
    }

    /**
     * Set the value of CIUDAD
     *
     * @return  self
     */
    public function setCIUDAD($CIUDAD)
    {
        $this->CIUDAD = $CIUDAD;

        return $this;
    }

    /**
     * Get the value of ESTADO
     */
    public function getESTADO()
    {
        return $this->ESTADO;
    }

    /**
     * Set the value of ESTADO
     *
     * @return  self
     */
    public function setESTADO($ESTADO)
    {
        $this->ESTADO = $ESTADO;

        return $this;
    }

    /**
     * Get the value of COD_POSTAL
     */
    public function getCOD_POSTAL()
    {
        return $this->COD_POSTAL;
    }

    /**
     * Set the value of COD_POSTAL
     *
     * @return  self
     */
    public function setCOD_POSTAL($COD_POSTAL)
    {
        $this->COD_POSTAL = $COD_POSTAL;

        return $this;
    }

    /**
     * Get the value of AREA
     */
    public function getAREA()
    {
        return $this->AREA;
    }

    /**
     * Set the value of AREA
     *
     * @return  self
     */
    public function setAREA($AREA)
    {
        $this->AREA = $AREA;

        return $this;
    }

    /**
     * Get the value of TELEFONO
     */
    public function getTELEFONO()
    {
        return $this->TELEFONO;
    }

    /**
     * Set the value of TELEFONO
     *
     * @return  self
     */
    public function setTELEFONO($TELEFONO)
    {
        $this->TELEFONO = $TELEFONO;

        return $this;
    }

    /**
     * Get the value of REPR_COD
     */
    public function getREPR_COD()
    {
        return $this->REPR_COD;
    }

    /**
     * Set the value of REPR_COD
     *
     * @return  self
     */
    public function setREPR_COD($REPR_COD)
    {
        $this->REPR_COD = $REPR_COD;

        return $this;
    }

    /**
     * Get the value of LIMITE_CREDITO
     */
    public function getLIMITE_CREDITO()
    {
        return $this->LIMITE_CREDITO;
    }

    /**
     * Set the value of LIMITE_CREDITO
     *
     * @return  self
     */
    public function setLIMITE_CREDITO($LIMITE_CREDITO)
    {
        $this->LIMITE_CREDITO = $LIMITE_CREDITO;

        return $this;
    }

    /**
     * Get the value of OBSERVACIONES
     */
    public function getOBSERVACIONES()
    {
        return $this->OBSERVACIONES;
    }

    /**
     * Set the value of OBSERVACIONES
     *
     * @return  self
     */
    public function setOBSERVACIONES($OBSERVACIONES)
    {
        $this->OBSERVACIONES = $OBSERVACIONES;

        return $this;
    }
}
