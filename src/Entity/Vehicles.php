<?php

namespace App\Entity;

use App\Repository\VehiclesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VehiclesRepository::class)]
class Vehicles
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: '0')]
    private ?string $prix = null;

    #[ORM\Column]
    private ?int $année = null;

    #[ORM\Column]
    private ?int $kilométrage = null;

    #[ORM\Column(length: 255)]
    private ?string $galerieImages = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getAnnée(): ?int
    {
        return $this->année;
    }

    public function setAnnée(int $année): static
    {
        $this->année = $année;

        return $this;
    }

    public function getKilométrage(): ?int
    {
        return $this->kilométrage;
    }

    public function setKilométrage(int $kilométrage): static
    {
        $this->kilométrage = $kilométrage;

        return $this;
    }

    public function getGalerieImages(): ?string
    {
        return $this->galerieImages;
    }

    public function setGalerieImages(string $galerieImages): static
    {
        $this->galerieImages = $galerieImages;

        return $this;
    }
}
