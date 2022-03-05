<?php

namespace App\Entity;

use App\Repository\TournoiRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\Jeu;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=TournoiRepository::class)
 */
class Tournoi
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("post:read")
     */
    private $id;

    /**
     * @ORM\Column(type="string",length="50")
     *    * @Assert\NotBlank(message="veuillez saisir le nom du tournoi")
     *     @Assert\Length(
     *     min=6,
     *     max=15,
     *     minMessage = "le nom du tournoi doit etre supérieur a 6 caracteres",
     *     maxMessage  ="le nom du tournoi ne doit pas depasser 15 caracteres",
     *     allowEmptyString = false
     *     )
     * @Assert\Type(
     * type={"alpha"},
     * message="Nom Tournoi  {{ value }} doit contenir seulement des lettres alphabétiques")
     * @Groups("post:read")
     */
    private $nomtournoi;


    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     * @Groups("post:read")
     */
    private $description;

    /**
     * @ORM\Column(type="date")
     * @Groups("post:read")
     * @Assert\NotBlank(message="la date est obligatoire")
     * @Assert\GreaterThan("Today",message="Saisir une date à partir de la date d'aujourd'hui")

     */
    private $datec;

    /**
     * @ORM\Column(type="date")
     * @Groups("post:read")
     *  @Assert\NotBlank(message="la date est obligatoire")
     * @Assert\GreaterThan("Today",message="Saisir une date à partir de la date d'aujourd'hui")
     * @Assert\Expression("this.getDatec() < this.getDateev()", message="Veuillez vérifier la date de creation")
     */
    private $dateev;

    /**
     * @ORM\Column(type="time")
     * @Groups("post:read")
     */
    private $heureev;

    /**
     * @ORM\ManyToOne(targetEntity=Jeu::class, inversedBy="tournois")
     */
    private $jeu;

    /**
     * @ORM\ManyToMany(targetEntity=Equipe::class, inversedBy="Tournois")
     */
    private $equipes;

    /**
     * @ORM\Column(type="string", length=500)
     * @Groups("post:read")
     */
    private $image;

    public function __construct()
    {
        $this->equipes = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomtournoi(): ?string
    {
        return $this->nomtournoi;
    }

    public function setNomtournoi(string $nomtournoi): self
    {
        $this->nomtournoi = $nomtournoi;

        return $this;
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

    public function getDatec(): ?\DateTimeInterface
    {
        return $this->datec;
    }

    public function setDatec(\DateTimeInterface $datec): self
    {
        $this->datec = $datec;

        return $this;
    }

    public function getDateev(): ?\DateTimeInterface
    {
        return $this->dateev;
    }

    public function setDateev(\DateTimeInterface $dateev): self
    {
        $this->dateev = $dateev;

        return $this;
    }

    public function getHeureev(): ?\DateTimeInterface
    {
        return $this->heureev;
    }

    public function setHeureev(\DateTimeInterface $heureev): self
    {
        $this->heureev = $heureev;

        return $this;
    }

    public function getJeu(): ?Jeu
    {
        return $this->jeu;
    }

    public function setJeu(?Jeu $jeu): self
    {
        $this->jeu = $jeu;

        return $this;
    }

    /**
     * @return Collection|Equipe[]
     */
    public function getEquipes(): Collection
    {
        return $this->equipes;
    }

    public function addEquipe(Equipe $equipe): self
    {
        if (!$this->equipes->contains($equipe)) {
            $this->equipes[] = $equipe;
        }

        return $this;
    }

    public function removeEquipe(Equipe $equipe): self
    {
        $this->equipes->removeElement($equipe);

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage(string $image)
    {
        $this->image = $image;

        return $this;
    }
}
