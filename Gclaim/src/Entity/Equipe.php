<?php

namespace App\Entity;

use App\Repository\EquipeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=EquipeRepository::class)
 */
class Equipe
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank(message="Nom de Equipe est obligatoire")
     */
    private $nomEquipe;

    /**
     * @ORM\Column(type="string", length=100)
     * * @Assert\NotBlank(message="Il faut écrire une déscription")
     */
    private $description;

    /**
     * @ORM\Column(type="date")
     */
    private $dateCreation;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank(message="Il faut mentionner l'etat de l'equipe  ")
     */
    private $Etat;

    /**
     * @ORM\ManyToMany(targetEntity=SimpleUtilisateur::class, inversedBy="membreEquipes")
     */
    private $simpleutilisateurs;

    public function __construct()
    {
        $this->simpleutilisateurs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEquipe(): ?string
    {
        return $this->nomEquipe;
    }

    public function setNomEquipe(string $nomEquipe): self
    {
        $this->nomEquipe = $nomEquipe;

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

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeInterface $dateCreation): self
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->Etat;
    }

    public function setEtat(string $Etat): self
    {
        $this->Etat = $Etat;

        return $this;
    }

    /**
     * @return Collection|SimpleUtilisateur[]
     */
    public function getSimpleutilisateurs(): Collection
    {
        return $this->simpleutilisateurs;
    }

    public function addSimpleutilisateur(SimpleUtilisateur $simpleutilisateur): self
    {
        if (!$this->simpleutilisateurs->contains($simpleutilisateur)) {
            $this->simpleutilisateurs[] = $simpleutilisateur;
        }

        return $this;
    }

    public function removeSimpleutilisateur(SimpleUtilisateur $simpleutilisateur): self
    {
        $this->simpleutilisateurs->removeElement($simpleutilisateur);

        return $this;
    }
}
