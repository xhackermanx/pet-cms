<?php

namespace App\Entity\Guide\Item;

use App\Entity\Image\ItemImage;
use App\Repository\Guide\Item\ImageNamedItemRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ImageNamedItemRepository::class)]
class ImageNamedItem extends NamedItem
{
    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[Assert\NotBlank]
    private ?ItemImage $itemImage = null;

    public function getItemImage(): ?ItemImage
    {
        return $this->itemImage;
    }

    public function setItemImage(?ItemImage $itemImage): static
    {
        $this->itemImage = $itemImage;

        return $this;
    }
}
