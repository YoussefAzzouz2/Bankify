<?php

namespace App\Entity;

use App\Repository\PackRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PackRepository::class)]
class Pack
{
    #[ORM\Id]
    #[ORM\Column(type: 'string', length: 255)]
    private ?string $nom_pack = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Description = null;

    #[ORM\Column(type: 'string', length: 255)] // Modification du type en string
    private ?string $price = null;

    #[ORM\Column(length: 500)]
    private ?string $benefits = null;

    #[ORM\OneToMany(targetEntity: CompteClient::class, mappedBy: 'nom_pack')]
    private Collection $compteClients;

    #[ORM\Column]
    private ?int $id = null;

    public function __construct()
    {
        $this->compteClients = new ArrayCollection();
    }

    public function getNomPack(): ?string
    {
        return $this->nom_pack;
    }

    public function setNomPack(string $nom_pack): static
    {
        $this->nom_pack = $nom_pack;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): static
    {
        $this->Description = $Description;

        return $this;
    }

    public function getPrice(): ?string // Modification du type de retour en string
    {
        return $this->price;
    }

    public function setPrice(string $price): static // Modification du type de l'argument en string
    {
        $this->price = $price;

        return $this;
    }

    public function getBenefits(): ?string
    {
        return $this->benefits;
    }

    public function setBenefits(string $benefits): static
    {
        $this->benefits = $benefits;

        return $this;
    }

    /**
     * @return Collection<int, CompteClient>
     */
    public function getCompteClients(): Collection
    {
        return $this->compteClients;
    }

    public function addCompteClient(CompteClient $compteClient): static
    {
        if (!$this->compteClients->contains($compteClient)) {
            $this->compteClients->add($compteClient);
            $compteClient->setNomPack($this);
        }

        return $this;
    }

    public function removeCompteClient(CompteClient $compteClient): static
    {
        if ($this->compteClients->removeElement($compteClient)) {
            // set the owning side to null (unless already changed)
            if ($compteClient->getNomPack() === $this) {
                $compteClient->setNomPack(null);
            }
        }

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }
}
