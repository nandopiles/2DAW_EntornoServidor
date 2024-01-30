<?php

namespace App\Entity;

use App\Repository\DeptRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DeptRepository::class)]
class Dept
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 14)]
    private ?string $dnombre = null;

    #[ORM\Column(length: 14, nullable: true)]
    private ?string $loc = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $color = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDnombre(): ?string
    {
        return $this->dnombre;
    }

    public function setDnombre(string $dnombre): static
    {
        $this->dnombre = $dnombre;

        return $this;
    }

    public function getLoc(): ?string
    {
        return $this->loc;
    }

    public function setLoc(?string $loc): static
    {
        $this->loc = $loc;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): static
    {
        $this->color = $color;

        return $this;
    }
}
