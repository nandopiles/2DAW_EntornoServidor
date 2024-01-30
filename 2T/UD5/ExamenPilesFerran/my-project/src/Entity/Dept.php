<?php

namespace App\Entity;

use App\Repository\DeptRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DeptRepository::class)]
class Dept
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "dept_no", type: "integer")]
    private ?int $id = null;

    #[ORM\Column(length: 14)]
    private ?string $dnombre = null;

    #[ORM\Column(length: 14, nullable: true)]
    private ?string $loc = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $color = null;

    #[ORM\OneToMany(mappedBy: 'dept_no', targetEntity: Emp::class)]
    private Collection $emps;

    public function __construct()
    {
        $this->emps = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, Emp>
     */
    public function getEmps(): Collection
    {
        return $this->emps;
    }

    public function addEmp(Emp $emp): static
    {
        if (!$this->emps->contains($emp)) {
            $this->emps->add($emp);
            $emp->setDeptNo($this);
        }

        return $this;
    }

    public function removeEmp(Emp $emp): static
    {
        if ($this->emps->removeElement($emp)) {
            // set the owning side to null (unless already changed)
            if ($emp->getDeptNo() === $this) {
                $emp->setDeptNo(null);
            }
        }

        return $this;
    }
}
