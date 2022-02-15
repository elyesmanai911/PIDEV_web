<?php

namespace App\Entity;

use App\Repository\TournoiRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
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
     * @ORM\Column(type="integer")
     *      * @Assert\NotBlank(message="l'Id du jeu est obligatoire")
     *      @Assert\Length(
     *      min=1,
     *      max=3,
     *      minMessage = "Id jeu doit etre composer de 1 chiffre au minimum  ",
     *      maxMessage  ="Id jeu  ne doit pas depasser 3 chiffres ",
     * )
     */

    private $idjeu;

    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank(message="la date et l heure du vol sont obligatoires")
     * @Assert\GreaterThan("Today",message="Saisir une date à partir de la date d'aujourd'hui")

     */
    private $datec;

    /**
     * @ORM\Column(type="date")
     *  @Assert\NotBlank(message="la date et l heure du vol sont obligatoires")
     * @Assert\GreaterThan("Today",message="Saisir une date à partir de la date d'aujourd'hui")
     * @Assert\Expression("this.getDatec() < this.getDateev()", message="Veuillez vérifier la date de creation")
     */
    private $dateev;

    /**
     * @ORM\Column(type="time")

     */
    private $heureev;

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

    public function getIdjeu(): ?int
    {
        return $this->idjeu;
    }

    public function setIdjeu(int $idjeu): self
    {
        $this->idjeu = $idjeu;

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
}
