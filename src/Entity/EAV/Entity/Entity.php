<?php

namespace App\Entity\EAV\Entity;

use App\Entity\EAV\Value\Value;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\MappedSuperclass]
abstract class Entity
{
    #[ORM\OneToMany(mappedBy: 'entity', targetEntity: Value::class)]
    private Collection $value;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private EntityType $entityType;

    public function __construct()
    {
        $this->value = new ArrayCollection();
    }

    /**
     * @return Collection<int, Value>
     */
    public function getValue(): Collection
    {
        return $this->value;
    }

    public function addValue(Value $value): static
    {
        if (!$this->value->contains($value)) {
            $this->value->add($value);
            $value->setEntity($this);
        }

        return $this;
    }

    public function removeValue(Value $value): static
    {
        if ($this->value->removeElement($value)) {
            // set the owning side to null (unless already changed)
            if ($value->getEntity() === $this) {
                $value->setEntity(null);
            }
        }

        return $this;
    }

    public function getType(): EntityType
    {
        return $this->entityType;
    }

    public function setType(EntityType $entityType): static
    {
        $this->entityType = $entityType;

        return $this;
    }
}
