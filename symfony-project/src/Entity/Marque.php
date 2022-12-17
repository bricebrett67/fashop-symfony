<?php

namespace App\Entity;

use App\Repository\MarqueRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MarqueRepository::class)]
class Marque
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column]
    private ?bool $homme = null;

    #[ORM\Column]
    private ?bool $femme = null;

    #[ORM\Column]
    private ?bool $enfant = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function isHomme(): ?bool
    {
        return $this->homme;
    }

    public function setHomme(bool $homme): self
    {
        $this->homme = $homme;

        return $this;
    }

    public function isFemme(): ?bool
    {
        return $this->femme;
    }

    public function setFemme(bool $femme): self
    {
        $this->femme = $femme;

        return $this;
    }

    public function isEnfant(): ?bool
    {
        return $this->enfant;
    }

    public function setEnfant(bool $enfant): self
    {
        $this->enfant = $enfant;

        return $this;
    }
}
