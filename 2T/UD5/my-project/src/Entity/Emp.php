<?php

namespace App\Entity;

use App\Repository\EmpRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EmpRepository::class)]
#[ORM\Table(name: "EMP")]
class Emp
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "AUTO")]
    #[ORM\Column(type: "integer", nullable: false, options: ["unsigned" => true])]
    private int $EMP_NO;

    #[ORM\Column(type: "string", length: 10, nullable: false)]
    private string $APELLIDOS;

    #[ORM\Column(type: "string", length: 10, nullable: true)]
    private ?string $OFICIO;

    #[ORM\Column(type: "integer", nullable: true, options: ["unsigned" => true])]
    private ?int $JEFE;

    #[ORM\Column(type: "datetime", nullable: true)]
    private ?\DateTimeInterface $FECHA_ALTA;

    #[ORM\Column(type: "integer", nullable: true, options: ["unsigned" => true])]
    private ?int $SALARIO;

    #[ORM\Column(type: "integer", nullable: true, options: ["unsigned" => true])]
    private ?int $COMISION;

    #[ORM\Column(type: "integer", nullable: false, options: ["unsigned" => true])]
    private int $DEPT_NO;

    /**
     * Get the value of EMP_NO
     */
    public function getEMP_NO()
    {
        return $this->EMP_NO;
    }

    /**
     * Set the value of EMP_NO
     *
     * @return  self
     */
    public function setEMP_NO($EMP_NO)
    {
        $this->EMP_NO = $EMP_NO;

        return $this;
    }

    /**
     * Get the value of APELLIDOS
     */
    public function getAPELLIDOS()
    {
        return $this->APELLIDOS;
    }

    /**
     * Set the value of APELLIDOS
     *
     * @return  self
     */
    public function setAPELLIDOS($APELLIDOS)
    {
        $this->APELLIDOS = $APELLIDOS;

        return $this;
    }

    /**
     * Get the value of OFICIO
     */
    public function getOFICIO()
    {
        return $this->OFICIO;
    }

    /**
     * Set the value of OFICIO
     *
     * @return  self
     */
    public function setOFICIO($OFICIO)
    {
        $this->OFICIO = $OFICIO;

        return $this;
    }

    /**
     * Get the value of JEFE
     */
    public function getJEFE()
    {
        return $this->JEFE;
    }

    /**
     * Set the value of JEFE
     *
     * @return  self
     */
    public function setJEFE($JEFE)
    {
        $this->JEFE = $JEFE;

        return $this;
    }

    /**
     * Get the value of FECHA_ALTA
     */
    public function getFECHA_ALTA()
    {
        return $this->FECHA_ALTA;
    }

    /**
     * Set the value of FECHA_ALTA
     *
     * @return  self
     */
    public function setFECHA_ALTA($FECHA_ALTA)
    {
        $this->FECHA_ALTA = $FECHA_ALTA;

        return $this;
    }

    /**
     * Get the value of SALARIO
     */
    public function getSALARIO()
    {
        return $this->SALARIO;
    }

    /**
     * Set the value of SALARIO
     *
     * @return  self
     */
    public function setSALARIO($SALARIO)
    {
        $this->SALARIO = $SALARIO;

        return $this;
    }

    /**
     * Get the value of COMISION
     */
    public function getCOMISION()
    {
        return $this->COMISION;
    }

    /**
     * Set the value of COMISION
     *
     * @return  self
     */
    public function setCOMISION($COMISION)
    {
        $this->COMISION = $COMISION;

        return $this;
    }

    /**
     * Get the value of DEPT_NO
     */
    public function getDEPT_NO()
    {
        return $this->DEPT_NO;
    }

    /**
     * Set the value of DEPT_NO
     *
     * @return  self
     */
    public function setDEPT_NO($DEPT_NO)
    {
        $this->DEPT_NO = $DEPT_NO;

        return $this;
    }
}
