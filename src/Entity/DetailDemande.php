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
}
