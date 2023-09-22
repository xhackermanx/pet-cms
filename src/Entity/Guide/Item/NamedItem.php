<?php

namespace App\Entity\Guide\Item;

use App\Repository\Guide\Item\NamedItemRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: NamedItemRepository::class)]
class NamedItem extends Item
{
    #[ORM\Column(length: 999, nullable: true)]
    #[Assert\NotBlank]
    private ?string $name = null;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }
}
