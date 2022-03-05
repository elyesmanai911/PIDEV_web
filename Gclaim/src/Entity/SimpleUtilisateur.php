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
 * @UniqueEntity(fields={"email"}, message="Il existe déjà un compte avec cet email")
 * @UniqueEntity(fields={"username"}, message="Il existe déjà un compte avec ce login")
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

    public function getFullName(): ?string
    {
        return $this->fullname;
    }

    public function setFullName(string $fullname): self
    {
        $this->fullname = $fullname;

        return $this;
    }




}