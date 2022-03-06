<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     * @Assert\NotBlank(message="Ce champ ne peut pas être vide.")
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $firstname;

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     * @return string the hashed password for this user
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
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

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

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
