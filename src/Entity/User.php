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
    private $ownerUser;

    #[ORM\OneToMany(mappedBy: 'tenant_id', targetEntity: Rent::class)]
    private $tenantUser;

    public function __construct()
    {
        $this->ownerUser = new ArrayCollection();
        $this->tenantUser = new ArrayCollection();
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
    public function getOwnerUser(): Collection
    {
        return $this->ownerUser;
    }

    public function addOwnerUser(Residence $ownerUser): self
    {
        if (!$this->ownerUser->contains($ownerUser)) {
            $this->ownerUuser[] = $ownerUser;
            $ownerUser->setOwner($this);
        }

        return $this;
    }

    public function removeOwnerUser(Residence $ownerUser): self
    {
        if ($this->ownerUser->removeElement($ownerUser)) {
            // set the owning side to null (unless already changed)
            if ($ownerUser->getOwner() === $this) {
                $ownerUser->setOwner(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Rent[]
     */
    public function getTenantUser(): Collection
    {
        return $this->tenantUser;
    }

    public function addTenantUser(Rent $tenantUser): self
    {
        if (!$this->tenantUser->contains($tenantUser)) {
            $this->tenantUser[] = $tenantUser;
            $tenantUser->setTenant($this);
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
