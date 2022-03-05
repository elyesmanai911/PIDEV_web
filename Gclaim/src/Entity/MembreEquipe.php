<?php

namespace App\Entity;

use App\Repository\MembreEquipeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MembreEquipeRepository::class)
 */
class MembreEquipe
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Equipe::class, inversedBy="membreEquipes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idE;

    /**
     * @ORM\OneToMany(targetEntity=SimpleUtilisateur::class, mappedBy="membreEquipe")
     */
    private $idU;

    public function __construct()
    {
        $this->idU = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdE(): ?Equipe
    {
        return $this->idE;
    }

    public function setIdE(?Equipe $idE): self
    {
        $this->idE = $idE;

        return $this;
    }

    /**
     * @return Collection|SimpleUtilisateur[]
     */
    public function getIdU(): Collection
    {
        return $this->idU;
    }

    public function addIdU(SimpleUtilisateur $idU): self
    {
        if (!$this->idU->contains($idU)) {
            $this->idU[] = $idU;
            $idU->setMembreEquipe($this);
        }

        return $this;
    }

    public function removeIdU(SimpleUtilisateur $idU): self
    {
        if ($this->idU->removeElement($idU)) {
            // set the owning side to null (unless already changed)
            if ($idU->getMembreEquipe() === $this) {
                $idU->setMembreEquipe(null);
            }
        }

        return $this;
    }
}
