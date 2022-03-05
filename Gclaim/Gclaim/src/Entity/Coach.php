<?php

namespace App\Entity;

use App\Repository\CoachRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass=CoachRepository::class)
 * @ORM\Table(name="coach")
 */
class Coach extends Utilisateur
{


    /**
     * @ORM\Column(type="string", length=50)
     *
     * @Assert\NotBlank (message="specialité est obligatoire")
     */
    private $specialite;



    public function getSpecialite(): ?string
    {
        return $this->specialite;
    }

    public function setSpecialite(string $specialite): self
    {
        $this->specialite = $specialite;

        return $this;
    }
}
