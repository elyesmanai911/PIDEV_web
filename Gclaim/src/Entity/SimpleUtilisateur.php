<?php

namespace App\Entity;

use App\Repository\SimpleUtilisateurRepository;
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
