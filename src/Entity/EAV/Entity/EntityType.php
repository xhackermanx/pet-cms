<?php

namespace App\Entity\EAV\Entity;

use App\Entity\EAV\Attribute\Attribute;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\MappedSuperclass]
abstract class EntityType
{
    #[ORM\Column(length: 255)]
    private string $name;

    #[ORM\ManyToMany(targetEntity: Attribute::class)]
    private Collection $attributes;

    public function __construct()
    {
        $this->attributes = new ArrayCollection();
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

    /**
     * @return Collection<int, Attribute>
     */
    protected function getAttributes(): Collection
    {
        return $this->attributes;
    }

    protected function addAttribute(Attribute $attribute): static
    {
        if (!$this->attributes->contains($attribute)) {
            $this->attributes->add($attribute);
        }

        return $this;
    }

    protected function removeAttribute(Attribute $attribute): static
    {
        $this->attributes->removeElement($attribute);

        return $this;
    }
}
