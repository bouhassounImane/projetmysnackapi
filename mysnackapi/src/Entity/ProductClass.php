<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\ProductClassRepository")
 */
class ProductClass
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
    private $product_customer_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $product_number;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $product_items;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $product_type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $product_description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductCustomerId(): ?int
    {
        return $this->product_customer_id;
    }

    public function setProductCustomerId(int $product_customer_id): self
    {
        $this->product_customer_id = $product_customer_id;

        return $this;
    }

    public function getProductNumber(): ?string
    {
        return $this->product_number;
    }

    public function setProductNumber(string $product_number): self
    {
        $this->product_number = $product_number;

        return $this;
    }

    public function getProductItems(): ?string
    {
        return $this->product_items;
    }

    public function setProductItems(string $product_items): self
    {
        $this->product_items = $product_items;

        return $this;
    }

    public function getProductType(): ?string
    {
        return $this->product_type;
    }

    public function setProductType(string $product_type): self
    {
        $this->product_type = $product_type;

        return $this;
    }

    public function getProductDescription(): ?string
    {
        return $this->product_description;
    }

    public function setProductDescription(string $product_description): self
    {
        $this->product_description = $product_description;

        return $this;
    }
}
