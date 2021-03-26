<?php

namespace App\Entity;

use App\Repository\AdoptionRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=AdoptionRepository::class)
 * @Vich\Uploadable
 */
class Adoption
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
    private $dateAdoption;

    /**
     * @ORM\Column(type="date")
     */
    private $dateEnregistrement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity=Personne::class, inversedBy="pereAdoptions")
     */
    private $pereAdoptif;

    /**
     * @ORM\ManyToOne(targetEntity=Personne::class, inversedBy="mereAdoptions")
     */
    private $mereAdoptif;

    /**
     * @ORM\OneToOne(targetEntity=Personne::class, inversedBy="adoption", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $enfantAdopte;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imageCopieIntegrale;
    
    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="adoption_image", fileNameProperty="imageCopieIntegrale")
     * 
     * @var File|null
     */
    private $imageFile;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateAdoption(): ?\DateTimeInterface
    {
        return $this->dateAdoption;
    }

    public function setDateAdoption(\DateTimeInterface $dateAdoption): self
    {
        $this->dateAdoption = $dateAdoption;

        return $this;
    }

    public function getDateEnregistrement(): ?\DateTimeInterface
    {
        return $this->dateEnregistrement;
    }

    public function setDateEnregistrement(\DateTimeInterface $dateEnregistrement): self
    {
        $this->dateEnregistrement = $dateEnregistrement;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getPereAdoptif(): ?Personne
    {
        return $this->pereAdoptif;
    }

    public function setPereAdoptif(?Personne $pereAdoptif): self
    {
        $this->pereAdoptif = $pereAdoptif;

        return $this;
    }

    public function getMereAdoptif(): ?Personne
    {
        return $this->mereAdoptif;
    }

    public function setMereAdoptif(?Personne $mereAdoptif): self
    {
        $this->mereAdoptif = $mereAdoptif;

        return $this;
    }

    public function getEnfantAdopte(): ?Personne
    {
        return $this->enfantAdopte;
    }

    public function setEnfantAdopte(Personne $enfantAdopte): self
    {
        $this->enfantAdopte = $enfantAdopte;

        return $this;
    }

    /**
     * Get the value of imageCopieIntegrale
     */ 
    public function getImageCopieIntegrale()
    {
        return $this->imageCopieIntegrale;
    }

    /**
     * Set the value of imageCopieIntegrale
     *
     * @return  self
     */ 
    public function setImageCopieIntegrale($imageCopieIntegrale)
    {
        $this->imageCopieIntegrale = $imageCopieIntegrale;

        return $this;
    }

     /**
     * Get nOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @return  File|null
     */ 
    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }
    
    /**
     * Set nOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @param  File|null  $imageFile  NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @return  self
     */ 
    public function setImageFile(?File $imageFile = null): self
    {
        $this->imageFile = $imageFile;
        if($this->imageFile instanceof UploadedFile)
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
