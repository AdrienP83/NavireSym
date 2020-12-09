<?php

namespace App\Entity;

use App\Repository\AisShipTypeRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=AisShipTypeRepository::class)
 */
class AisShipType
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Length(
     * min=1,
     * max=9,
     * minMessage = "Le type d'un navire est compris entre 1et 9",
     * maxMessage = "Le type d'un navire est compris entre 1 et 9",
     * allowEmptyString = false
     * )
     */
    private $aisShiptype;

    /**
     * @ORM\Column(type="string", length=60)

     */
    private $libelle;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAisShiptype(): ?int
    {
        return $this->aisShiptype;
    }

    public function setAisShiptype(int $aisShiptype): self
    {
        $this->aisShiptype = $aisShiptype;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }
}
