<?php

namespace App\Entity;

use App\Repository\InformationsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InformationsRepository::class)]
class Informations
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private array $hours = [];

    #[ORM\Column(nullable: true)]
    private bool $lundi_active = true;

    #[ORM\Column(nullable: true)]
    private ?bool $mardi_active = true;

    #[ORM\Column(nullable: true)]
    private ?bool $mercredi_active = true;

    #[ORM\Column(nullable: true)]
    private ?bool $jeudi_active = true;

    #[ORM\Column(nullable: true)]
    private ?bool $vendredi_active = true;

    #[ORM\Column(nullable: true)]
    private ?bool $samedi_active = true;

    #[ORM\Column(nullable: true)]
    private ?bool $dimanche_active = true;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lundi = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $mardi = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $mercredi = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $jeudi = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $vendredi = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $samedi = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $dimanche = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $vacances = null;

    #[ORM\Column(nullable: true)]
    private ?bool $vacances_active = false;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHours(): array
    {
        return $this->hours;
    }

    public function setHours(?array $hours): self
    {
        $this->hours = $hours;

        return $this;
    }

    public function isLundiActive(): ?bool
    {
        return $this->lundi_active;
    }

    public function setLundiActive(?bool $lundi_active): self
    {
        $this->lundi_active = $lundi_active;

        return $this;
    }

    public function isMardiActive(): ?bool
    {
        return $this->mardi_active;
    }

    public function setMardiActive(?bool $mardi_active): self
    {
        $this->mardi_active = $mardi_active;

        return $this;
    }

    public function isMercrediActive(): ?bool
    {
        return $this->mercredi_active;
    }

    public function setMercrediActive(?bool $mercredi_active): self
    {
        $this->mercredi_active = $mercredi_active;

        return $this;
    }

    public function isJeudiActive(): ?bool
    {
        return $this->jeudi_active;
    }

    public function setJeudiActive(?bool $jeudi_active): self
    {
        $this->jeudi_active = $jeudi_active;

        return $this;
    }

    public function isVendrediActive(): ?bool
    {
        return $this->vendredi_active;
    }

    public function setVendrediActive(?bool $vendredi_active): self
    {
        $this->vendredi_active = $vendredi_active;

        return $this;
    }

    public function isSamediActive(): ?bool
    {
        return $this->samedi_active;
    }

    public function setSamediActive(?bool $samedi_active): self
    {
        $this->samedi_active = $samedi_active;

        return $this;
    }

    public function isDimancheActive(): ?bool
    {
        return $this->dimanche_active;
    }

    public function setDimancheActive(?bool $dimanche_active): self
    {
        $this->dimanche_active = $dimanche_active;

        return $this;
    }

    public function getLundi(): ?string
    {
        return $this->lundi;
    }

    public function setLundi(?string $lundi): self
    {
        $this->lundi = $lundi;

        return $this;
    }

    public function getMardi(): ?string
    {
        return $this->mardi;
    }

    public function setMardi(?string $mardi): self
    {
        $this->mardi = $mardi;

        return $this;
    }

    public function getMercredi(): ?string
    {
        return $this->mercredi;
    }

    public function setMercredi(?string $mercredi): self
    {
        $this->mercredi = $mercredi;

        return $this;
    }

    public function getJeudi(): ?string
    {
        return $this->jeudi;
    }

    public function setJeudi(?string $jeudi): self
    {
        $this->jeudi = $jeudi;

        return $this;
    }

    public function getVendredi(): ?string
    {
        return $this->vendredi;
    }

    public function setVendredi(?string $vendredi): self
    {
        $this->vendredi = $vendredi;

        return $this;
    }

    public function getSamedi(): ?string
    {
        return $this->samedi;
    }

    public function setSamedi(?string $samedi): self
    {
        $this->samedi = $samedi;

        return $this;
    }

    public function getDimanche(): ?string
    {
        return $this->dimanche;
    }

    public function setDimanche(?string $dimanche): self
    {
        $this->dimanche = $dimanche;

        return $this;
    }

    public function getVacances(): ?string
    {
        return $this->vacances;
    }

    public function setVacances(?string $vacances): self
    {
        $this->vacances = $vacances;

        return $this;
    }

    public function isVacancesActive(): ?bool
    {
        return $this->vacances_active;
    }

    public function setVacancesActive(?bool $vacances_active): self
    {
        $this->vacances_active = $vacances_active;

        return $this;
    }
}
