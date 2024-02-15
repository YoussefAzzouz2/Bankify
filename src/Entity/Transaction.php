<?php

namespace App\Entity;

use App\Repository\TransactionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: TransactionRepository::class)]
class Transaction
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $Montant = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $Date_T = null;

    #[ORM\Column(length: 255)]
    #[Assert\Choice(choices: ['achat', 'retrait','paiement'])]
    private ?string $Type_T = null;

    #[ORM\Column(length: 255)]
    #[Assert\Choice(choices: ['approuvée', 'en attente','refusée'])]
    private ?string $Statut_T = null;

    #[ORM\ManyToOne(inversedBy: 'transactions')]
    private ?Carte $id_C = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getIdC(): ?Carte
    {
        return $this->id_C;
    }

    public function setIdC(?Carte $id_C): static
    {
        $this->id_C = $id_C;

        return $this;
    }
}
