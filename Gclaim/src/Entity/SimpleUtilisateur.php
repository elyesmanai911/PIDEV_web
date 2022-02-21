<?php

namespace App\Entity;

use App\Repository\SimpleUtilisateurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Mapping\Entity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=SimpleUtilisateurRepository::class)
 * @ORM\Table(name="SimpleUtilisateur")
 */


class SimpleUtilisateur extends Utilisateur
{



    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank(message="nom et prenom sont obligatoires")
     * @Assert\Length(
     *      max = "20",
     *      maxMessage = "Votre nom et prenom ne peut pas être plus long que {{ limit }} caractères")
     */
    private $fullname;

    /**
     * @ORM\OneToMany(targetEntity=Rdv::class, mappedBy="users")
     */
    private $rdvs;

    public function __construct()
    {
        $this->rdvs = new ArrayCollection();
    }



    public function getFullName(): ?string
    {
        return $this->fullname;
    }

    public function setFullName(string $fullname): self
    {
        $this->fullname = $fullname;

        return $this;
    }

    /**
     * @return Collection|Rdv[]
     */
    public function getRdvs(): Collection
    {
        return $this->rdvs;
    }

    public function addRdv(Rdv $rdv): self
    {
        if (!$this->rdvs->contains($rdv)) {
            $this->rdvs[] = $rdv;
            $rdv->setUsers($this);
        }

        return $this;
    }

    public function removeRdv(Rdv $rdv): self
    {
        if ($this->rdvs->removeElement($rdv)) {
            // set the owning side to null (unless already changed)
            if ($rdv->getUsers() === $this) {
                $rdv->setUsers(null);
            }
        }

        return $this;
    }


}
