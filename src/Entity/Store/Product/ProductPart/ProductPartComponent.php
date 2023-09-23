<?php

namespace App\Entity\Store\Product\ProductPart;

use App\Entity\Store\Product\Product;
use App\Entity\Store\Product\ProductPart\Field\Field;
use App\Repository\Store\Product\ProductPart\ProductPartComponentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\DiscriminatorColumn;
use Doctrine\ORM\Mapping\DiscriminatorMap;
use Doctrine\ORM\Mapping\InheritanceType;

#[ORM\Entity(repositoryClass: ProductPartComponentRepository::class)]
#[InheritanceType('SINGLE_TABLE')]
#[DiscriminatorColumn(name: 'discr', type: 'string')]
#[DiscriminatorMap([
    'simple_product_part' => SimpleProductPart::class,
    'composite_product_part' => CompositeProductPart::class
])]
abstract class ProductPartComponent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToMany(targetEntity: Product::class, inversedBy: 'parts')]
    private Collection $product;

    #[ORM\ManyToOne(inversedBy: 'parts')]
    private ?CompositeProductPart $parent = null;

    public function __construct()
    {
        $this->product = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, Product>
     */
    public function getProduct(): Collection
    {
        return $this->product;
    }

    /**
     * @return Collection<int, Field>
     */
    abstract public function getFields(): Collection;

    public function addProduct(Product $product): static
    {
        if (!$this->product->contains($product)) {
            $this->product->add($product);
        }

        return $this;
    }

    public function removeProduct(Product $product): static
    {
        $this->product->removeElement($product);

        return $this;
    }

    public function getParent(): ?CompositeProductPart
    {
        return $this->parent;
    }

    public function setParent(?CompositeProductPart $parent): static
    {
        $this->parent = $parent;

        return $this;
    }
}
