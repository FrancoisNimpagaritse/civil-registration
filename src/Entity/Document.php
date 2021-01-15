<?php

namespace App\Entity;

use App\Repository\DocumentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DocumentRepository::class)
 */
class Document
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
    private $type;

    /**
     * @ORM\Column(type="float")
     */
    private $fraisUnitaire;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity=DetailDemande::class, mappedBy="document", orphanRemoval=true)
     */
    private $detailDemandes;

    public function __construct()
    {
        $this->detailDemandes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

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
            $detailDemande->setDocument($this);
        }

        return $this;
    }

    public function removeDetailDemande(DetailDemande $detailDemande): self
    {
        if ($this->detailDemandes->removeElement($detailDemande)) {
            // set the owning side to null (unless already changed)
            if ($detailDemande->getDocument() === $this) {
                $detailDemande->setDocument(null);
            }
        }

        return $this;
    }
}
