<?php

namespace App\Entity\Store\Product\ProductPart;

use App\Repository\Store\Product\ProductPart\CompositeProductPartRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CompositeProductPartRepository::class)]
class CompositeProductPart extends ProductPartComponent
{
}
