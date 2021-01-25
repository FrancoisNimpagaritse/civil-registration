<?php

namespace App\Entity;

class NaissanceMereInexistant
{
    private $dateNaissance;

    private $lieuNaissance;

    private $nomEnfant;

    private $prenomEnfant;

    private $collineNaissance;

    private $zoneNaissance;

    private $communeNaissance;

    private $provinceNaissance;

    private $paysNaissance;
    
    private $statusVital;

    private $sexe;

    private $dateInscription;

    private $numeroActeNaissance;

    private $numeroVolume;

    private $nomCompletTemoinUn;

    private $adresseTemoinUn;

    private $professionTemoinUn;

    private $nomCompletTemoinDeux;

    private $adresseTemoinDeux;

    private $professionTemoinDeux;
    
    private $nomMere;
    
    private $prenomMere;
    
    private $dateNaissanceMere;
    
    private $collineNaissanceMere;
    
    private $zoneNaissanceMere;
    
    private $communeNaissanceMere;
    
    private $provinceNaissanceMere;
    
    private $paysNaissanceMere;
    
    private $statusVitalMere;
    
    private $sexeMere;
    
    private $collineResidenceMere;
    
    private $zoneResidenceMere;
    
    private $communeResidenceMere;
    
    private $provinceResidenceMere;
    
    private $nationaliteMere;
    
    private $professionMere;
    
    private $pinMere;
    
    private $photoMere;

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

    public function getNumeroActeNaissance(): ?string
    {
        return $this->numeroActeNaissance;
    }

    public function setNumeroActeNaissance(?string $numeroActeNaissance): self
    {
        $this->numeroActeNaissance = $numeroActeNaissance;

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

    public function getNomCompletTemoinUn(): ?string
    {
        return $this->nomCompletTemoinUn;
    }

    public function setNomCompletTemoinUn(string $nomCompletTemoinUn): self
    {
        $this->nomCompletTemoinUn = $nomCompletTemoinUn;

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

    public function getNomCompletTemoinDeux(): ?string
    {
        return $this->nomCompletTemoinDeux;
    }

    public function setNomCompletTemoinDeux(string $nomCompletTemoinDeux): self
    {
        $this->nomCompletTemoinDeux = $nomCompletTemoinDeux;

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

    public function getNomMere(): ?string
    {
        return $this->nomMere;
    }

    public function setNomMere(string $nomMere): self
    {
        $this->nomMere = $nomMere;

        return $this;
    }

    public function getPrenomMere(): ?string
    {
        return $this->prenomMere;
    }

    public function setPrenomMere(string $prenomMere): self
    {
        $this->prenomMere = $prenomMere;

        return $this;
    }

    public function getDateNaissanceMere(): ?\DateTimeInterface
    {
        return $this->dateNaissanceMere;
    }

    public function setDateNaissanceMere(\DateTimeInterface $dateNaissanceMere): self
    {
        $this->dateNaissanceMere = $dateNaissanceMere;

        return $this;
    }

    public function getCollineNaissanceMere(): ?string
    {
        return $this->collineNaissanceMere;
    }

    public function setCollineNaissanceMere(string $collineNaissanceMere): self
    {
        $this->collineNaissanceMere = $collineNaissanceMere;

        return $this;
    }

    public function getZoneNaissanceMere(): ?string
    {
        return $this->zoneNaissanceMere;
    }

    public function setZoneNaissanceMere(string $zoneNaissanceMere): self
    {
        $this->zoneNaissanceMere = $zoneNaissanceMere;

        return $this;
    }

    public function getCommuneNaissanceMere(): ?string
    {
        return $this->communeNaissanceMere;
    }

    public function setCommuneNaissanceMere(string $communeNaissanceMere): self
    {
        $this->communeNaissanceMere = $communeNaissanceMere;

        return $this;
    }

    public function getProvinceNaissanceMere(): ?string
    {
        return $this->provinceNaissanceMere;
    }

    public function setProvinceNaissanceMere(string $provinceNaissanceMere): self
    {
        $this->provinceNaissanceMere = $provinceNaissanceMere;

        return $this;
    }

    public function getPaysNaissanceMere(): ?string
    {
        return $this->paysNaissanceMere;
    }

    public function setPaysNaissanceMere(string $paysNaissanceMere): self
    {
        $this->paysNaissanceMere = $paysNaissanceMere;

        return $this;
    }

    public function getStatusVitalMere(): ?string
    {
        return $this->statusVitalMere;
    }

    public function setStatusVitalMere(string $statusVitalMere): self
    {
        $this->statusVitalMere = $statusVitalMere;

        return $this;
    }

    public function getSexeMere(): ?string
    {
        return $this->sexeMere;
    }

    public function setSexeMere(string $sexeMere): self
    {
        $this->sexeMere = $sexeMere;

        return $this;
    }

    public function getCollineResidenceMere(): ?string
    {
        return $this->collineResidenceMere;
    }

    public function setCollineResidenceMere(string $collineResidenceMere): self
    {
        $this->collineResidenceMere = $collineResidenceMere;

        return $this;
    }

    public function getZoneResidenceMere(): ?string
    {
        return $this->zoneResidenceMere;
    }

    public function setZoneResidenceMere(string $zoneResidenceMere): self
    {
        $this->zoneResidenceMere = $zoneResidenceMere;

        return $this;
    }

    public function getCommuneResidenceMere(): ?string
    {
        return $this->communeResidenceMere;
    }

    public function setCommuneResidenceMere(string $communeResidenceMere): self
    {
        $this->communeResidenceMere = $communeResidenceMere;

        return $this;
    }

    public function getProvinceResidenceMere(): ?string
    {
        return $this->provinceResidenceMere;
    }

    public function setProvinceResidenceMere(string $provinceResidenceMere): self
    {
        $this->provinceResidenceMere = $provinceResidenceMere;

        return $this;
    }

    public function getNationaliteMere(): ?string
    {
        return $this->nationaliteMere;
    }

    public function setNationaliteMere(string $nationaliteMere): self
    {
        $this->nationaliteMere = $nationaliteMere;

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

    public function getPinMere(): ?string
    {
        return $this->pinMere;
    }

    public function setPinMere(?string $pinMere): self
    {
        $this->pinMere = $pinMere;

        return $this;
    }

    public function getPhotoMere(): ?string
    {
        return $this->photoMere;
    }

    public function setPhotoMere(?string $photoMere): self
    {
        $this->photoMere = $photoMere;

        return $this;
    }

    /**
     * Get the value of nomEnfant
     */ 
    public function getNomEnfant()
    {
        return $this->nomEnfant;
    }

    /**
     * Set the value of nomEnfant
     *
     * @return  self
     */ 
    public function setNomEnfant($nomEnfant)
    {
        $this->nomEnfant = $nomEnfant;

        return $this;
    }

    /**
     * Get the value of prenomEnfant
     */ 
    public function getPrenomEnfant()
    {
        return $this->prenomEnfant;
    }

    /**
     * Set the value of prenomEnfant
     *
     * @return  self
     */ 
    public function setPrenomEnfant($prenomEnfant)
    {
        $this->prenomEnfant = $prenomEnfant;

        return $this;
    }

    /**
     * Get the value of statusVital
     */ 
    public function getStatusVital()
    {
        return $this->statusVital;
    }

    /**
     * Set the value of statusVital
     *
     * @return  self
     */ 
    public function setStatusVital($statusVital)
    {
        $this->statusVital = $statusVital;

        return $this;
    }

    /**
     * Get the value of sexe
     */ 
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set the value of sexe
     *
     * @return  self
     */ 
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }
}
