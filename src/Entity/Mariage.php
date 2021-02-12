<?php

namespace App\Entity;

use App\Repository\MariageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MariageRepository::class)
 */
class Mariage
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
    private $dateMariage;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $communeMariage;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $provinceMariage;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $collineResidenceEpoux;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $collineResidenceEpouse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ZoneResidenceEpoux;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $zoneResidenceEpouse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $communeResidenceEpoux;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $communeResidenceEpouse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $provinceResidenceEpoux;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $provinceResidenceEpouse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $occupationEpoux;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $occupationEpouse;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $numeroActeMariage;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $numeroVolume;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomCompletPereEpoux;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomCompletMereEpoux;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomCompletPereEpouse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomCompletMereEpouse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomCompletTemoinEpoux;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomCompletTemoinEpouse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresseTemoinEpoux;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresseTemoinEpouse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $professionTemoinEpoux;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $professionTemoinEpouse;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photoPreuve;

    /**
     * @ORM\ManyToOne(targetEntity=Personne::class, inversedBy="epouxmariages")
     * @ORM\JoinColumn(nullable=false)
     */
    private $personneEpoux;

    /**
     * @ORM\ManyToOne(targetEntity=Personne::class, inversedBy="epousemariages")
     * @ORM\JoinColumn(nullable=false)
     */
    private $personneEpouse;

    /**
     * @ORM\OneToOne(targetEntity=Divorce::class, mappedBy="mariage", cascade={"persist", "remove"})
     */
    private $divorce;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $status;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $typeContrat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateMariage(): ?\DateTimeInterface
    {
        return $this->dateMariage;
    }

    public function setDateMariage(\DateTimeInterface $dateMariage): self
    {
        $this->dateMariage = $dateMariage;

        return $this;
    }

    public function getCommuneMariage(): ?string
    {
        return $this->communeMariage;
    }

    public function setCommuneMariage(string $communeMariage): self
    {
        $this->communeMariage = $communeMariage;

        return $this;
    }

    public function getProvinceMariage(): ?string
    {
        return $this->provinceMariage;
    }

    public function setProvinceMariage(string $provinceMariage): self
    {
        $this->provinceMariage = $provinceMariage;

        return $this;
    }

    public function getCollineResidenceEpoux(): ?string
    {
        return $this->collineResidenceEpoux;
    }

    public function setCollineResidenceEpoux(string $collineResidenceEpoux): self
    {
        $this->collineResidenceEpoux = $collineResidenceEpoux;

        return $this;
    }

    public function getCollineResidenceEpouse(): ?string
    {
        return $this->collineResidenceEpouse;
    }

    public function setCollineResidenceEpouse(string $collineResidenceEpouse): self
    {
        $this->collineResidenceEpouse = $collineResidenceEpouse;

        return $this;
    }

    public function getZoneResidenceEpoux(): ?string
    {
        return $this->ZoneResidenceEpoux;
    }

    public function setZoneResidenceEpoux(string $ZoneResidenceEpoux): self
    {
        $this->ZoneResidenceEpoux = $ZoneResidenceEpoux;

        return $this;
    }

    public function getZoneResidenceEpouse(): ?string
    {
        return $this->zoneResidenceEpouse;
    }

    public function setZoneResidenceEpouse(string $zoneResidenceEpouse): self
    {
        $this->zoneResidenceEpouse = $zoneResidenceEpouse;

        return $this;
    }

    public function getCommuneResidenceEpoux(): ?string
    {
        return $this->communeResidenceEpoux;
    }

    public function setCommuneResidenceEpoux(string $communeResidenceEpoux): self
    {
        $this->communeResidenceEpoux = $communeResidenceEpoux;

        return $this;
    }

    public function getCommuneResidenceEpouse(): ?string
    {
        return $this->communeResidenceEpouse;
    }

    public function setCommuneResidenceEpouse(string $communeResidenceEpouse): self
    {
        $this->communeResidenceEpouse = $communeResidenceEpouse;

        return $this;
    }

    public function getProvinceResidenceEpoux(): ?string
    {
        return $this->provinceResidenceEpoux;
    }

    public function setProvinceResidenceEpoux(string $provinceResidenceEpoux): self
    {
        $this->provinceResidenceEpoux = $provinceResidenceEpoux;

        return $this;
    }

    public function getProvinceResidenceEpouse(): ?string
    {
        return $this->provinceResidenceEpouse;
    }

    public function setProvinceResidenceEpouse(string $provinceResidenceEpouse): self
    {
        $this->provinceResidenceEpouse = $provinceResidenceEpouse;

        return $this;
    }

    public function getOccupationEpoux(): ?string
    {
        return $this->occupationEpoux;
    }

    public function setOccupationEpoux(string $occupationEpoux): self
    {
        $this->occupationEpoux = $occupationEpoux;

        return $this;
    }

    public function getOccupationEpouse(): ?string
    {
        return $this->occupationEpouse;
    }

    public function setOccupationEpouse(string $occupationEpouse): self
    {
        $this->occupationEpouse = $occupationEpouse;

        return $this;
    }

    public function getNumeroActeMariage(): ?string
    {
        return $this->numeroActeMariage;
    }

    public function setNumeroActeMariage(?string $numeroActeMariage): self
    {
        $this->numeroActeMariage = $numeroActeMariage;

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

    public function getNomCompletPereEpoux(): ?string
    {
        return $this->nomCompletPereEpoux;
    }

    public function setNomCompletPereEpoux(string $nomCompletPereEpoux): self
    {
        $this->nomCompletPereEpoux = $nomCompletPereEpoux;

        return $this;
    }

    public function getNomCompletMereEpoux(): ?string
    {
        return $this->nomCompletMereEpoux;
    }

    public function setNomCompletMereEpoux(string $nomCompletMereEpoux): self
    {
        $this->nomCompletMereEpoux = $nomCompletMereEpoux;

        return $this;
    }

    public function getNomCompletPereEpouse(): ?string
    {
        return $this->nomCompletPereEpouse;
    }

    public function setNomCompletPereEpouse(string $nomCompletPereEpouse): self
    {
        $this->nomCompletPereEpouse = $nomCompletPereEpouse;

        return $this;
    }

    public function getNomCompletMereEpouse(): ?string
    {
        return $this->nomCompletMereEpouse;
    }

    public function setNomCompletMereEpouse(string $nomCompletMereEpouse): self
    {
        $this->nomCompletMereEpouse = $nomCompletMereEpouse;

        return $this;
    }

    public function getNomCompletTemoinEpoux(): ?string
    {
        return $this->nomCompletTemoinEpoux;
    }

    public function setNomCompletTemoinEpoux(string $nomCompletTemoinEpoux): self
    {
        $this->nomCompletTemoinEpoux = $nomCompletTemoinEpoux;

        return $this;
    }

    public function getNomCompletTemoinEpouse(): ?string
    {
        return $this->nomCompletTemoinEpouse;
    }

    public function setNomCompletTemoinEpouse(string $nomCompletTemoinEpouse): self
    {
        $this->nomCompletTemoinEpouse = $nomCompletTemoinEpouse;

        return $this;
    }

    public function getAdresseTemoinEpoux(): ?string
    {
        return $this->adresseTemoinEpoux;
    }

    public function setAdresseTemoinEpoux(string $adresseTemoinEpoux): self
    {
        $this->adresseTemoinEpoux = $adresseTemoinEpoux;

        return $this;
    }

    public function getAdresseTemoinEpouse(): ?string
    {
        return $this->adresseTemoinEpouse;
    }

    public function setAdresseTemoinEpouse(string $adresseTemoinEpouse): self
    {
        $this->adresseTemoinEpouse = $adresseTemoinEpouse;

        return $this;
    }

    public function getProfessionTemoinEpoux(): ?string
    {
        return $this->professionTemoinEpoux;
    }

    public function setProfessionTemoinEpoux(string $professionTemoinEpoux): self
    {
        $this->professionTemoinEpoux = $professionTemoinEpoux;

        return $this;
    }

    public function getProfessionTemoinEpouse(): ?string
    {
        return $this->professionTemoinEpouse;
    }

    public function setProfessionTemoinEpouse(string $professionTemoinEpouse): self
    {
        $this->professionTemoinEpouse = $professionTemoinEpouse;

        return $this;
    }

    public function getPhotoPreuve(): ?string
    {
        return $this->photoPreuve;
    }

    public function setPhotoPreuve(?string $photoPreuve): self
    {
        $this->photoPreuve = $photoPreuve;

        return $this;
    }

    public function getPersonneEpoux(): ?Personne
    {
        return $this->personneEpoux;
    }

    public function setPersonneEpoux(?Personne $personneEpoux): self
    {
        $this->personneEpoux = $personneEpoux;

        return $this;
    }

    public function getPersonneEpouse(): ?Personne
    {
        return $this->personneEpouse;
    }

    public function setPersonneEpouse(?Personne $personneEpouse): self
    {
        $this->personneEpouse = $personneEpouse;

        return $this;
    }

    public function getDivorce(): ?Divorce
    {
        return $this->divorce;
    }

    public function setDivorce(Divorce $divorce): self
    {
        // set the owning side of the relation if necessary
        if ($divorce->getMariage() !== $this) {
            $divorce->setMariage($this);
        }

        $this->divorce = $divorce;

        return $this;
    }

    public function __toString()
    {
        return $this->personneEpoux . ' ~ ' . $this->personneEpouse;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getTypeContrat(): ?string
    {
        return $this->typeContrat;
    }

    public function setTypeContrat(?string $typeContrat): self
    {
        $this->typeContrat = $typeContrat;

        return $this;
    }
}
