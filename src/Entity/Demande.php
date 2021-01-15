<?php

namespace App\Entity;

use App\Repository\DemandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DemandeRepository::class)
 */
class Demande
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
    private $dateDemande;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieuDemande;

   /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $fraisTotalDemande;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $numeroRecuPaiement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $statusDemande;

    /**
     * @ORM\OneToMany(targetEntity=DetailDemande::class, mappedBy="demande", orphanRemoval=true)
     */
    private $detailDemandes;

    /**
     * @ORM\ManyToOne(targetEntity=Personne::class, inversedBy="demandes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $personne;

    public function __construct()
    {
        $this->detailDemandes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateDemande(): ?\DateTimeInterface
    {
        return $this->dateDemande;
    }

    public function setDateDemande(\DateTimeInterface $dateDemande): self
    {
        $this->dateDemande = $dateDemande;

        return $this;
    }

    public function getLieuDemande(): ?string
    {
        return $this->lieuDemande;
    }

    public function setLieuDemande(string $lieuDemande): self
    {
        $this->lieuDemande = $lieuDemande;

        return $this;
    }

    public function getFraisTotalDemande(): ?float
    {
        return $this->fraisTotalDemande;
    }

    public function setFraisTotalDemande(?float $fraisTotalDemande): self
    {
        $this->fraisTotalDemande = $fraisTotalDemande;

        return $this;
    }

    public function getNumeroRecuPaiement(): ?string
    {
        return $this->numeroRecuPaiement;
    }

    public function setNumeroRecuPaiement(?string $numeroRecuPaiement): self
    {
        $this->numeroRecuPaiement = $numeroRecuPaiement;

        return $this;
    }

    public function getStatusDemande(): ?string
    {
        return $this->statusDemande;
    }

    public function setStatusDemande(string $statusDemande): self
    {
        $this->statusDemande = $statusDemande;

        return $this;
    }

    /**
     * @return Collection|DetailDemande[]
     */
    public function getDetailDemandes(): Collection
    {
        return $this->detailDemandes;
    }

    public function addDetailDemande(DetailDemande $detailDemande): self
    {
        if (!$this->detailDemandes->contains($detailDemande)) {
            $this->detailDemandes[] = $detailDemande;
            $detailDemande->setDemande($this);
        }

        return $this;
    }

    public function removeDetailDemande(DetailDemande $detailDemande): self
    {
        if ($this->detailDemandes->removeElement($detailDemande)) {
            // set the owning side to null (unless already changed)
            if ($detailDemande->getDemande() === $this) {
                $detailDemande->setDemande(null);
            }
        }

        return $this;
    }

    public function getPersonne(): ?Personne
    {
        return $this->personne;
    }

    public function setPersonne(?Personne $personne): self
    {
        $this->personne = $personne;

        return $this;
    }
}
