<?php

namespace App\Entity;

use App\Repository\AisShipTypeRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=AisShipTypeRepository::class)
 * @ORM\Table(name="aisshiptype")
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
     * @ORM\Column(name="aisshiptype",type="integer")
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

    /**
     * @ORM\ManyToOne(targetEntity=Port::class, inversedBy="lesTypes")
     */
    private $lesPorts;

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

    public function getLesPorts(): ?Port
    {
        return $this->lesPorts;
    }

    public function setLesPorts(?Port $lesPorts): self
    {
        $this->lesPorts = $lesPorts;

        return $this;
    }
}
