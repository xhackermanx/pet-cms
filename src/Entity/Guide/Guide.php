<?php

namespace App\Entity\Guide;

use App\Repository\Guide\GuideRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GuideRepository::class)]
class Guide
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?GuideType $type = null;
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?GuideType
    {
        return $this->type;
    }

    public function setType(?GuideType $type): static
    {
        $this->type = $type;

        return $this;
    }
}
