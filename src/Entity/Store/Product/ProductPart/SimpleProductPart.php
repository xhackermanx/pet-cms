<?php

namespace App\Entity\Store\Product\ProductPart;

use App\Repository\Store\Product\ProductPart\SimpleProductPartRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SimpleProductPartRepository::class)]
class SimpleProductPart extends ProductPartComponent
{
}
