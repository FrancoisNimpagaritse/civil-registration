<?php

namespace App\Entity;

use App\Repository\DetailDemandeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DetailDemandeRepository::class)
 */
class DetailDemande
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantite;

    /**
     * @ORM\Column(type="float")
     */
    private $fraisUnitaire;

    /**
     * @ORM\ManyToOne(targetEntity=Demande::class, inversedBy="detailDemandes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $demande;

    /**
     * @ORM\ManyToOne(targetEntity=Document::class, inversedBy="detailDemandes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $document;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $ligne;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $numeroActe;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $numeroVolume;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getFraisUnitaire(): ?float
    {
        return $this->fraisUnitaire;
    }

    public function setFraisUnitaire(float $fraisUnitaire): self
    {
        $this->fraisUnitaire = $fraisUnitaire;

        return $this;
    }

    public function getDemande(): ?Demande
    {
        return $this->demande;
    }

    public function setDemande(?Demande $demande): self
    {
        $this->demande = $demande;

        return $this;
    }

    public function getDocument(): ?Document
    {
        return $this->document;
    }

    public function setDocument(?Document $document): self
    {
        $this->document = $document;

        return $this;
    }

    public function getLigne(): ?string
    {
        return $this->ligne;
    }

    public function setLigne(string $ligne): self
    {
        $this->ligne = $ligne;

        return $this;
    }

    public function getNumeroActe(): ?string
    {
        return $this->numeroActe;
    }

    public function setNumeroActe(?string $numeroActe): self
    {
        $this->numeroActe = $numeroActe;

        return $this;
    }

    public function getNumeroVolume(): ?string
    {
        return $this->numeroVolume;
    }

    public function setNumeroVolume(?string $numeroVolume): self
    {
        $this->numeroVolume = $numeroVolume;

        return $this;
    }
}
