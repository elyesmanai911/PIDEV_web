<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;


/**
 * @ORM\Entity(repositoryClass=UtilisateurRepository::class)
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="type" ,type="string")
 * @ORM\DiscriminatorMap ({
 *     "simpleutilisateur"="SimpleUtilisateur",
 *     "coach"="Coach"
 * })
 */
abstract class Utilisateur implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("post:read")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank(message="login est obligatoire")
     * @Groups("post:read")
     */
    protected $username;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank(message="mot de passe est obligatoire")
     * @Assert\Length(
     *      min = "8",
     *      max = "20",
     *      minMessage = "Votre mot de passe doit faire au moins {{ limit }} caractères",
     *      maxMessage = "Votre mot de passe ne peut pas être plus long que {{ limit }} caractères")
     * @Groups("post:read")
     */
    protected $password;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank(message="mot de passe est obligatoire")
     * @Groups("post:read")
     */
    protected $verifpassword;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank(message="Email est un champs obligatoire")
     * @Assert\Email(message = " email est invalide verifiez votre email.")
     * @Groups("post:read")
     */
    protected $email;

    /**
     * @ORM\Column(type="json")
     * @Groups("post:read")
     */
    protected $roles = [];
    /**
     * @ORM\Column(type="boolean")
     * @Groups("post:read")
     */
    protected $isVerified = false;
    /**
     * @ORM\Column(type="boolean")
     * @Groups("post:read")
     */
    protected $role = false;
    /**
     * @ORM\ManyToMany(targetEntity=Equipe::class, mappedBy="simpleutilisateurs")
     */
    protected $membreEquipes;

    public function __construct()
    {
        $this->membreEquipes = new ArrayCollection();
    }
    public function getRoles(): array
    {
        $roles = $this->roles;

        return $roles;
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }
    public function getSalt()
    {
        return $this->isVerified;
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
    public function getRole(): bool
    {
        return $this->role;
    }

    public function setRole(bool $role): self
    {
        $this->role = $role;

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
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserName(): ?string
    {
        return $this->username;
    }

    public function setUserName(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getVerifPassword(): ?string
    {
        return $this->verifpassword;
    }

    public function setVerifPassword(string $verifpassword): self
    {
        $this->verifpassword = $verifpassword;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

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
