<?php

namespace App\Entity;

use App\Repository\NaissanceRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=NaissanceRepository::class)
 * @Vich\Uploadable
 */
class Naissance
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
    private $dateNaissance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieuNaissance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $collineNaissance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $zoneNaissance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $communeNaissance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $provinceNaissance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $paysNaissance;

    /**
     * @ORM\Column(type="date")
     */
    private $dateInscription;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adressePere;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $professionMere;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresseMere;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numeroActeNaissance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numeroVolume;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomCompletTemoinUn;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresseTemoinUn;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $professionTemoinUn;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomCompletTemoinDeux;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresseTemoinDeux;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $professionTemoinDeux;

    /**
     * @ORM\OneToOne(targetEntity=Personne::class, inversedBy="naissance", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $personne;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $professionPere;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $status;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $naissanceFichierCopieIntegrale;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="naissance_image", fileNameProperty="naissanceFichierCopieIntegrale")
     * 
     * @var File|null
     */
    private $naissanceImageFile;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(\DateTimeInterface $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getLieuNaissance(): ?string
    {
        return $this->lieuNaissance;
    }

    public function setLieuNaissance(string $lieuNaissance): self
    {
        $this->lieuNaissance = $lieuNaissance;

        return $this;
    }

    public function getCollineNaissance(): ?string
    {
        return $this->collineNaissance;
    }

    public function setCollineNaissance(string $collineNaissance): self
    {
        $this->collineNaissance = $collineNaissance;

        return $this;
    }

    public function getZoneNaissance(): ?string
    {
        return $this->zoneNaissance;
    }

    public function setZoneNaissance(string $zoneNaissance): self
    {
        $this->zoneNaissance = $zoneNaissance;

        return $this;
    }

    public function getCommuneNaissance(): ?string
    {
        return $this->communeNaissance;
    }

    public function setCommuneNaissance(string $communeNaissance): self
    {
        $this->communeNaissance = $communeNaissance;

        return $this;
    }

    public function getProvinceNaissance(): ?string
    {
        return $this->provinceNaissance;
    }

    public function setProvinceNaissance(string $provinceNaissance): self
    {
        $this->provinceNaissance = $provinceNaissance;

        return $this;
    }

    public function getPaysNaissance(): ?string
    {
        return $this->paysNaissance;
    }

    public function setPaysNaissance(string $paysNaissance): self
    {
        $this->paysNaissance = $paysNaissance;

        return $this;
    }

    public function getDateInscription(): ?\DateTimeInterface
    {
        return $this->dateInscription;
    }

    public function setDateInscription(\DateTimeInterface $dateInscription): self
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    public function getAdressePere(): ?string
    {
        return $this->adressePere;
    }

    public function setAdressePere(?string $adressePere): self
    {
        $this->adressePere = $adressePere;

        return $this;
    }

    public function getProfessionMere(): ?string
    {
        return $this->professionMere;
    }

    public function setProfessionMere(string $professionMere): self
    {
        $this->professionMere = $professionMere;

        return $this;
    }

    public function getAdresseMere(): ?string
    {
        return $this->adresseMere;
    }

    public function setAdresseMere(string $adresseMere): self
    {
        $this->adresseMere = $adresseMere;

        return $this;
    }

    public function getNumeroActeNaissance(): ?string
    {
        return $this->numeroActeNaissance;
    }

    public function setNumeroActeNaissance(string $numeroActeNaissance): self
    {
        $this->numeroActeNaissance = $numeroActeNaissance;

        return $this;
    }

    public function getNumeroVolume(): ?string
    {
        return $this->numeroVolume;
    }

    public function setNumeroVolume(string $numeroVolume): self
    {
        $this->numeroVolume = $numeroVolume;

        return $this;
    }

    public function getNomCompletTemoinUn(): ?string
    {
        return $this->nomCompletTemoinUn;
    }

    public function setNomCompletTemoinUn(string $nomCompletTemoinUn): self
    {
        $this->nomCompletTemoinUn = $nomCompletTemoinUn;

        return $this;
    }

    public function getNomCompletTemoinDeux(): ?string
    {
        return $this->nomCompletTemoinDeux;
    }

    public function setNomCompletTemoinDeux(string $nomCompletTemoinDeux): self
    {
        $this->nomCompletTemoinDeux = $nomCompletTemoinDeux;

        return $this;
    }

    public function getAdresseTemoinUn(): ?string
    {
        return $this->adresseTemoinUn;
    }

    public function setAdresseTemoinUn(string $adresseTemoinUn): self
    {
        $this->adresseTemoinUn = $adresseTemoinUn;

        return $this;
    }

    public function getProfessionTemoinUn(): ?string
    {
        return $this->professionTemoinUn;
    }

    public function setProfessionTemoinUn(string $professionTemoinUn): self
    {
        $this->professionTemoinUn = $professionTemoinUn;

        return $this;
    }

    public function getAdresseTemoinDeux(): ?string
    {
        return $this->adresseTemoinDeux;
    }

    public function setAdresseTemoinDeux(string $adresseTemoinDeux): self
    {
        $this->adresseTemoinDeux = $adresseTemoinDeux;

        return $this;
    }

    public function getProfessionTemoinDeux(): ?string
    {
        return $this->professionTemoinDeux;
    }

    public function setProfessionTemoinDeux(string $professionTemoinDeux): self
    {
        $this->professionTemoinDeux = $professionTemoinDeux;

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

    public function getProfessionPere(): ?string
    {
        return $this->professionPere;
    }

    public function setProfessionPere(?string $professionPere): self
    {
        $this->professionPere = $professionPere;

        return $this;
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

    public function getNaissanceFichierCopieIntegrale(): ?string
    {
        return $this->naissanceFichierCopieIntegrale;
    }

    public function setNaissanceFichierCopieIntegrale(?string $naissanceFichierCopieIntegrale): self
    {
        $this->naissanceFichierCopieIntegrale = $naissanceFichierCopieIntegrale;

        return $this;
    }

    /**
     * Get nOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @return  File|null
     */ 
    public function getNaissanceImageFile(): ?File
    {
        return $this->naissanceImageFile;
    }

    /**
     * Set nOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @param  File|null  $naissanceImageFile  NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @return  self
     */ 
    public function setNaissanceImageFile(?File $naissanceImageFile = null): self
    {
        $this->naissanceImageFile = $naissanceImageFile;
        if($this->naissanceImageFile instanceof UploadedFile)
        {
            $this->updatedAt = new \DateTime('now');
        }
        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
