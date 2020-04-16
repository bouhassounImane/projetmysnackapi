<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\RoleClassRepository")
 */
class RoleClass
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $role_title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $role_description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRoleTitle(): ?string
    {
        return $this->role_title;
    }

    public function setRoleTitle(string $role_title): self
    {
        $this->role_title = $role_title;

        return $this;
    }

    public function getRoleDescription(): ?string
    {
        return $this->role_description;
    }

    public function setRoleDescription(string $role_description): self
    {
        $this->role_description = $role_description;

        return $this;
    }
}
