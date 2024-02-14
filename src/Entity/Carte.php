<?php

namespace App\Entity;

use App\Repository\CarteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CarteRepository::class)]
class Carte
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $ID_C = null;

    #[ORM\Column]
    private ?int $Num_C = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $Date_Exp = null;

    #[ORM\Column(length: 255)]
    private ?string $Type_C = null;

    #[ORM\Column(length: 255)]
    private ?string $Statut_C = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIDC(): ?int
    {
        return $this->ID_C;
    }

    public function setIDC(int $ID_C): static
    {
        $this->ID_C = $ID_C;

        return $this;
    }

    public function getNumC(): ?int
    {
        return $this->Num_C;
    }

    public function setNumC(int $Num_C): static
    {
        $this->Num_C = $Num_C;

        return $this;
    }

    public function getDateExp(): ?\DateTimeInterface
    {
        return $this->Date_Exp;
    }

    public function setDateExp(\DateTimeInterface $Date_Exp): static
    {
        $this->Date_Exp = $Date_Exp;

        return $this;
    }

    public function getTypeC(): ?string
    {
        return $this->Type_C;
    }

    public function setTypeC(string $Type_C): static
    {
        $this->Type_C = $Type_C;

        return $this;
    }

    public function getStatutC(): ?string
    {
        return $this->Statut_C;
    }

    public function setStatutC(string $Statut_C): static
    {
        $this->Statut_C = $Statut_C;

        return $this;
    }
}
