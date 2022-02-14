<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass=UtilisateurRepository::class)
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="type" ,type="string")
 * @ORM\DiscriminatorMap ({
 *     "simpleutilisateur"="SimpleUtilisateur",
 *     "coach"="Coach"
 * })
 */
abstract class Utilisateur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank(message="login est obligatoire")
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
     */
    protected $password;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank(message="mot de passe est obligatoire")
     * @Assert\Length(
     *      min = "8",
     *      max = "20",
     *      minMessage = "Votre mot de passe doit faire au moins {{ limit }} caractères",
     *      maxMessage = "Votre mot de passe ne peut pas être plus long que {{ limit }} caractères")
     */
    protected $verifpassword;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank(message="Email est un champs obligatoire")
     * @Assert\Email(message = " email est invalide verifiez votre email.")
     */
    private $email;

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
}
