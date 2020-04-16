<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\UserClassRepository")
 */
class UserClass
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $user_role_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $user_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $user_email;

    /**
     * @ORM\Column(type="datetime")
     */
    private $user_dob;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $user_address;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserRoleId(): ?int
    {
        return $this->user_role_id;
    }

    public function setUserRoleId(int $user_role_id): self
    {
        $this->user_role_id = $user_role_id;

        return $this;
    }

    public function getUserName(): ?string
    {
        return $this->user_name;
    }

    public function setUserName(string $user_name): self
    {
        $this->user_name = $user_name;

        return $this;
    }

    public function getUserEmail(): ?string
    {
        return $this->user_email;
    }

    public function setUserEmail(string $user_email): self
    {
        $this->user_email = $user_email;

        return $this;
    }

    public function getUserDob(): ?\DateTimeInterface
    {
        return $this->user_dob;
    }

    public function setUserDob(\DateTimeInterface $user_dob): self
    {
        $this->user_dob = $user_dob;

        return $this;
    }

    public function getUserAddress(): ?string
    {
        return $this->user_address;
    }

    public function setUserAddress(string $user_address): self
    {
        $this->user_address = $user_address;

        return $this;
    }
}
