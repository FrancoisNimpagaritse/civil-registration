<?php

namespace App\Entity;

use App\Repository\DecesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DecesRepository::class)
 */
class Deces
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
    private $dateDeces;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieuDeces;

    /**
     * @ORM\Column(type="date")
     */
    private $dateEnregistrementDeces;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $causeDeces;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomCompletDemandeur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adresseDemandeur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $phoneDemandeur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $copieCertificatDeces;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $numeroActeDeces;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $numeroVolume;

    /**
     * @ORM\OneToOne(targetEntity=Personne::class, inversedBy="deces", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $personne;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateDeces(): ?\DateTimeInterface
    {
        return $this->dateDeces;
    }

    public function setDateDeces(\DateTimeInterface $dateDeces): self
    {
        $this->dateDeces = $dateDeces;

        return $this;
    }

    public function getLieuDeces(): ?string
    {
        return $this->lieuDeces;
    }

    public function setLieuDeces(string $lieuDeces): self
    {
        $this->lieuDeces = $lieuDeces;

        return $this;
    }

    public function getDateEnregistrementDeces(): ?\DateTimeInterface
    {
        return $this->dateEnregistrementDeces;
    }

    public function setDateEnregistrementDeces(\DateTimeInterface $dateEnregistrementDeces): self
    {
        $this->dateEnregistrementDeces = $dateEnregistrementDeces;

        return $this;
    }

    public function getCauseDeces(): ?string
    {
        return $this->causeDeces;
    }

    public function setCauseDeces(string $causeDeces): self
    {
        $this->causeDeces = $causeDeces;

        return $this;
    }

    public function getNomCompletDemandeur(): ?string
    {
        return $this->nomCompletDemandeur;
    }

    public function setNomCompletDemandeur(string $nomCompletDemandeur): self
    {
        $this->nomCompletDemandeur = $nomCompletDemandeur;

        return $this;
    }

    public function getAdresseDemandeur(): ?string
    {
        return $this->adresseDemandeur;
    }

    public function setAdresseDemandeur(?string $adresseDemandeur): self
    {
        $this->adresseDemandeur = $adresseDemandeur;

        return $this;
    }

    public function getPhoneDemandeur(): ?string
    {
        return $this->phoneDemandeur;
    }

    public function setPhoneDemandeur(?string $phoneDemandeur): self
    {
        $this->phoneDemandeur = $phoneDemandeur;

        return $this;
    }

    public function getCopieCertificatDeces(): ?string
    {
        return $this->copieCertificatDeces;
    }

    public function setCopieCertificatDeces(?string $copieCertificatDeces): self
    {
        $this->copieCertificatDeces = $copieCertificatDeces;

        return $this;
    }

    public function getNumeroActeDeces(): ?string
    {
        return $this->numeroActeDeces;
    }

    public function setNumeroActeDeces(?string $numeroActeDeces): self
    {
        $this->numeroActeDeces = $numeroActeDeces;

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

    public function getPersonne(): ?Personne
    {
        return $this->personne;
    }

    public function setPersonne(Personne $personne): self
    {
        $this->personne = $personne;

        return $this;
    }
}
