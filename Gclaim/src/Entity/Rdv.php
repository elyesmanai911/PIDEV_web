<?php

namespace App\Entity;

use App\Repository\RdvRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RdvRepository::class)
 */
class Rdv
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity=Coach::class, inversedBy="rdvs")
     */
    private $coachs;

    /**
     * @ORM\ManyToOne(targetEntity=SimpleUtilisateur::class, inversedBy="rdvs")
     */
    private $users;


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

    public function getCoachs(): ?Coach
    {
        return $this->coachs;
    }

    public function setCoachs(?Coach $coachs): self
    {
        $this->coachs = $coachs;

        return $this;
    }

    public function getUsers(): ?SimpleUtilisateur
    {
        return $this->users;
    }

    public function setUsers(?SimpleUtilisateur $users): self
    {
        $this->users = $users;

        return $this;
    }


}
