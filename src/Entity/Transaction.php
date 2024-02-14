<?php

namespace App\Entity;

use App\Repository\TransactionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TransactionRepository::class)]
class Transaction
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $ID_T = null;

    #[ORM\Column]
    private ?int $Montant = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $Date_T = null;

    #[ORM\Column(length: 255)]
    private ?string $Type_T = null;

    #[ORM\Column(length: 255)]
    private ?string $Statut_T = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIDT(): ?int
    {
        return $this->ID_T;
    }

    public function setIDT(int $ID_T): static
    {
        $this->ID_T = $ID_T;

        return $this;
    }

    public function getMontant(): ?int
    {
        return $this->Montant;
    }

    public function setMontant(int $Montant): static
    {
        $this->Montant = $Montant;

        return $this;
    }

    public function getDateT(): ?\DateTimeInterface
    {
        return $this->Date_T;
    }

    public function setDateT(\DateTimeInterface $Date_T): static
    {
        $this->Date_T = $Date_T;

        return $this;
    }

    public function getTypeT(): ?string
    {
        return $this->Type_T;
    }

    public function setTypeT(string $Type_T): static
    {
        $this->Type_T = $Type_T;

        return $this;
    }

    public function getStatutT(): ?string
    {
        return $this->Statut_T;
    }

    public function setStatutT(string $Statut_T): static
    {
        $this->Statut_T = $Statut_T;

        return $this;
    }
}
