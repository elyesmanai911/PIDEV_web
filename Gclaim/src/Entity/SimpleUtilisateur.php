<?php

namespace App\Entity;

use App\Repository\SimpleUtilisateurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Mapping\Entity;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=SimpleUtilisateurRepository::class)
 * @ORM\Table(name="SimpleUtilisateur")
 * @UniqueEntity(fields={"username"}, message="There is already an account with this username")
 */
class SimpleUtilisateur extends Utilisateur implements UserInterface
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
     * @ORM\Column(type="boolean")
     */
    private $isVerified = false;


    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];


    /**
     * @ORM\ManyToMany(targetEntity=Equipe::class, mappedBy="simpleutilisateurs")
     */
    private $membreEquipes;

    public function __construct()
    {
        $this->membreEquipes = new ArrayCollection();
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
    public function getRoles(): array
    {
        $roles = $this->roles;

        return [];
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }
    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;

        return $this;
    }

    public function getActivationToken(): ?string
    {
        return $this->activation_token;
    }

    public function setActivationToken(?string $activation_token): self
    {
        $this->activation_token = $activation_token;

        return $this;
    }

    /**
     * @return Collection|Equipe[]
     */
    public function getMembreEquipes(): Collection
    {
        return $this->membreEquipes;
    }

    public function addMembreEquipe(Equipe $membreEquipe): self
    {
        if (!$this->membreEquipes->contains($membreEquipe)) {
            $this->membreEquipes[] = $membreEquipe;
            $membreEquipe->addSimpleutilisateur($this);
        }

        return $this;
    }

    public function removeMembreEquipe(Equipe $membreEquipe): self
    {
        if ($this->membreEquipes->removeElement($membreEquipe)) {
            $membreEquipe->removeSimpleutilisateur($this);
        }

        return $this;
    }

}
