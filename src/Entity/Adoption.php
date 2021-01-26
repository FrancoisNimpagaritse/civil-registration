<?php

namespace App\Entity;

use App\Repository\AdoptionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AdoptionRepository::class)
 */
class Adoption
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $dateAdoption;

    /**
     * @ORM\Column(type="date")
     */
    private $dateEnregistrement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity=Personne::class, inversedBy="pereAdoptions")
     */
    private $pereAdoptif;

    /**
     * @ORM\ManyToOne(targetEntity=Personne::class, inversedBy="mereAdoptions")
     */
    private $mereAdoptif;

    /**
     * @ORM\OneToOne(targetEntity=Personne::class, inversedBy="adoption", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $enfantAdopte;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateAdoption(): ?\DateTimeInterface
    {
        return $this->dateAdoption;
    }

    public function setDateAdoption(\DateTimeInterface $dateAdoption): self
    {
        $this->dateAdoption = $dateAdoption;

        return $this;
    }

    public function getDateEnregistrement(): ?\DateTimeInterface
    {
        return $this->dateEnregistrement;
    }

    public function setDateEnregistrement(\DateTimeInterface $dateEnregistrement): self
    {
        $this->dateEnregistrement = $dateEnregistrement;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getPereAdoptif(): ?Personne
    {
        return $this->pereAdoptif;
    }

    public function setPereAdoptif(?Personne $pereAdoptif): self
    {
        $this->pereAdoptif = $pereAdoptif;

        return $this;
    }

    public function getMereAdoptif(): ?Personne
    {
        return $this->mereAdoptif;
    }

    public function setMereAdoptif(?Personne $mereAdoptif): self
    {
        $this->mereAdoptif = $mereAdoptif;

        return $this;
    }

    public function getEnfantAdopte(): ?Personne
    {
        return $this->enfantAdopte;
    }

    public function setEnfantAdopte(Personne $enfantAdopte): self
    {
        $this->enfantAdopte = $enfantAdopte;

        return $this;
    }
}
