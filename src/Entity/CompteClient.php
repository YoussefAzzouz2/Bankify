<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\CompteClientRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CompteClientRepository::class)]
class CompteClient
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Assert\Length(min: 3)]
    #[Assert\Type("alpha")]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Assert\Length(min: 3)]
    #[Assert\Type("alpha")]
    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Assert\Length(min: 8)]
    private ?string $tel = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Assert\Email]
    private ?string $mail = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Assert\Length(min: 8, max: 16)]
    private ?string $rib = null;

    #[ORM\Column]
    private ?float $solde = null;

    #[ORM\OneToMany(targetEntity: Virement::class, mappedBy: 'id_compte')]
    private Collection $virements;

    public function __construct()
    {
        $this->virements = new ArrayCollection();
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

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): static
    {
        $this->tel = $tel;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): static
    {
        $this->mail = $mail;

        return $this;
    }

    public function getRib(): ?string
    {
        return $this->rib;
    }

    public function setRib(string $rib): static
    {
        $this->rib = $rib;

        return $this;
    }

    public function getSolde(): ?float
    {
        return $this->solde;
    }

    public function setSolde(float $solde): static
    {
        $this->solde = $solde;

        return $this;
    }

    /**
     * @return Collection<int, Virement>
     */
    public function getVirements(): Collection
    {
        return $this->virements;
    }

    public function addVirement(Virement $virement): static
    {
        if (!$this->virements->contains($virement)) {
            $this->virements->add($virement);
            $virement->setIdCompte($this);
        }

        return $this;
    }

    public function removeVirement(Virement $virement): static
    {
        if ($this->virements->removeElement($virement)) {
            // set the owning side to null (unless already changed)
            if ($virement->getIdCompte() === $this) {
                $virement->setIdCompte(null);
            }
        }

        return $this;
    }
}
