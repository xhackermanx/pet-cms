<?php

namespace App\Entity\Guide\Item;

use App\Repository\Guide\Item\BlankSizeItemRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BlankSizeItemRepository::class)]
class BlankSizeItem extends Item
{
}
