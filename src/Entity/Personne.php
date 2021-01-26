<?php

namespace App\Entity;

use App\Repository\PersonneRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PersonneRepository::class)
 */
class Personne
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateNaissance;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $collineNaissance;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $zoneNaissance;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $communeNaissance;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $provinceNaissance;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $paysNaissance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $statusVital;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sexe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $collineResidence;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $zoneResidence;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $communeResidence;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $provinceResidence;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nationalite;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $numeroCarteNationaleIdentite;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $profession;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pin;

    /**
     * @ORM\ManyToOne(targetEntity=Personne::class, inversedBy="pereenfants")
     */
    private $pere;

    /**
     * @ORM\OneToMany(targetEntity=Personne::class, mappedBy="pere")
     */
    private $pereenfants;

    /**
     * @ORM\ManyToOne(targetEntity=Personne::class, inversedBy="mereenfants")
     */
    private $mere;

    /**
     * @ORM\OneToMany(targetEntity=Personne::class, mappedBy="mere")
     */
    private $mereenfants;

    /**
     * @ORM\OneToOne(targetEntity=Naissance::class, mappedBy="personne", cascade={"persist", "remove"})
     */
    private $naissance;

    /**
     * @ORM\OneToMany(targetEntity=Demande::class, mappedBy="personne", orphanRemoval=true)
     */
    private $demandes;

    /**
     * @ORM\OneToOne(targetEntity=Deces::class, mappedBy="personne", cascade={"persist", "remove"})
     */
    private $deces;

    /**
     * @ORM\OneToMany(targetEntity=Mariage::class, mappedBy="personneEpoux")
     */
    private $epouxmariages;

    /**
     * @ORM\OneToMany(targetEntity=Mariage::class, mappedBy="personneEpouse")
     */
    private $epousemariages;

    /**
     * @ORM\OneToMany(targetEntity=Adoption::class, mappedBy="pereAdoptif")
     */
    private $pereAdoptions;

    /**
     * @ORM\OneToMany(targetEntity=Adoption::class, mappedBy="mereAdoptif")
     */
    private $mereAdoptions;

    /**
     * @ORM\OneToOne(targetEntity=Adoption::class, mappedBy="enfantAdopte", cascade={"persist", "remove"})
     */
    private $adoption;

    public function __construct()
    {
        $this->pereenfants = new ArrayCollection();
        $this->mereenfants = new ArrayCollection();
        $this->demandes = new ArrayCollection();
        $this->epouxmariages = new ArrayCollection();
        $this->epousemariages = new ArrayCollection();
        $this->pereAdoptions = new ArrayCollection();
        $this->mereAdoptions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }
    
    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(?\DateTimeInterface $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getCollineNaissance(): ?string
    {
        return $this->collineNaissance;
    }

    public function setCollineNaissance(?string $collineNaissance): self
    {
        $this->collineNaissance = $collineNaissance;

        return $this;
    }

    public function getZoneNaissance(): ?string
    {
        return $this->zoneNaissance;
    }

    public function setZoneNaissance(?string $zoneNaissance): self
    {
        $this->zoneNaissance = $zoneNaissance;

        return $this;
    }

    public function getCommuneNaissance(): ?string
    {
        return $this->communeNaissance;
    }

    public function setCommuneNaissance(?string $communeNaissance): self
    {
        $this->communeNaissance = $communeNaissance;

        return $this;
    }

    public function getProvinceNaissance(): ?string
    {
        return $this->provinceNaissance;
    }

    public function setProvinceNaissance(?string $provinceNaissance): self
    {
        $this->provinceNaissance = $provinceNaissance;

        return $this;
    }

    public function getPaysNaissance(): ?string
    {
        return $this->paysNaissance;
    }

    public function setPaysNaissance(?string $paysNaissance): self
    {
        $this->paysNaissance = $paysNaissance;

        return $this;
    }

    public function getStatusVital(): ?string
    {
        return $this->statusVital;
    }

    public function setStatusVital(string $statusVital): self
    {
        $this->statusVital = $statusVital;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getCollineResidence(): ?string
    {
        return $this->collineResidence;
    }

    public function setCollineResidence(string $collineResidence): self
    {
        $this->collineResidence = $collineResidence;

        return $this;
    }

    public function getZoneResidence(): ?string
    {
        return $this->zoneResidence;
    }

    public function setZoneResidence(string $zoneResidence): self
    {
        $this->zoneResidence = $zoneResidence;

        return $this;
    }

    public function getCommuneResidence(): ?string
    {
        return $this->communeResidence;
    }

    public function setCommuneResidence(string $communeResidence): self
    {
        $this->communeResidence = $communeResidence;

        return $this;
    }

    public function getProvinceResidence(): ?string
    {
        return $this->provinceResidence;
    }

    public function setProvinceResidence(string $provinceResidence): self
    {
        $this->provinceResidence = $provinceResidence;

        return $this;
    }

    public function getNationalite(): ?string
    {
        return $this->nationalite;
    }

    public function setNationalite(string $nationalite): self
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    public function getNumeroCarteNationaleIdentite(): ?string
    {
        return $this->numeroCarteNationaleIdentite;
    }

    public function setNumeroCarteNationaleIdentite(?string $numeroCarteNationaleIdentite): self
    {
        $this->numeroCarteNationaleIdentite = $numeroCarteNationaleIdentite;

        return $this;
    }

    public function getProfession(): ?string
    {
        return $this->profession;
    }

    public function setProfession(?string $profession): self
    {
        $this->profession = $profession;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getPin(): ?string
    {
        return $this->pin;
    }

    public function setPin(?string $pin): self
    {
        $this->pin = $pin;

        return $this;
    }

    public function getPere(): ?self
    {
        return $this->pere;
    }

    public function setPere(?self $pere): self
    {
        $this->pere = $pere;

        return $this;
    }

    /**
     * @return Collection|self[]
     */
    public function getPereEnfants(): Collection
    {
        return $this->pereenfants;
    }

    public function addPereEnfant(self $pereenfant): self
    {
        if (!$this->pereenfants->contains($pereenfant)) {
            $this->pereenfants[] = $pereenfant;
            $pereenfant->setPere($this);
        }

        return $this;
    }

    public function removePereEnfant(self $pereenfant): self
    {
        if ($this->pereenfants->removeElement($pereenfant)) {
            // set the owning side to null (unless already changed)
            if ($pereenfant->getPere() === $this) {
                $pereenfant->setPere(null);
            }
        }

        return $this;
    }

    public function getMere(): ?self
    {
        return $this->mere;
    }

    public function setMere(?self $mere): self
    {
        $this->mere = $mere;

        return $this;
    }

    /**
     * @return Collection|self[]
     */
    public function getMereenfants(): Collection
    {
        return $this->mereenfants;
    }

    public function addMereenfant(self $mereenfant): self
    {
        if (!$this->mereenfants->contains($mereenfant)) {
            $this->mereenfants[] = $mereenfant;
            $mereenfant->setMere($this);
        }

        return $this;
    }

    public function removeMereenfant(self $mereenfant): self
    {
        if ($this->mereenfants->removeElement($mereenfant)) {
            // set the owning side to null (unless already changed)
            if ($mereenfant->getMere() === $this) {
                $mereenfant->setMere(null);
            }
        }

        return $this;
    }

    public function getNaissance(): ?Naissance
    {
        return $this->naissance;
    }

    public function setNaissance(Naissance $naissance): self
    {
        // set the owning side of the relation if necessary
        if ($naissance->getPersonne() !== $this) {
            $naissance->setPersonne($this);
        }

        $this->naissance = $naissance;

        return $this;
    }

    /**
     * @return Collection|Demande[]
     */
    public function getDemandes(): Collection
    {
        return $this->demandes;
    }

    public function addDemande(Demande $demande): self
    {
        if (!$this->demandes->contains($demande)) {
            $this->demandes[] = $demande;
            $demande->setPersonne($this);
        }

        return $this;
    }

    public function removeDemande(Demande $demande): self
    {
        if ($this->demandes->removeElement($demande)) {
            // set the owning side to null (unless already changed)
            if ($demande->getPersonne() === $this) {
                $demande->setPersonne(null);
            }
        }

        return $this;
    }

    public function getDeces(): ?Deces
    {
        return $this->deces;
    }

    public function setDeces(Deces $deces): self
    {
        // set the owning side of the relation if necessary
        if ($deces->getPersonne() !== $this) {
            $deces->setPersonne($this);
        }

        $this->deces = $deces;

        return $this;
    }

    /**
     * @return Collection|Mariage[]
     */
    public function getEpouxmariages(): Collection
    {
        return $this->epouxmariages;
    }

    public function addEpouxmariage(Mariage $epouxmariage): self
    {
        if (!$this->epouxmariages->contains($epouxmariage)) {
            $this->epouxmariages[] = $epouxmariage;
            $epouxmariage->setPersonneEpoux($this);
        }

        return $this;
    }

    public function removeEpouxmariage(Mariage $epouxmariage): self
    {
        if ($this->epouxmariages->removeElement($epouxmariage)) {
            // set the owning side to null (unless already changed)
            if ($epouxmariage->getPersonneEpoux() === $this) {
                $epouxmariage->setPersonneEpoux(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Mariage[]
     */
    public function getEpousemariages(): Collection
    {
        return $this->epousemariages;
    }

    public function addEpousemariage(Mariage $epousemariage): self
    {
        if (!$this->epousemariages->contains($epousemariage)) {
            $this->epousemariages[] = $epousemariage;
            $epousemariage->setPersonneEpouse($this);
        }

        return $this;
    }

    public function removeEpousemariage(Mariage $epousemariage): self
    {
        if ($this->epousemariages->removeElement($epousemariage)) {
            // set the owning side to null (unless already changed)
            if ($epousemariage->getPersonneEpouse() === $this) {
                $epousemariage->setPersonneEpouse(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->nom . ' ' . $this->prenom;
    }

    /**
     * @return Collection|Adoption[]
     */
    public function getPereAdoptions(): Collection
    {
        return $this->pereAdoptions;
    }

    public function addPereAdoption(Adoption $pereAdoption): self
    {
        if (!$this->pereAdoptions->contains($pereAdoption)) {
            $this->pereAdoptions[] = $pereAdoption;
            $pereAdoption->setPereAdoptif($this);
        }

        return $this;
    }

    public function removePereAdoption(Adoption $pereAdoption): self
    {
        if ($this->pereAdoptions->removeElement($pereAdoption)) {
            // set the owning side to null (unless already changed)
            if ($pereAdoption->getPereAdoptif() === $this) {
                $pereAdoption->setPereAdoptif(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Adoption[]
     */
    public function getMereAdoptions(): Collection
    {
        return $this->mereAdoptions;
    }

    public function addMereAdoption(Adoption $mereAdoption): self
    {
        if (!$this->mereAdoptions->contains($mereAdoption)) {
            $this->mereAdoptions[] = $mereAdoption;
            $mereAdoption->setMereAdoptif($this);
        }

        return $this;
    }

    public function removeMereAdoption(Adoption $mereAdoption): self
    {
        if ($this->mereAdoptions->removeElement($mereAdoption)) {
            // set the owning side to null (unless already changed)
            if ($mereAdoption->getMereAdoptif() === $this) {
                $mereAdoption->setMereAdoptif(null);
            }
        }

        return $this;
    }

    public function getAdoption(): ?Adoption
    {
        return $this->adoption;
    }

    public function setAdoption(Adoption $adoption): self
    {
        // set the owning side of the relation if necessary
        if ($adoption->getEnfantAdopte() !== $this) {
            $adoption->setEnfantAdopte($this);
        }

        $this->adoption = $adoption;

        return $this;
    }
}
