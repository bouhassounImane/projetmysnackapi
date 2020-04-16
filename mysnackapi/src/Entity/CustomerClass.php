<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\CustomerClassRepository")
 */
class CustomerClass
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
    private $customer_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $customer_mobile;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $customer_email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $customer_address;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $customer_username;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $customer_password;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCustomerName(): ?string
    {
        return $this->customer_name;
    }

    public function setCustomerName(string $customer_name): self
    {
        $this->customer_name = $customer_name;

        return $this;
    }

    public function getCustomerMobile(): ?string
    {
        return $this->customer_mobile;
    }

    public function setCustomerMobile(string $customer_mobile): self
    {
        $this->customer_mobile = $customer_mobile;

        return $this;
    }

    public function getCustomerEmail(): ?string
    {
        return $this->customer_email;
    }

    public function setCustomerEmail(string $customer_email): self
    {
        $this->customer_email = $customer_email;

        return $this;
    }

    public function getCustomerAddress(): ?string
    {
        return $this->customer_address;
    }

    public function setCustomerAddress(string $customer_address): self
    {
        $this->customer_address = $customer_address;

        return $this;
    }

    public function getCustomerUsername(): ?string
    {
        return $this->customer_username;
    }

    public function setCustomerUsername(string $customer_username): self
    {
        $this->customer_username = $customer_username;

        return $this;
    }

    public function getCustomerPassword(): ?string
    {
        return $this->customer_password;
    }

    public function setCustomerPassword(string $customer_password): self
    {
        $this->customer_password = $customer_password;

        return $this;
    }
}
