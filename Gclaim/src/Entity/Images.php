<?php

namespace App\Entity;

use App\Repository\ImagesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ImagesRepository::class)
 */
class Images
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=produit::class, inversedBy="images", cascade={"persist"})
     * @ORM\JoinColumn(name="produit", referencedColumnName="id_produit")
     */
    private $imageproduit;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $url_image;


    public function getUrlImage()
    {
        return $this->url_image;
    }


    public function setUrlImage($url_image): void
    {
        $this->url_image = $url_image;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImageproduit(): ?produit
    {
        return $this->imageproduit;
    }

    public function setImageproduit(?produit $imageproduit): self
    {
        $this->imageproduit = $imageproduit;

        return $this;
    }


}
