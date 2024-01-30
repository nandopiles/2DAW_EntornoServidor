<?php

namespace App\Entity;

use App\Repository\EmpRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EmpRepository::class)]
class Emp
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "emp_no", type: "integer")]
    private ?int $id = null;

    #[ORM\Column(length: 10)]
    private ?string $apellidos = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $oficio = null;

    #[ORM\Column(nullable: true)]
    private ?int $jefe = null;

    #[ORM\Column(nullable: true)]
    private ?int $salario = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $fehca_alta = null;

    #[ORM\Column(nullable: true)]
    private ?int $comision = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getApellidos(): ?string
    {
        return $this->apellidos;
    }

    public function setApellidos(string $apellidos): static
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    public function getOficio(): ?string
    {
        return $this->oficio;
    }

    public function setOficio(?string $oficio): static
    {
        $this->oficio = $oficio;

        return $this;
    }

    public function getJefe(): ?int
    {
        return $this->jefe;
    }

    public function setJefe(?int $jefe): static
    {
        $this->jefe = $jefe;

        return $this;
    }

    public function getSalario(): ?int
    {
        return $this->salario;
    }

    public function setSalario(?int $salario): static
    {
        $this->salario = $salario;

        return $this;
    }

    public function getFehcaAlta(): ?\DateTimeInterface
    {
        return $this->fehca_alta;
    }

    public function setFehcaAlta(?\DateTimeInterface $fehca_alta): static
    {
        $this->fehca_alta = $fehca_alta;

        return $this;
    }

    public function getComision(): ?int
    {
        return $this->comision;
    }

    public function setComision(?int $comision): static
    {
        $this->comision = $comision;

        return $this;
    }
}
