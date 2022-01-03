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
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $role;

    #[ORM\Column(type: 'string', length: 45)]
    private $email;

    #[ORM\Column(type: 'string', length: 255)]
    private $password;

    #[ORM\Column(type: 'integer')]
    private $isVerified;

    #[ORM\OneToMany(mappedBy: 'owner_id', targetEntity: Residence::class)]
    private $ownerIdUser;

    #[ORM\OneToMany(mappedBy: 'tenant_id', targetEntity: Rent::class)]
    private $tenantIdUser;

    public function __construct()
    {
        $this->ownerIdUser = new ArrayCollection();
        $this->tenantIdUser = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getIsVerified(): ?int
    {
        return $this->isVerified;
    }

    public function setIsVerified(int $is_verified): self
    {
        $this->isVerified = $isVerified;

        return $this;
    }

    /**
     * @return Collection|Residence[]
     */
    public function getOwnerIdUser(): Collection
    {
        return $this->ownerIdUser;
    }

    public function addOwnerIdUser(Residence $ownerIdUser): self
    {
        if (!$this->ownerIdUser->contains($ownerIdUser)) {
            $this->ownerIdUuser[] = $ownerIdUser;
            $ownerIdUser->setOwner($this);
        }

        return $this;
    }

    public function removeOwnerIdUser(Residence $ownerIdUser): self
    {
        if ($this->ownerIdUser->removeElement($ownerIdUser)) {
            // set the owning side to null (unless already changed)
            if ($ownerIdUser->getOwnerId() === $this) {
                $ownerIdUser->setOwnerId(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Rent[]
     */
    public function getTenantIdUser(): Collection
    {
        return $this->tenantIdUser;
    }

    public function addTenantIdUser(Rent $tenantIdUser): self
    {
        if (!$this->tenantIdUser->contains($tenantIdUser)) {
            $this->tenantIdUser[] = $tenantIdUser;
            $tenantIdUser->setTenant($this);
        }

        return $this;
    }

    public function removeTenantIdUser(Rent $tenantIdUser): self
    {
        if ($this->tenantIdUser->removeElement($tenantIdUser)) {
            // set the owning side to null (unless already changed)
            if ($tenantIdUser->getTenant() === $this) {
                $tenantIdUser->setTenant(null);
            }
        }

        return $this;
    }
}
