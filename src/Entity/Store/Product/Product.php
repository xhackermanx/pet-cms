<?php

namespace App\Entity\Store\Product;

use ApiPlatform\Metadata\ApiResource;
use App\Entity\Store\Product\ProductPart\ProductPartComponent;
use App\Repository\Store\Product\ProductRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
#[ApiResource]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToMany(targetEntity: ProductPartComponent::class, mappedBy: 'product')]
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
     * @return Collection<int, ProductPartComponent>
     */
    public function getParts(): Collection
    {
        return $this->parts;
    }

    public function addPart(ProductPartComponent $part): static
    {
        if (!$this->parts->contains($part)) {
            $this->parts->add($part);
            $part->addProduct($this);
        }

        return $this;
    }

    public function removePart(ProductPartComponent $part): static
    {
        if ($this->parts->removeElement($part)) {
            $part->removeProduct($this);
        }

        return $this;
    }
}
