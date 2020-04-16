<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\StoreClassRepository")
 */
class StoreClass
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
    private $store_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $store_description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $store_type;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStoreName(): ?string
    {
        return $this->store_name;
    }

    public function setStoreName(string $store_name): self
    {
        $this->store_name = $store_name;

        return $this;
    }

    public function getStoreDescription(): ?string
    {
        return $this->store_description;
    }

    public function setStoreDescription(string $store_description): self
    {
        $this->store_description = $store_description;

        return $this;
    }

    public function getStoreType(): ?string
    {
        return $this->store_type;
    }

    public function setStoreType(string $store_type): self
    {
        $this->store_type = $store_type;

        return $this;
    }
}
