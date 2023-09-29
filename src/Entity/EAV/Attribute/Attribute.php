<?php

namespace App\Entity\EAV\Attribute;

use Doctrine\ORM\Mapping as ORM;

#[ORM\MappedSuperclass]
abstract class Attribute
{
    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?AttributeType $attributeType = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    public function getAttributeType(): ?AttributeType
    {
        return $this->attributeType;
    }

    public function setAttributeType(?AttributeType $attributeType): static
    {
        $this->attributeType = $attributeType;

        return $this;
    }

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
