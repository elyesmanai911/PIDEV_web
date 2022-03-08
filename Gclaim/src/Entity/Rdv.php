<?php

namespace App\Entity;

use App\Repository\RdvRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=RdvRepository::class)
 *
 */
class Rdv
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date", nullable=true)
     * @Assert\GreaterThanOrEqual("today")
     * * @Assert\NotBlank (message="this field is required")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity=Profil::class, inversedBy="rdvs")
     */
    private $coach;

    /**
     * @ORM\ManyToOne(targetEntity=SimpleUtilisateur::class, inversedBy="rdvs")
     */
    private $user;
    /**
     * @ORM\Column(type="boolean")
     */
    protected $isVerified = false;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getCoach(): ?Profil
    {
        return $this->coach;
    }

    public function setCoach(?Profil $coach): self
    {
        $this->coach = $coach;

        return $this;
    }

    public function getUser(): ?SimpleUtilisateur
    {
        return $this->user;
    }

    public function setUser(?SimpleUtilisateur $user): self
    {
        $this->user = $user;

        return $this;
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

}
