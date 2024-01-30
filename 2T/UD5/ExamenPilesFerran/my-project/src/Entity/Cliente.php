<?php

namespace App\Entity;

use App\Repository\ClienteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClienteRepository::class)]
class Cliente
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "cliente_cod", type: "integer")]
    private ?int $id = null;

    #[ORM\Column(length: 45)]
    private ?string $nombre = null;

    #[ORM\Column(length: 40)]
    private ?string $direc = null;

    #[ORM\Column(length: 30)]
    private ?string $ciudad = null;

    #[ORM\Column(length: 2)]
    private ?string $estado = null;

    #[ORM\Column(length: 9)]
    private ?string $cod_postal = null;

    #[ORM\Column(nullable: true)]
    private ?int $area = null;

    #[ORM\Column(length: 9, nullable: true)]
    private ?string $telefono = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 9, scale: 2, nullable: true)]
    private ?string $limite_credito = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $observaciones = null;

    #[ORM\Column(nullable: true)]
    private ?int $repr_cod = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getDirec(): ?string
    {
        return $this->direc;
    }

    public function setDirec(string $direc): static
    {
        $this->direc = $direc;

        return $this;
    }

    public function getCiudad(): ?string
    {
        return $this->ciudad;
    }

    public function setCiudad(string $ciudad): static
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    public function getEstado(): ?string
    {
        return $this->estado;
    }

    public function setEstado(string $estado): static
    {
        $this->estado = $estado;

        return $this;
    }

    public function getCodPostal(): ?string
    {
        return $this->cod_postal;
    }

    public function setCodPostal(string $cod_postal): static
    {
        $this->cod_postal = $cod_postal;

        return $this;
    }

    public function getArea(): ?int
    {
        return $this->area;
    }

    public function setArea(?int $area): static
    {
        $this->area = $area;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    public function setTelefono(?string $telefono): static
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getLimiteCredito(): ?string
    {
        return $this->limite_credito;
    }

    public function setLimiteCredito(?string $limite_credito): static
    {
        $this->limite_credito = $limite_credito;

        return $this;
    }

    public function getObservaciones(): ?string
    {
        return $this->observaciones;
    }

    public function setObservaciones(?string $observaciones): static
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    public function getReprCod(): ?int
    {
        return $this->repr_cod;
    }

    public function setReprCod(int $repr_cod): static
    {
        $this->repr_cod = $repr_cod;

        return $this;
    }
}
