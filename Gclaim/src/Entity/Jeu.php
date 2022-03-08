<?php

namespace App\Entity;

use App\Repository\JeuRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Tournoi;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass=JeuRepository::class)
 */
class Jeu
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     *     @Assert\NotBlank(message="veuillez saisir le nom du jeu")
     *     @Assert\Length(
     *     min=6,
     *     max=15,
     *     minMessage = "le nom du jeu doit etre supérieur a 6 caracteres",
     *     maxMessage  ="le nom du jeu ne doit pas depasser 15 caracteres",
     *     allowEmptyString = false
     *     )
     * @Assert\Type(
     * type={"alpha"},
     * message="Nom Jeu  {{ value }} doit contenir seulement des lettres alphabétiques")
     */
    private $nomjeu;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     *     @Assert\NotBlank(message="veuillez saisir le nom du createur")
     *     @Assert\Length(
     *     min=3,
     *     max=8,
     *     minMessage = "le nom du createur doit etre supérieur a 6 caracteres",
     *     maxMessage  ="le nom du createur ne doit pas depasser 15 caracteres",
     *     allowEmptyString = false
     *     )
     * @Assert\Type(
     * type={"alpha"},
     * message="Nom createur  {{ value }} doit contenir seulement des lettres alphabétiques")
     */
    private $createur;

    /**
     * @ORM\Column(type="date", nullable=true)
     * @Assert\NotBlank(message="la date est  obligatoire")
     */
    private $dateS;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $image;

    /**
     * @ORM\OneToMany(targetEntity=Tournoi::class, mappedBy="jeu",cascade={"remove"})
     */
    private $tournois;

    public function __construct()
    {
        $this->tournois = new ArrayCollection();
    }


    public function __toString()
    {
        return(string)$this->getNomjeu();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomjeu(): ?string
    {
        return $this->nomjeu;
    }

    public function setNomjeu(?string $nomjeu): self
    {
        $this->nomjeu = $nomjeu;

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

    public function getCreateur(): ?string
    {
        return $this->createur;
    }

    public function setCreateur(?string $createur): self
    {
        $this->createur = $createur;

        return $this;
    }

    public function getDateS(): ?\DateTimeInterface
    {
        return $this->dateS;
    }

    public function setDateS(?\DateTimeInterface $dateS): self
    {
        $this->dateS = $dateS;

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage( $image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return Collection|Tournoi[]
     */
    public function getTournois(): Collection
    {
        return $this->tournois;
    }

    public function addTournoi(Tournoi $tournoi): self
    {
        if (!$this->tournois->contains($tournoi)) {
            $this->tournois[] = $tournoi;
            $tournoi->setJeu($this);
        }

        return $this;
    }

    public function removeTournoi(Tournoi $tournoi): self
    {
        if ($this->tournois->removeElement($tournoi)) {
            // set the owning side to null (unless already changed)
            if ($tournoi->getJeu() === $this) {
                $tournoi->setJeu(null);
            }
        }

        return $this;
    }




}