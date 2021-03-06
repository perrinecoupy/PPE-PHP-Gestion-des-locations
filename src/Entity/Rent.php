<?php

namespace App\Entity;

use App\Repository\RentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RentRepository::class)]
#[ORM\Table(name: 'rent')]
class Rent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $inventoryFile;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $arrivalDate;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $departureDate;

    #[ORM\Column(type: 'text', nullable: true)]
    private $tenantComments;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $tenantSignature;

    #[ORM\Column(type: 'string', length: 45, nullable: true)]
    private $tenantValidatedAt;

    #[ORM\Column(type: 'text', nullable: true)]
    private $representativeComments;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $representativeSignature;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private $representativeValidatedAt;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'tenant_id_user')]
    private $tenant;

    #[ORM\ManyToOne(targetEntity: Residence::class, inversedBy: 'residence_id')]
    private $residence;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInventoryFile(): ?string
    {
        return $this->inventoryFile;
    }

    public function setInventoryFile(string $inventoryFile): self
    {
        $this->inventoryFile = $inventoryFile;

        return $this;
    }

    public function getArrivalDate(): ?string
    {
        return $this->arrivalDate;
    }

    public function setArrivalDate(string $arrivalDate): self
    {
        $this->arrivalDate = $arrivalDate;

        return $this;
    }

    public function getDepartureDate(): ?string
    {
        return $this->departureDate;
    }

    public function setDepartureDate(string $departureDate): self
    {
        $this->departureDate = $departureDate;

        return $this;
    }

    public function getTenantComments(): ?string
    {
        return $this->tenantComments;
    }

    public function setTenantComments(string $tenantComments): self
    {
        $this->tenantComments = $tenantComments;

        return $this;
    }

    public function getTenantSignature(): ?string
    {
        return $this->tenantSignature;
    }

    public function setTenantSignature(string $tenantSignature): self
    {
        $this->tenantSignature = $tenantSignature;

        return $this;
    }

    public function getTenantValidatedAt(): ?string
    {
        return $this->tenantValidatedAt;
    }

    public function setTenantValidatedAt(string $tenantValidatedAt): self
    {
        $this->tenantValidatedAt = $tenantValidatedAt;

        return $this;
    }

    public function getRepresentativeComments(): ?string
    {
        return $this->representativeComments;
    }

    public function setRepresentativeComments(string $representativeComments): self
    {
        $this->representativeComments = $representativeComments;

        return $this;
    }

    public function getRepresentativeSignature(): ?string
    {
        return $this->representativeSignature;
    }

    public function setRepresentativeSignature(string $representativeSignature): self
    {
        $this->representativeSignature = $representativeSignature;

        return $this;
    }

    public function getRepresentativeValidatedAt(): ?\DateTimeInterface
    {
        return $this->representativeValidatedAt;
    }

    public function setRepresentativeValidatedAt(\DateTimeInterface $representativeValidatedAt): self
    {
        $this->representativeValidatedAt = $representativeValidatedAt;

        return $this;
    }

    public function getTenant(): ?User
    {
        return $this->tenant;
    }

    public function setTenant(?User $tenant): self
    {
        $this->tenant = $tenant;

        return $this;
    }

    public function getResidence(): ?Residence
    {
        return $this->residence;
    }

    public function setResidence(?Residence $residence): self
    {
        $this->residence = $residence;

        return $this;
    }
}