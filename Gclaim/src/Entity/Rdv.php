<?php

namespace App\Entity;

use App\Repository\RdvRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;


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
     *  @Groups("post:read")
     */
    private $id;

    /**
     * @ORM\Column(type="date", nullable=true)
     * @Assert\GreaterThanOrEqual("today")
     * * @Assert\NotBlank (message="this field is required")
     *  @Groups("post:read")
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
     *  @Groups("post:read")
     */
    protected $isVerified = false;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("post:read")
     */
    private $coachname;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("post:read")
     */
    private $username;

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

    public function getCoachname(): ?string
    {
        return $this->coachname;
    }

    public function setCoachname(?string $coachname): self
    {
        $this->coachname = $coachname;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(?string $username): self
    {
        $this->username = $username;

        return $this;
    }

}
