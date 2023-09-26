<?php

namespace App\Entity\CMS;

use App\Entity\CMS\Entity\EntityType;
use App\Entity\CMS\Field\Field;
use App\Entity\CMS\Guide\GuideType;
use App\Entity\CMS\Hierarchy\HierarchyType;
use App\Repository\CMS\EntityTypeRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EntityTypeRepository::class)]
#[ORM\InheritanceType('SINGLE_TABLE')]
#[ORM\DiscriminatorColumn(name: 'discr', type: 'string')]
#[ORM\DiscriminatorMap([
    'entity_type' => EntityType::class,
    'hierarchy_type' => HierarchyType::class,
    'guide_type' => GuideType::class
])]
abstract class BaseEntityType extends \App\Entity\EAV\Entity\EntityType
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $guid = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, Field>
     */
    public function getFields(): Collection
    {
        return parent::getAttributes();
    }

    /**
     * @param Field $field
     * @return static
     */
    public function addField(Field $field): static
    {
        return parent::addAttribute($field);
    }

    /**
     * @param Field $field
     * @return static
     */
    public function removeField(Field $field): static
    {
        return parent::removeAttribute($field);
    }

    public function getGuid(): ?string
    {
        return $this->guid;
    }

    public function setGuid(?string $guid): static
    {
        $this->guid = $guid;

        return $this;
    }
}
