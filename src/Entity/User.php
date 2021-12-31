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
    private $is_verified;

    #[ORM\OneToMany(mappedBy: 'owner_id', targetEntity: Residence::class)]
    private $owner_id_user;

    #[ORM\OneToMany(mappedBy: 'tenant_id', targetEntity: Rent::class)]
    private $tenant_id_user;

    public function __construct()
    {
        $this->owner_id_user = new ArrayCollection();
        $this->tenant_id_user = new ArrayCollection();
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
        return $this->is_verified;
    }

    public function setIsVerified(int $is_verified): self
    {
        $this->is_verified = $is_verified;

        return $this;
    }

    /**
     * @return Collection|Residence[]
     */
    public function getOwnerIdUser(): Collection
    {
        return $this->owner_id_user;
    }

    public function addOwnerIdUser(Residence $ownerIdUser): self
    {
        if (!$this->owner_id_user->contains($ownerIdUser)) {
            $this->owner_id_user[] = $ownerIdUser;
            $ownerIdUser->setOwnerId($this);
        }

        return $this;
    }

    public function removeOwnerIdUser(Residence $ownerIdUser): self
    {
        if ($this->owner_id_user->removeElement($ownerIdUser)) {
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
        return $this->tenant_id_user;
    }

    public function addTenantIdUser(Rent $tenantIdUser): self
    {
        if (!$this->tenant_id_user->contains($tenantIdUser)) {
            $this->tenant_id_user[] = $tenantIdUser;
            $tenantIdUser->setTenantId($this);
        }

        return $this;
    }

    public function removeTenantIdUser(Rent $tenantIdUser): self
    {
        if ($this->tenant_id_user->removeElement($tenantIdUser)) {
            // set the owning side to null (unless already changed)
            if ($tenantIdUser->getTenantId() === $this) {
                $tenantIdUser->setTenantId(null);
            }
        }

        return $this;
    }
}
