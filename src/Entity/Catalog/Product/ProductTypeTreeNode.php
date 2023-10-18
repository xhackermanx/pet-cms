<?php

namespace App\Entity\Catalog\Product;

use App\Repository\Catalog\Product\ProductTypeTreeNodeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductTypeTreeNodeRepository::class)]
#[ORM\Table(uniqueConstraints: [
    new ORM\UniqueConstraint(name: 'parent_child_unique', columns: ['parent_id', 'child_id'])
])]
class ProductTypeTreeNode
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    private ?ProductType $parent = null;

    #[ORM\ManyToOne]
    private ?ProductType $child = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getParent(): ?ProductType
    {
        return $this->parent;
    }

    public function setParent(?ProductType $parent): static
    {
        $this->parent = $parent;

        return $this;
    }

    public function getChild(): ?ProductType
    {
        return $this->child;
    }

    public function setChild(?ProductType $child): static
    {
        $this->child = $child;

        return $this;
    }
}
