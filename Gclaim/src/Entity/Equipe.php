<?php

namespace App\Entity;

use App\Repository\EquipeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;
/**
 * @ORM\Entity(repositoryClass=EquipeRepository::class)
 */
class Equipe
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("post:read")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank(message="Nom de Equipe est obligatoire")
     * @Groups("post:read")
     */
    private $nomEquipe;

    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(message="Il faut écrire une déscription")
     * @Groups("post:read")
     */
    private $description;

    /**
     * @ORM\Column(type="date")
     * @Groups("post:read")
     */
    private $dateCreation;

    /**
     * @ORM\Column(type="string", length=50)
     * @Groups("post:read")
     */
    private $Etat;

    /**
     * @ORM\ManyToMany(targetEntity=Utilisateur::class, inversedBy="membreEquipes")
     */
    private $simpleutilisateurs;

    /**
     * @ORM\Column(type="string", length=50)
     * @Groups("post:read")
     */
    private $chef;

    /**
     * @ORM\OneToMany(targetEntity=MembreEquipe::class, mappedBy="idE")
     */
    private $membreEquipes;

    /**
     * @ORM\ManyToMany(targetEntity=Tournoi::class, mappedBy="equipes")
     */
    private $Tournois;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nb;

    public function __construct()
    {
        $this->simpleutilisateurs = new ArrayCollection();
        $this->membreEquipes = new ArrayCollection();
        $this->Tournois = new ArrayCollection();
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
     * @return Collection|Utilisateur[]
     */
    public function getSimpleutilisateurs(): Collection
    {
        return $this->simpleutilisateurs;
    }

    public function addSimpleutilisateur(Utilisateur $simpleutilisateur): self
    {
        if (!$this->simpleutilisateurs->contains($simpleutilisateur)) {
            $this->simpleutilisateurs[] = $simpleutilisateur;
        }

        return $this;
    }

    public function removeSimpleutilisateur(Utilisateur $simpleutilisateur): self
    {
        $this->simpleutilisateurs->removeElement($simpleutilisateur);

        return $this;
    }

    public function getChef(): ?string
    {
        return $this->chef;
    }

    public function setChef(string $chef): self
    {
        $this->chef = $chef;

        return $this;
    }

    /**
     * @return Collection|MembreEquipe[]
     */
    public function getMembreEquipes(): Collection
    {
        return $this->membreEquipes;
    }

    public function addMembreEquipe(MembreEquipe $membreEquipe): self
    {
        if (!$this->membreEquipes->contains($membreEquipe)) {
            $this->membreEquipes[] = $membreEquipe;
            $membreEquipe->setIdE($this);
        }

        return $this;
    }

    public function removeMembreEquipe(MembreEquipe $membreEquipe): self
    {
        if ($this->membreEquipes->removeElement($membreEquipe)) {
            // set the owning side to null (unless already changed)
            if ($membreEquipe->getIdE() === $this) {
                $membreEquipe->setIdE(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Tournoi[]
     */
    public function getTournois(): Collection
    {
        return $this->Tournois;
    }

    public function addTournoi(Tournoi $tournoi): self
    {
        if (!$this->Tournois->contains($tournoi)) {
            $this->Tournois[] = $tournoi;
            $tournoi->addEquipe($this);
        }

        return $this;
    }

    public function removeTournoi(Tournoi $tournoi): self
    {
        if ($this->Tournois->removeElement($tournoi)) {
            $tournoi->removeEquipe($this);
        }

        return $this;
    }

    public function getNb(): ?int
    {
        return $this->nb;
    }

    public function setNb(?int $nb): self
    {
        $this->nb = $nb;

        return $this;
    }
}