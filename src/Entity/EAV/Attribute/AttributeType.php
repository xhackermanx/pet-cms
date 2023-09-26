<?php

namespace App\Entity\EAV\Attribute;

use Doctrine\ORM\Mapping as ORM;

#[ORM\MappedSuperclass]
abstract class AttributeType
{
    #[ORM\Column(length: 255)]
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
