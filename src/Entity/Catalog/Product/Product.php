<?php

namespace App\Entity\Catalog\Product;

use App\Repository\Catalog\Product\ProductRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToMany(mappedBy: 'product', targetEntity: ProductPart::class, cascade: ['persist'])]
    private Collection $parts;

    public function __construct()
    {
        $this->parts = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, ProductPart>
     */
    public function getParts(): Collection
    {
        return $this->parts;
    }

    public function addPart(ProductPart $part): static
    {
        if (!$this->parts->contains($part)) {
            $this->parts->add($part);
            $part->setProduct($this);
        }

        return $this;
    }

    public function removePart(ProductPart $part): static
    {
        if ($this->parts->removeElement($part)) {
            // set the owning side to null (unless already changed)
            if ($part->getProduct() === $this) {
                $part->setProduct(null);
            }
        }

        return $this;
    }
}
