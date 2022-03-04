<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;

Class Achat {
    /**
     * @Assert\NotBlank
     * @Assert\Positive
     * @Assert\Length(min = 8, max = 20, minMessage = "Il faut tapper un numero de telephone correcte", maxMessage = "Il faut tapper un numero de telephone correcte")
     */
     
    public $Numero_De_Telephone;
    
    /**
     * @Assert\Type("string")
     * @Assert\NotBlank
     * @Assert\Length(
     *      min = 2,
     *      max = 220,
     *      minMessage = "Votre Addresse doit étre plus que 4 characteres",
     *      maxMessage = "Votre Addresse doit étre moins que 20 characteres"
     * )
     */
    public $Addresse;


    public function __construct()
    {
    }

    public function getNumeroDeTelephone(): ? string
    {
        return $this->Numero_De_Telephone;
    }

    public function setnumeroDeTelephone(string $Numero_De_Telephone): self
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

