<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\OneToMany(mappedBy: 'UserID', targetEntity: Compte::class)]
    private Collection $comptes;

    #[ORM\OneToMany(mappedBy: 'destinationC', targetEntity: Cheque::class)]
    private Collection $cheques;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    public function __construct()
    {
        $this->comptes = new ArrayCollection();
        $this->cheques = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * @return Collection<int, Compte>
     */
    public function getComptes(): Collection
    {
        return $this->comptes;
    }

    public function addCompte(Compte $compte): static
    {
        if (!$this->comptes->contains($compte)) {
            $this->comptes->add($compte);
            $compte->setUserID($this);
        }

        return $this;
    }

    public function removeCompte(Compte $compte): static
    {
        if ($this->comptes->removeElement($compte)) {
            // set the owning side to null (unless already changed)
            if ($compte->getUserID() === $this) {
                $compte->setUserID(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Cheque>
     */
    public function getCheques(): Collection
    {
        return $this->cheques;
    }

    public function addCheque(Cheque $cheque): static
    {
        if (!$this->cheques->contains($cheque)) {
            $this->cheques->add($cheque);
            $cheque->setDestinationC($this);
        }

        return $this;
    }

    public function removeCheque(Cheque $cheque): static
    {
        if ($this->cheques->removeElement($cheque)) {
            // set the owning side to null (unless already changed)
            if ($cheque->getDestinationC() === $this) {
                $cheque->setDestinationC(null);
            }
        }

        return $this;
    }
    public function getFullName(): string
    {
        return $this->nom . ' ' . $this->prenom;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }
}
