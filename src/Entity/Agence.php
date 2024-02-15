<?php

namespace App\Entity;

use App\Repository\AgenceRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: AgenceRepository::class)]
class Agence
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_agence = null;

    #[ORM\Column(length: 255)]
    private ?string $email_agence = null;

    #[ORM\Column(length: 255)]
    private ?string $tel_agence = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomAgence(): ?string
    {
        return $this->nom_agence;
    }

    public function setNomAgence(string $nom_agence): static
    {
        $this->nom_agence = $nom_agence;

        return $this;
    }

    public function getEmailAgence(): ?string
    {
        return $this->email_agence;
    }

    public function setEmailAgence(string $email_agence): static
    {
        $this->email_agence = $email_agence;

        return $this;
    }

    public function getTelAgence(): ?string
    {
        return $this->tel_agence;
    }

    public function setTelAgence(string $tel_agence): static
    {
        $this->tel_agence = $tel_agence;

        return $this;
    }
}
