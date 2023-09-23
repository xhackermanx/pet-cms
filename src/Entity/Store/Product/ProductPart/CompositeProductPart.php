<?php

namespace App\Entity\Store\Product\ProductPart;

use App\Entity\Store\Product\ProductPart\Field\Field;
use App\Repository\Store\Product\ProductPart\CompositeProductPartRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Exception;

#[ORM\Entity(repositoryClass: CompositeProductPartRepository::class)]
class CompositeProductPart extends ProductPartComponent
{
    #[ORM\OneToMany(mappedBy: 'parent', targetEntity: ProductPartComponent::class)]
    private Collection $parts;

    public function __construct()
    {
        parent::__construct();
        $this->parts = new ArrayCollection();
    }

    /**
     * @return Collection<int, Field>
     * @throws Exception
     */
    public function getFields(): Collection
    {
        $fields = new ArrayCollection();

        foreach ($this->parts as $part) {
            if (!$part instanceof SimpleProductPart) {
                throw new Exception('no implementation');
            }
            foreach ($part->getFields() as $field) {
                $fields->add($field);
            }
        }

        return $fields;
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
            $part->setParent($this);
        }

        return $this;
    }

    public function removePart(ProductPartComponent $part): static
    {
        if ($this->parts->removeElement($part)) {
            // set the owning side to null (unless already changed)
            if ($part->getParent() === $this) {
                $part->setParent(null);
            }
        }

        return $this;
    }
}
