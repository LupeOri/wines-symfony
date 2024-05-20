<?php

namespace App\Entity;

use App\Repository\WineRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: WineRepository::class)]
class Wine
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $apellation = null;

    #[ORM\Column(length: 255)]
    private ?string $winery = null;

    #[ORM\Column(nullable: true)]
    private ?int $vintage = null;

    #[ORM\Column]
    private ?float $price = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $text = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getApellation(): ?string
    {
        return $this->apellation;
    }

    public function setApellation(string $apellation): static
    {
        $this->apellation = $apellation;

        return $this;
    }

    public function getWinery(): ?string
    {
        return $this->winery;
    }

    public function setWinery(string $winery): static
    {
        $this->winery = $winery;

        return $this;
    }

    public function getVintage(): ?int
    {
        return $this->vintage;
    }

    public function setVintage(?int $vintage): static
    {
        $this->vintage = $vintage;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): static
    {
        $this->text = $text;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }
}
