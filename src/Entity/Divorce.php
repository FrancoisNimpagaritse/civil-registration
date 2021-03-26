<?php

namespace App\Entity;

use App\Repository\DivorceRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=DivorceRepository::class)
 * @Vich\Uploadable
 */
class Divorce
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
    private $dateDivorce;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieuDecisionDivorce;

    /**
     * @ORM\Column(type="date")
     */
    private $dateEnregistrementDivorce;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nombreEnfantsIssusMariage;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $professionEpoux;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $professionEpouse;

    /**
     * @ORM\OneToOne(targetEntity=Mariage::class, inversedBy="divorce", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $mariage;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $referenceDecisionDivorce;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imageCopieIntegrale;
    
    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="divorce_image", fileNameProperty="imageCopieIntegrale")
     * 
     * @var File|null
     */
    private $imageFile;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateDivorce(): ?\DateTimeInterface
    {
        return $this->dateDivorce;
    }

    public function setDateDivorce(\DateTimeInterface $dateDivorce): self
    {
        $this->dateDivorce = $dateDivorce;

        return $this;
    }

    public function getLieuDecisionDivorce(): ?string
    {
        return $this->lieuDecisionDivorce;
    }

    public function setLieuDecisionDivorce(string $lieuDecisionDivorce): self
    {
        $this->lieuDecisionDivorce = $lieuDecisionDivorce;

        return $this;
    }

    public function getDateEnregistrementDivorce(): ?\DateTimeInterface
    {
        return $this->dateEnregistrementDivorce;
    }

    public function setDateEnregistrementDivorce(\DateTimeInterface $dateEnregistrementDivorce): self
    {
        $this->dateEnregistrementDivorce = $dateEnregistrementDivorce;

        return $this;
    }

    public function getNombreEnfantsIssusMariage(): ?int
    {
        return $this->nombreEnfantsIssusMariage;
    }

    public function setNombreEnfantsIssusMariage(?int $nombreEnfantsIssusMariage): self
    {
        $this->nombreEnfantsIssusMariage = $nombreEnfantsIssusMariage;

        return $this;
    }

    public function getProfessionEpoux(): ?string
    {
        return $this->professionEpoux;
    }

    public function setProfessionEpoux(string $professionEpoux): self
    {
        $this->professionEpoux = $professionEpoux;

        return $this;
    }

    public function getProfessionEpouse(): ?string
    {
        return $this->professionEpouse;
    }

    public function setProfessionEpouse(string $professionEpouse): self
    {
        $this->professionEpouse = $professionEpouse;

        return $this;
    }

    public function getMariage(): ?Mariage
    {
        return $this->mariage;
    }

    public function setMariage(Mariage $mariage): self
    {
        $this->mariage = $mariage;

        return $this;
    }

    public function getReferenceDecisionDivorce(): ?string
    {
        return $this->referenceDecisionDivorce;
    }

    public function setReferenceDecisionDivorce(?string $referenceDecisionDivorce): self
    {
        $this->referenceDecisionDivorce = $referenceDecisionDivorce;

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
