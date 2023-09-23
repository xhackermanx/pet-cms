<?php

namespace App\Entity\Store\Product\ProductPart;

use App\Entity\Store\Product\ProductPart\Field\Field;
use App\Repository\Store\Product\ProductPart\SimpleProductPartRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SimpleProductPartRepository::class)]
class SimpleProductPart extends ProductPartComponent
{
    #[ORM\ManyToMany(targetEntity: Field::class)]
    private Collection $fields;

    public function __construct()
    {
        parent::__construct();
        $this->fields = new ArrayCollection();
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
        }

        return $this;
    }

    public function removeField(Field $field): static
    {
        $this->fields->removeElement($field);

        return $this;
    }
}
