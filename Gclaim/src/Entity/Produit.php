<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProduitRepository::class)
 */
class Produit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
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
     */
    private $description;

    /**
     * @ORM\Column(type="float", nullable=true)
     * @Assert\NotBlank
     * @Assert\Lengtht
     */
    private $prix_produit;

    /**
     * @ORM\Column(type="date", nullable=true)
     * @Assert\NotBlank
     */
    private $dateAjout_produit;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image_produit;

    /**
     * @ORM\ManyToOne(targetEntity=Categorie::class, inversedBy="produits")
     * @ORM\JoinColumn(name="categorie", referencedColumnName="id_categorie")
     */
    private $categorie;

    public function getId(): ?int
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

    public function getImageProduit(): ?string
    {
        return $this->image_produit;
    }

    public function setImageProduit(?string $image_produit): self
    {
        $this->image_produit = $image_produit;

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
}
