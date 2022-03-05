<?php

namespace App\Entity;

use App\Repository\TournoiRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\Jeu;

/**
 * @ORM\Entity(repositoryClass=TournoiRepository::class)
 */
class Tournoi
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
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
     */
    private $nomtournoi;


    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank(message="la date est obligatoire")
     * @Assert\GreaterThan("Today",message="Saisir une date à partir de la date d'aujourd'hui")

     */
    private $datec;

    /**
     * @ORM\Column(type="date")
     *  @Assert\NotBlank(message="la date est obligatoire")
     * @Assert\GreaterThan("Today",message="Saisir une date à partir de la date d'aujourd'hui")
     * @Assert\Expression("this.getDatec() < this.getDateev()", message="Veuillez vérifier la date de creation")
     */
    private $dateev;

    /**
     * @ORM\Column(type="time")

     */
    private $heureev;

    /**
     * @ORM\ManyToOne(targetEntity=Jeu::class, inversedBy="tournois")
     */
    private $jeu;


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
}
