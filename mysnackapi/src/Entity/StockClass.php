<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\StockClassRepository")
 */
class StockClass
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
    private $stock_items;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $stock_number;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $stock_type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $stock_description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStockItems(): ?string
    {
        return $this->stock_items;
    }

    public function setStockItems(string $stock_items): self
    {
        $this->stock_items = $stock_items;

        return $this;
    }

    public function getStockNumber(): ?string
    {
        return $this->stock_number;
    }

    public function setStockNumber(string $stock_number): self
    {
        $this->stock_number = $stock_number;

        return $this;
    }

    public function getStockType(): ?string
    {
        return $this->stock_type;
    }

    public function setStockType(string $stock_type): self
    {
        $this->stock_type = $stock_type;

        return $this;
    }

    public function getStockDescription(): ?string
    {
        return $this->stock_description;
    }

    public function setStockDescription(string $stock_description): self
    {
        $this->stock_description = $stock_description;

        return $this;
    }
}
