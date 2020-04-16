<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\BillClassRepository")
 */
class BillClass
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
    private $bill_type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $bill_description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $bill_number;

    /**
     * @ORM\Column(type="integer")
     */
    private $bill_customer_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBillType(): ?string
    {
        return $this->bill_type;
    }

    public function setBillType(string $bill_type): self
    {
        $this->bill_type = $bill_type;

        return $this;
    }

    public function getBillDescription(): ?string
    {
        return $this->bill_description;
    }

    public function setBillDescription(string $bill_description): self
    {
        $this->bill_description = $bill_description;

        return $this;
    }

    public function getBillNumber(): ?string
    {
        return $this->bill_number;
    }

    public function setBillNumber(string $bill_number): self
    {
        $this->bill_number = $bill_number;

        return $this;
    }

    public function getBillCustomerId(): ?int
    {
        return $this->bill_customer_id;
    }

    public function setBillCustomerId(int $bill_customer_id): self
    {
        $this->bill_customer_id = $bill_customer_id;

        return $this;
    }
}
