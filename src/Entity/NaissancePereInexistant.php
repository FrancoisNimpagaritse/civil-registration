<?php

namespace App\Entity;

class NaissancePereInexistant
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

    private $nomPere;

    private $prenomPere;

    private $dateNaissancePere;

    private $collineNaissancePere;

    private $zoneNaissancePere;

    private $communeNaissancePere;
    
    private $provinceNaissancePere;
    
    private $paysNaissancePere;
    
    private $statusVitalPere;
    
    private $sexePere;
    
    private $collineResidencePere;
    
    private $zoneResidencePere;
    
    private $communeResidencePere;
    
    private $provinceResidencePere;
    
    private $nationalitePere;
    
    private $professionPere;
    
    private $photoPere;
    
    private $pinPere;    
    

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

    public function getNomPere(): ?string
    {
        return $this->nomPere;
    }

    public function setNomPere(string $nomPere): self
    {
        $this->nomPere = $nomPere;

        return $this;
    }

    public function getPrenomPere(): ?string
    {
        return $this->prenomPere;
    }

    public function setPrenomPere(?string $prenomPere): self
    {
        $this->prenomPere = $prenomPere;

        return $this;
    }

    public function getDateNaissancePere(): ?\DateTimeInterface
    {
        return $this->dateNaissancePere;
    }

    public function setDateNaissancePere(\DateTimeInterface $dateNaissancePere): self
    {
        $this->dateNaissancePere = $dateNaissancePere;

        return $this;
    }

    public function getCollineNaissancePere(): ?string
    {
        return $this->collineNaissancePere;
    }

    public function setCollineNaissancePere(string $collineNaissancePere): self
    {
        $this->collineNaissancePere = $collineNaissancePere;

        return $this;
    }

    public function getZoneNaissancePere(): ?string
    {
        return $this->zoneNaissancePere;
    }

    public function setZoneNaissancePere(string $zoneNaissancePere): self
    {
        $this->zoneNaissancePere = $zoneNaissancePere;

        return $this;
    }

    public function getCommuneNaissancePere(): ?string
    {
        return $this->communeNaissancePere;
    }

    public function setCommuneNaissancePere(string $communeNaissancePere): self
    {
        $this->communeNaissancePere = $communeNaissancePere;

        return $this;
    }

    public function getProvinceNaissancePere(): ?string
    {
        return $this->provinceNaissancePere;
    }

    public function setProvinceNaissancePere(string $provinceNaissancePere): self
    {
        $this->provinceNaissancePere = $provinceNaissancePere;

        return $this;
    }

    public function getPaysNaissancePere(): ?string
    {
        return $this->paysNaissancePere;
    }

    public function setPaysNaissancePere(string $paysNaissancePere): self
    {
        $this->paysNaissancePere = $paysNaissancePere;

        return $this;
    }

    public function getStatusVitalPere(): ?string
    {
        return $this->statusVitalPere;
    }

    public function setStatusVitalPere(string $statusVitalPere): self
    {
        $this->statusVitalPere = $statusVitalPere;

        return $this;
    }

    public function getSexePere(): ?string
    {
        return $this->sexePere;
    }

    public function setSexePere(string $sexePere): self
    {
        $this->sexePere = $sexePere;

        return $this;
    }

    public function getCollineResidencePere(): ?string
    {
        return $this->collineResidencePere;
    }

    public function setCollineResidencePere(string $collineResidencePere): self
    {
        $this->collineResidencePere = $collineResidencePere;

        return $this;
    }

    public function getZoneResidencePere(): ?string
    {
        return $this->zoneResidencePere;
    }

    public function setZoneResidencePere(string $zoneResidencePere): self
    {
        $this->zoneResidencePere = $zoneResidencePere;

        return $this;
    }

    public function getCommuneResidencePere(): ?string
    {
        return $this->communeResidencePere;
    }

    public function setCommuneResidencePere(string $communeResidencePere): self
    {
        $this->communeResidencePere = $communeResidencePere;

        return $this;
    }

    public function getProvinceResidencePere(): ?string
    {
        return $this->provinceResidencePere;
    }

    public function setProvinceResidencePere(string $provinceResidencePere): self
    {
        $this->provinceResidencePere = $provinceResidencePere;

        return $this;
    }

    public function getNationalitePere(): ?string
    {
        return $this->nationalitePere;
    }

    public function setNationalitePere(string $nationalitePere): self
    {
        $this->nationalitePere = $nationalitePere;

        return $this;
    }

    public function getProfessionPere(): ?string
    {
        return $this->professionPere;
    }

    public function setProfessionPere(string $professionPere): self
    {
        $this->professionPere = $professionPere;

        return $this;
    }

    public function getPhotoPere(): ?string
    {
        return $this->photoPere;
    }

    public function setPhotoPere(?string $photoPere): self
    {
        $this->photoPere = $photoPere;

        return $this;
    }

    public function getPinPere(): ?string
    {
        return $this->pinPere;
    }

    public function setPinPere(?string $pinPere): self
    {
        $this->pinPere = $pinPere;

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
