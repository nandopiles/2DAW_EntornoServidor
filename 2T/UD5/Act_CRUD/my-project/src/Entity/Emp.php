<?php

namespace App\Entity;

use App\Repository\EmpRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    #[ORM\Column(type: Types::INTEGER, nullable: true)]
    private ?int $jefe = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $fecha_alta = null;

    #[ORM\Column(nullable: true)]
    private ?int $salario = null;

    #[ORM\Column(nullable: true)]
    private ?int $comision = null;

    #[ORM\Column]
    private ?int $dept_no = null;

    #[ORM\OneToMany(mappedBy: 'repr_cod', targetEntity: Cliente::class)]
    private Collection $clientes;

    public function __construct()
    {
        $this->clientes = new ArrayCollection();
    }

    public function getEmp_no(): ?int
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

    public function getFechaAlta(): ?\DateTimeInterface
    {
        return $this->fecha_alta;
    }

    public function setFechaAlta(?\DateTimeInterface $fecha_alta): static
    {
        $this->fecha_alta = $fecha_alta;

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

    public function getComision(): ?int
    {
        return $this->comision;
    }

    public function setComision(?int $comision): static
    {
        $this->comision = $comision;

        return $this;
    }

    public function getDeptNo(): ?int
    {
        return $this->dept_no;
    }

    public function setDeptNo(int $dept_no): static
    {
        $this->dept_no = $dept_no;

        return $this;
    }

    /**
     * @return Collection<int, Cliente>
     */
    public function getClientes(): Collection
    {
        return $this->clientes;
    }

    public function addCliente(Cliente $cliente): static
    {
        if (!$this->clientes->contains($cliente)) {
            $this->clientes->add($cliente);
            $cliente->setReprCod($cliente->getReprCod());
        }

        return $this;
    }

    public function removeCliente(Cliente $cliente): static
    {
        if ($this->clientes->removeElement($cliente)) {
            // set the owning side to null (unless already changed)
            if ($cliente->getReprCod() === $this) {
                $cliente->setReprCod(null);
            }
        }

        return $this;
    }
}
