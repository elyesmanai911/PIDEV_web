<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;
Class Achat {
    /**
     * @Assert\NotBlank
     * @Assert\Positive
     */
     
    public $Numero_De_Telephone;
    /**
     * @Assert\NotBlank
     * @Assert\Length(
     *      min = 2,
     *      max = 220,
     *      minMessage = "Votre Addresse doit étre plus que 2 characteres",
     *      maxMessage = "Votre Addresse doit étre moins que 20 characteres"
     * )
     */
    public $Addresse;


    public function __construct()
    {
    }

    public function getNumeroDeTelephone(): ?int
    {
        return $this->Numero_De_Telephone;
    }

    public function setnumeroDeTelephone(int $Numero_De_Telephone): self
    {
        $this->Numero_De_Telephone = $Numero_De_Telephone;

        return $this;
    }
    public function getAddresse(): ?string
    {
        return $this->Addresse;
    }

    public function setAddresse(string $Addresse): self
    {
        $this->Addresse = $Addresse;

        return $this;
    }
}

