<?php

namespace App\Entity;

use App\Repository\EvenementRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EvenementRepository::class)]
class Evenement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Evenements = null;

    #[ORM\Column(length: 255)]
    private ?string $Evenement = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEvenements(): ?string
    {
        return $this->Evenements;
    }

    public function setEvenements(string $Evenements): static
    {
        $this->Evenements = $Evenements;

        return $this;
    }

    public function getEvenement(): ?string
    {
        return $this->Evenement;
    }

    public function setEvenement(string $Evenement): static
    {
        $this->Evenement = $Evenement;

        return $this;
    }
}
