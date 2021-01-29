<?php

namespace App\Entity;

use App\Repository\ReceptRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReceptRepository::class)
 */
class Recept
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $naam;

    /**
     * @ORM\Column(type="float")
     */
    private $prijsLiter;

    /**
     * @ORM\Column(type="text")
     */
    private $bereidingsWijze;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNaam(): ?string
    {
        return $this->naam;
    }

    public function setNaam(string $naam): self
    {
        $this->naam = $naam;

        return $this;
    }

    public function getPrijsLiter(): ?float
    {
        return $this->prijsLiter;
    }

    public function setPrijsLiter(float $prijsLiter): self
    {
        $this->prijsLiter = $prijsLiter;

        return $this;
    }

    public function getBereidingsWijze(): ?string
    {
        return $this->bereidingsWijze;
    }

    public function setBereidingsWijze(string $bereidingsWijze): self
    {
        $this->bereidingsWijze = $bereidingsWijze;

        return $this;
    }
}
