<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\PermissionClassRepository")
 */
class PermissionClass
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
    private $permission_role_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $permission_title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $permission_module;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $permission_description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPermissionRoleId(): ?int
    {
        return $this->permission_role_id;
    }

    public function setPermissionRoleId(int $permission_role_id): self
    {
        $this->permission_role_id = $permission_role_id;

        return $this;
    }

    public function getPermissionTitle(): ?string
    {
        return $this->permission_title;
    }

    public function setPermissionTitle(string $permission_title): self
    {
        $this->permission_title = $permission_title;

        return $this;
    }

    public function getPermissionModule(): ?string
    {
        return $this->permission_module;
    }

    public function setPermissionModule(string $permission_module): self
    {
        $this->permission_module = $permission_module;

        return $this;
    }

    public function getPermissionDescription(): ?string
    {
        return $this->permission_description;
    }

    public function setPermissionDescription(string $permission_description): self
    {
        $this->permission_description = $permission_description;

        return $this;
    }
}
