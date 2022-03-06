<?php

namespace App\Entity;

use App\Repository\ResidenceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ResidenceRepository::class)]
class Residence
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\Column(type: 'string', length: 255)]
    private $address;

    #[ORM\Column(type: 'string', length: 255)]
    private $city;

    #[ORM\Column(type: 'string', length: 45)]
    private $zipCode;

    #[ORM\Column(type: 'string', length: 255)]
    private $country;

    #[ORM\Column(type: 'string', length: 255)]
    private $inventoryFile;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'owner_id_user')]
    private $owner;

    #[ORM\ManyToOne(targetEntity: Rent::class, inversedBy: 'representative_id_residence')]
    private $representative;

    #[ORM\OneToMany(mappedBy: 'residence_id', targetEntity: Rent::class)]
    private $residence;

    public function __construct()
    {
        $this->residence = new ArrayCollection();
    }

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

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getZipCode(): ?string
    {
        return $this->zip_code;
    }

    public function setZipCode(string $zip_code): self
    {
        $this->zip_code = $zip_code;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getInventoryFile(): ?string
    {
        return $this->inventoryFile;
    }

    public function setInventoryFile(string $inventory_file): self
    {
        $this->inventoryFile = $inventoryFile;

        return $this;
    }

    public function getOwner(): ?User
    {
        return $this->owner;
    }

    public function setOwner(?User $owner): self
    {
        $this->owner = $owner;

        return $this;
    }

    public function getRepresentative(): ?Rent
    {
        return $this->representative;
    }

    public function setRepresentative(?Rent $representative): self
    {
        $this->representative = $representative;

        return $this;
    }

    /**
     * @return Collection|Rent[]
     */
    public function getResidence(): Collection
    {
        return $this->residence;
    }

    public function addResidence(Rent $residenceId): self
    {
        if (!$this->residence->contains($residence)) {
            $this->residence[] = $residence;
            $residence->setResidence($this);
        }

        return $this;
    }

    public function removeResidenceId(Rent $residence): self
    {
        if ($this->residence->removeElement($residence)) {
            // set the owning side to null (unless already changed)
            if ($residence->getResidence() === $this) {
                $residence->setResidence(null);
            }
        }

        return $this;
    }
}