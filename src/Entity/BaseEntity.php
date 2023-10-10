<?php

namespace App\Entity;

use App\Entity\Catalog\Product\Product;
use App\Entity\Catalog\Product\ProductPart;
use App\Entity\Guide\Guide;
use App\Entity\Type\BaseType;
use App\Repository\BaseEntityRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\DiscriminatorColumn;
use Doctrine\ORM\Mapping\DiscriminatorMap;
use Doctrine\ORM\Mapping\InheritanceType;

#[ORM\Entity(repositoryClass: BaseEntityRepository::class)]
#[InheritanceType('SINGLE_TABLE')]
#[DiscriminatorColumn(name: 'discr', type: 'string')]
#[DiscriminatorMap([
    'product' => Product::class,
    'product_part' => ProductPart::class,
    'guide' => Guide::class
])]
abstract class BaseEntity
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'baseEntities')]
    #[ORM\JoinColumn(nullable: false)]
    private ?BaseType $type = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?BaseType
    {
        return $this->type;
    }

    public function setType(?BaseType $type): static
    {
        $this->type = $type;

        return $this;
    }
}
