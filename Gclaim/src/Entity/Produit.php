<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;
/**
 * @ORM\Entity(repositoryClass=ProduitRepository::class)
 */
class Produit
{
    /**
     * @ORM\Id
     * @Doctrine\ORM\Mapping\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("post:read")
     */
    private $id_produit;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Length(
     *      min = 2,
     *      max = 20,
     *      minMessage = "Your first name must be at least 2 characters long",
     *      maxMessage = "Your first name cannot be longer than 20 characters"
     * )
     * @Groups("post:read")
     */
    private $nom_produit;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *  @Assert\NotBlank
     * @Assert\Length(
     *      min = 2,
     *      max = 220,
     *      minMessage = "Your first name must be at least 2 characters long",
     *      maxMessage = "Your first name cannot be longer than 20 characters"
     * )
     * @Groups("post:read")
     */
    private $description;

    /**
     * @ORM\Column(type="float", nullable=true)
     * @Doctrine\ORM\Mapping\GeneratedValue
     * * @Assert\Type(
     *     type="float",
     *     message="The value {{ value }} is not a valid {{ type }} you should put a float."
     * )
     * @Assert\NotBlank
     * @Groups("post:read")
     * @Assert\Positive
     */
    private $prix_produit;

    /**
     * @ORM\Column(type="date", nullable=true)
     * @Assert\NotBlank
     * @Groups("post:read")
     */
    private $dateAjout_produit;



    /**
     * @ORM\ManyToOne(targetEntity=Categorie::class, inversedBy="produits")
     * @ORM\JoinColumn(name="categorie", referencedColumnName="id_categorie")
     * @Groups("post:read")
     */
    private $categorie;

    /**
     * @ORM\OneToMany(targetEntity=Images::class, mappedBy="imageproduit", orphanRemoval=true)
     * @Groups("post:read")
     */
    private $images;

    /**
     * @ORM\Column(type="integer")
     * @Groups("post:read")
     * @Assert\Positive
     */
    private $Qte_produit;
    /**
     * @ORM\Column(type="integer")
     * @Groups("post:read")
     * @Assert\Positive
     */
    private $nbr_vu;


    public function getNbrVu()
    {
        return $this->nbr_vu;
    }


    public function setNbrVu($nbr_vu): void
    {
        $this->nbr_vu = $nbr_vu;
    }

    public function getQteProduit()
    {
        return $this->Qte_produit;
    }


    public function setQteProduit($Qte_produit): void
    {
        $this->Qte_produit = $Qte_produit;
    }


    public function __construct()
    {
        $this->images = new ArrayCollection();
    }

    public function getid_produit(): ?int
    {
        return $this->id_produit;
    }

    public function getNomProduit(): ?string
    {
        return $this->nom_produit;
    }

    public function setNomProduit(string $nom_produit): self
    {
        $this->nom_produit = $nom_produit;

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

    public function getPrixProduit(): ?float
    {
        return $this->prix_produit;
    }

    public function setPrixProduit(?float $prix_produit): self
    {
        $this->prix_produit = $prix_produit;

        return $this;
    }

    public function getDateAjoutProduit(): ?\DateTimeInterface
    {
        return $this->dateAjout_produit;
    }

    public function setDateAjoutProduit(?\DateTimeInterface $dateAjout_produit): self
    {
        $this->dateAjout_produit = $dateAjout_produit;

        return $this;
    }





    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * @return Collection|Images[]
     */
    public function getImages(): Collection
    {
        return $this->images;
    }

    public function addImage(Images $image): self
    {
        if (!$this->images->contains($image)) {
            $this->images[] = $image;
            $image->setImageproduit($this);
        }

        return $this;
    }

    public function removeImage(Images $image): self
    {
        if ($this->images->removeElement($image)) {
            // set the owning side to null (unless already changed)
            if ($image->getImageproduit() === $this) {
                $image->setImageproduit(null);
            }
        }

        return $this;
    }
}
