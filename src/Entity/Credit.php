<?php

namespace App\Entity;

use App\Repository\CreditRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: CreditRepository::class)]
class Credit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    #[Assert\NotBlank(message:"Vous devez saisir un montant")]
    #[Assert\Positive(message:"Vous devez saisir un montant positive")]
    #[Assert\Expression("this.getMontantTotale() > this.getCategorie().getMinMontant() && this.getMontantTotale() < this.getCategorie().getMaxMontant()",message:"Vous devez respecter l'intervale du montant.")]
    private ?float $montantTotale = null;

    #[ORM\Column]
    #[Assert\NotBlank(message:"Vous devez choisir un interét")]
    private ?int $interet = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateC = null;

    #[ORM\Column]
    private ?int $dureeTotale = null;

    #[ORM\Column]
    private ?bool $payed = null;

    #[ORM\Column]
    private ?bool $accepted = null;

    #[ORM\OneToMany(targetEntity: Remboursement::class, mappedBy: 'credit', orphanRemoval: true)]
    private Collection $remboursements;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Compte $compte = null;

    #[ORM\ManyToOne(inversedBy: 'credits')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotBlank(message:"Vous devez choisir une catégorie")]
    private ?CategorieCredit $categorie = null;

    public function __construct()
    {
        $this->remboursements = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMontantTotale(): ?float
    {
        return $this->montantTotale;
    }

    public function setMontantTotale(float $montantTotale): static
    {
        $this->montantTotale = $montantTotale;

        return $this;
    }

    public function getInteret(): ?int
    {
        return $this->interet;
    }

    public function setInteret(int $interet): static
    {
        $this->interet = $interet;

        return $this;
    }

    public function getDateC(): ?\DateTimeInterface
    {
        return $this->dateC;
    }

    public function setDateC(\DateTimeInterface $dateC): static
    {
        $this->dateC = $dateC;

        return $this;
    }

    public function getDureeTotale(): ?int
    {
        return $this->dureeTotale;
    }

    public function setDureeTotale(int $dureeTotale): static
    {
        $this->dureeTotale = $dureeTotale;

        return $this;
    }

    public function isPayed(): ?bool
    {
        return $this->payed;
    }

    public function setPayed(bool $payed): static
    {
        $this->payed = $payed;

        return $this;
    }

    public function isAccepted(): ?bool
    {
        return $this->accepted;
    }

    public function setAccepted(bool $accepted): static
    {
        $this->accepted = $accepted;

        return $this;
    }

    /**
     * @return Collection<int, Remboursement>
     */
    public function getRemboursements(): Collection
    {
        return $this->remboursements;
    }

    public function addRemboursement(Remboursement $remboursement): static
    {
        if (!$this->remboursements->contains($remboursement)) {
            $this->remboursements->add($remboursement);
            $remboursement->setCredit($this);
        }

        return $this;
    }

    public function removeRemboursement(Remboursement $remboursement): static
    {
        if ($this->remboursements->removeElement($remboursement)) {
            // set the owning side to null (unless already changed)
            if ($remboursement->getCredit() === $this) {
                $remboursement->setCredit(null);
            }
        }

        return $this;
    }
    /**
     * @Assert\Callback
     */

    public function validateMontantTotale(ExecutionContextInterface $context, $payload)
    {
        if ($this->montantTotale !== null && $this->interet !== null) {
            if (($this->interet == 10 && $this->montantTotale < 50000.0) ||
                ($this->interet == 15 && ($this->montantTotale < 10000.0 || $this->montantTotale > 49999.0)) ||
                ($this->interet == 20 && ($this->montantTotale < 2000.0 || $this->montantTotale > 9999.0))) {
                $context->buildViolation('Le montant total doit être valide en fonction de l\'intérêt.')
                    ->atPath('montantTotale')
                    ->addViolation();
            }
        }
    }

    public function __toString(): string
    {
        // Retourner une représentation de l'entité sous forme de chaîne
        return 'Credit #' . $this->id; // Vous pouvez personnaliser cette représentation selon vos besoins
    }

    public function getCompte(): ?Compte
    {
        return $this->compte;
    }

    public function setCompte(Compte $compte): static
    {
        $this->compte = $compte;

        return $this;
    }

    public function getCategorie(): ?CategorieCredit
    {
        return $this->categorie;
    }

    public function setCategorie(?CategorieCredit $categorie): static
    {
        $this->categorie = $categorie;

        return $this;
    }
}
