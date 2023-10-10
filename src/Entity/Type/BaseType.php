<?php

namespace App\Entity\Type;

use App\Entity\BaseEntity;
use App\Entity\Catalog\Product\ProductType;
use App\Entity\Guide\Guide;
use App\Entity\Guide\GuideType;
use App\Entity\Type\Field\Field;
use App\Repository\Type\BaseTypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\DiscriminatorColumn;
use Doctrine\ORM\Mapping\DiscriminatorMap;
use Doctrine\ORM\Mapping\InheritanceType;

#[ORM\Entity(repositoryClass: BaseTypeRepository::class)]
#[InheritanceType('SINGLE_TABLE')]
#[DiscriminatorColumn(name: 'discr', type: 'string')]
#[DiscriminatorMap([
    'product_type' => ProductType::class,
    'guide_type' => GuideType::class
])]
abstract class BaseType
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\OneToMany(mappedBy: 'type', targetEntity: Field::class)]
    private Collection $fields;

    #[ORM\OneToMany(mappedBy: 'type', targetEntity: BaseEntity::class)]
    private Collection $baseEntities;

    public function __construct()
    {
        $this->fields = new ArrayCollection();
        $this->baseEntities = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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
     * @return Collection<int, Field>
     */
    public function getFields(): Collection
    {
        return $this->fields;
    }

    public function addField(Field $field): static
    {
        if (!$this->fields->contains($field)) {
            $this->fields->add($field);
            $field->setType($this);
        }

        return $this;
    }

    public function removeField(Field $field): static
    {
        if ($this->fields->removeElement($field)) {
            // set the owning side to null (unless already changed)
            if ($field->getType() === $this) {
                $field->setType(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, BaseEntity>
     */
    public function getBaseEntities(): Collection
    {
        return $this->baseEntities;
    }

    public function addBaseEntity(BaseEntity $baseEntity): static
    {
        if (!$this->baseEntities->contains($baseEntity)) {
            $this->baseEntities->add($baseEntity);
            $baseEntity->setType($this);
        }

        return $this;
    }

    public function removeBaseEntity(BaseEntity $baseEntity): static
    {
        if ($this->baseEntities->removeElement($baseEntity)) {
            // set the owning side to null (unless already changed)
            if ($baseEntity->getType() === $this) {
                $baseEntity->setType(null);
            }
        }

        return $this;
    }
}
