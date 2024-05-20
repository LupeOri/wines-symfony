<?php

namespace App\Entity;

use App\Repository\TextRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TextRepository::class)]
class Text
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $grape = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGrape(): ?string
    {
        return $this->grape;
    }

    public function setGrape(?string $grape): static
    {
        $this->grape = $grape;

        return $this;
    }
}
