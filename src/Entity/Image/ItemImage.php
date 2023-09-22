<?php

namespace App\Entity\Image;

use App\Repository\Image\ItemImageRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ItemImageRepository::class)]
class ItemImage extends Image
{
}
