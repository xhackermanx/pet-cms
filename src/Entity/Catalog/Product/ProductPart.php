<?php

namespace App\Entity\Catalog\Product;

use App\Repository\Catalog\Product\ProductPartRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping\DiscriminatorColumn;
use Doctrine\ORM\Mapping\DiscriminatorMap;
use Doctrine\ORM\Mapping\InheritanceType;

#[ORM\Entity(repositoryClass: ProductPartRepository::class)]
#[ORM\HasLifecycleCallbacks]
#[InheritanceType('SINGLE_TABLE')]
#[DiscriminatorColumn(name: 'discr', type: 'string')]
#[DiscriminatorMap([
    'product_part' => ProductPart::class,
    'product_part_relation' => ProductPartRelation::class,
])]
class ProductPart
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(cascade: ['persist'], inversedBy: 'products')]
    #[Assert\NotNull]
    protected ?ProductType $type = null;

    #[ORM\ManyToOne(inversedBy: 'parts')]
    #[ORM\JoinColumn(nullable: false)]
    private Product $product;

    #[ORM\OneToMany(mappedBy: 'target', targetEntity: ProductPartRelation::class)]
    private Collection $productPartRelations;

    public function __construct()
    {
        $this->productPartRelations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?ProductType
    {
        return $this->type;
    }

    public function setType(?ProductType $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getProduct(): ?Product
    {
        return $this->product;
    }

    public function setProduct(?Product $product): static
    {
        $this->product = $product;

        return $this;
    }

    /**
     * @return Collection<int, ProductPartRelation>
     */
    public function getProductPartRelations(): Collection
    {
        return $this->productPartRelations;
    }

    public function addProductPartRelation(ProductPartRelation $productPartRelation): static
    {
        if (!$this->productPartRelations->contains($productPartRelation)) {
            $this->productPartRelations->add($productPartRelation);
            $productPartRelation->setTarget($this);
        }

        return $this;
    }

    public function removeProductPartRelation(ProductPartRelation $productPartRelation): static
    {
        if ($this->productPartRelations->removeElement($productPartRelation)) {
            // set the owning side to null (unless already changed)
            if ($productPartRelation->getTarget() === $this) {
                $productPartRelation->setTarget(null);
            }
        }

        return $this;
    }
}
