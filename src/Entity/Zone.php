<?php

namespace App\Entity;

use App\Repository\ZoneRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ZoneRepository::class)
 */
class Zone
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\OneToMany(targetEntity=Colline::class, mappedBy="zone")
     */
    private $collines;

    /**
     * @ORM\ManyToOne(targetEntity=Commune::class, inversedBy="zones")
     * @ORM\JoinColumn(nullable=false)
     */
    private $commune;

    public function __construct()
    {
        $this->collines = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return Collection|Colline[]
     */
    public function getCollines(): Collection
    {
        return $this->collines;
    }

    public function addColline(Colline $colline): self
    {
        if (!$this->collines->contains($colline)) {
            $this->collines[] = $colline;
            $colline->setZone($this);
        }

        return $this;
    }

    public function removeColline(Colline $colline): self
    {
        if ($this->collines->removeElement($colline)) {
            // set the owning side to null (unless already changed)
            if ($colline->getZone() === $this) {
                $colline->setZone(null);
            }
        }

        return $this;
    }

    public function getCommune(): ?Commune
    {
        return $this->commune;
    }

    public function setCommune(?Commune $commune): self
    {
        $this->commune = $commune;

        return $this;
    }
}
