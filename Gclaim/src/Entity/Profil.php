<?php

namespace App\Entity;

use App\Repository\ProfilRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;
/**
 * @ORM\Entity(repositoryClass=ProfilRepository::class)
 * @UniqueEntity(fields={"username"}, message="Il existe déjà un compte avec cet email")
 */
class Profil
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("post:read")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     * @Assert\NotBlank (message="this field is required")
     * @Groups("post:read")
     */
    private $description;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups("post:read")
     */
    private $rating;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank (message="this field is required")
     * @Groups("post:read")
     */
    private $username;

    /**
     * @ORM\OneToOne(targetEntity=Coach::class)
     * @ORM\JoinColumn(nullable=true)
     * @Groups("post:read")
     */
    private $user;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank (message="this field is required")
     * @Groups("post:read")
     */
    private $game;

    /**
     * @ORM\OneToMany(targetEntity=Rdv::class, mappedBy="coach",cascade={"all"},orphanRemoval=true)
     * @Groups("post:read")
     */
    private $rdvs;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numero;

    public function __construct()
    {
        $this->rdvs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getRating(): ?int
    {
        return $this->rating;
    }

    public function setRating(?int $rating): self
    {
        $this->rating = $rating;

        return $this;
    }

    public function getusername(): ?string
    {
        return $this->username;
    }

    public function setusername(?string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getUser(): ?Coach
    {
        return $this->user;
    }

    public function setUser(Coach $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getGame(): ?string
    {
        return $this->game;
    }

    public function setGame(?string $game): self
    {
        $this->game = $game;

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
            $rdv->setCoach($this);
        }

        return $this;
    }

    public function removeRdv(Rdv $rdv): self
    {
        if ($this->rdvs->removeElement($rdv)) {
            // set the owning side to null (unless already changed)
            if ($rdv->getCoach() === $this) {
                $rdv->setCoach(null);
            }
        }

        return $this;
    }

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(string $numero): self
    {
        $this->numero = $numero;

        return $this;
    }
}
