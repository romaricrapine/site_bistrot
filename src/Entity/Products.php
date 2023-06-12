<?php

namespace App\Entity;

use App\Repository\ProductsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductsRepository::class)]
class Products
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(nullable: true)]
    private ?float $percentAlcool = null;

    #[ORM\Column(nullable: true)]
    private ?bool $active = null;

    #[ORM\ManyToOne(inversedBy: 'products')]
    private ?Categories $categorie = null;

    #[ORM\Column]
    private ?float $price_f_option = null;

    #[ORM\Column(nullable: true)]
    private ?float $price_s_option = null;

    #[ORM\Column(nullable: true)]
    private ?float $price_t_option = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $f_option = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $s_option = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $t_option = null;

    #[ORM\Column(nullable: true)]
    private ?bool $active_f_option = null;

    #[ORM\Column(nullable: true)]
    private ?bool $active_s_option = null;

    #[ORM\Column(nullable: true)]
    private ?bool $active_t_option = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPercentAlcool(): ?float
    {
        return $this->percentAlcool;
    }

    public function setPercentAlcool(?float $percentAlcool): self
    {
        $this->percentAlcool = $percentAlcool;

        return $this;
    }

    public function isActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getCategorie(): ?Categories
    {
        return $this->categorie;
    }

    public function setCategorie(?Categories $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getPriceFOption(): ?float
    {
        return $this->price_f_option;
    }

    public function setPriceFOption(float $price_f_option): self
    {
        $this->price_f_option = $price_f_option;

        return $this;
    }

    public function getPriceSOption(): ?float
    {
        return $this->price_s_option;
    }

    public function setPriceSOption(?float $price_s_option): self
    {
        $this->price_s_option = $price_s_option;

        return $this;
    }

    public function getPriceTOption(): ?float
    {
        return $this->price_t_option;
    }

    public function setPriceTOption(?float $price_t_option): self
    {
        $this->price_t_option = $price_t_option;

        return $this;
    }

    public function getFOption(): ?string
    {
        return $this->f_option;
    }

    public function setFOption(?string $f_option): self
    {
        $this->f_option = $f_option;

        return $this;
    }

    public function getSOption(): ?string
    {
        return $this->s_option;
    }

    public function setSOption(?string $s_option): self
    {
        $this->s_option = $s_option;

        return $this;
    }

    public function getTOption(): ?string
    {
        return $this->t_option;
    }

    public function setTOption(?string $t_option): self
    {
        $this->t_option = $t_option;

        return $this;
    }

    public function isActiveFOption(): ?bool
    {
        return $this->active_f_option;
    }

    public function setActiveFOption(?bool $active_f_option): self
    {
        $this->active_f_option = $active_f_option;

        return $this;
    }

    public function isActiveSOption(): ?bool
    {
        return $this->active_s_option;
    }

    public function setActiveSOption(?bool $active_s_option): self
    {
        $this->active_s_option = $active_s_option;

        return $this;
    }

    public function isActiveTOption(): ?bool
    {
        return $this->active_t_option;
    }

    public function setActiveTOption(?bool $active_t_option): self
    {
        $this->active_t_option = $active_t_option;

        return $this;
    }
    
}
