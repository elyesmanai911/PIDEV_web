<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Mapping\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;


/**
 * @ORM\Entity(repositoryClass=ArticleRepository::class)
 */
class Article
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("post:read")

     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="le titre est obligatoire")
     * @Assert\Length(
     *      max = "255",
     *      maxMessage = "le titre est obligatoire")
     * @Groups("post:read")
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="la description est obligatoire")
     * @Assert\Length(
     *      max = "255",
     *      maxMessage = "le sujet ne peut pas être plus long que {{ limit }} caractères")
     * @Groups("post:read")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("post:read")
     * @Assert\NotBlank(message="l'image' est obligatoire")
     */
    private $image;

    /**
     * @ORM\Column(type="datetime")
     * @Groups("post:read")
     */
    private $createAt;

    /**
     * @ORM\OneToMany(targetEntity=Commentaire::class, mappedBy="article" ,cascade={"remove"})
     * @Groups("post:read")
     */
    private $commentaires;

    /**
     * @ORM\ManyToOne(targetEntity=Cat::class, inversedBy="articles")
     * @ORM\JoinColumn(nullable=false)
     * @Groups("post:read")
     */
    private $cat;
    /**
     * @ORM\Column(type="integer")
     * @Groups("post:read")
     * @Assert\Positive
     */
    private $nbr_vu;


    public function __construct()
    {
        $this->commentaires = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getCreateAt(): ?\DateTimeInterface
    {
        return $this->createAt;
    }

    public function setCreateAt(\DateTimeInterface $createAt): self
    {
        $this->createAt = $createAt;

        return $this;
    }

    /**
     * @return Collection|Commentaire[]
     */
    public function getCommentaires(): Collection
    {
        return $this->commentaires;
    }

    public function addCommentaire(Commentaire $commentaire): self
    {
        if (!$this->commentaires->contains($commentaire)) {
            $this->commentaires[] = $commentaire;
            $commentaire->setArticle($this);
        }

        return $this;
    }

    public function removeCommentaire(Commentaire $commentaire): self
    {
        if ($this->commentaires->removeElement($commentaire)) {
            // set the owning side to null (unless already changed)
            if ($commentaire->getArticle() === $this) {
                $commentaire->setArticle(null);
            }
        }

        return $this;
    }
    public function __toString(){
        return ('$this->id') ;

    }

    public function getCat(): ?Cat
    {
        return $this->cat;
    }

    public function setCat(?Cat $cat): self
    {
        $this->cat = $cat;

        return $this;
    }
    public function setNbrVu($nbr_vu): void
    {
        $this->nbr_vu = $nbr_vu;
    }
    public function getNbrVu()
    {
        return $this->nbr_vu;
    }
}
