<?php

namespace App\Entity\CMS;

use App\Entity\CMS\Entity\Entity;
use App\Entity\CMS\Guide\GuideItem;
use App\Entity\CMS\Hierarchy\Element;
use App\Repository\CMS\EntityRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EntityRepository::class)]
#[ORM\InheritanceType('SINGLE_TABLE')]
#[ORM\DiscriminatorColumn(name: 'discr', type: 'string')]
#[ORM\DiscriminatorMap([
    'entity' => Entity::class,
    'element' => Element::class,
    'guide_item' => GuideItem::class,
])]
abstract class BaseEntity extends \App\Entity\EAV\Entity\Entity
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}
