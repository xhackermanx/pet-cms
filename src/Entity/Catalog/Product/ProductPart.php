<?php

namespace App\Entity\Catalog\Product;

use App\Entity\BaseEntity;
use App\Repository\Catalog\Product\ProductPartRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductPartRepository::class)]
class ProductPart extends BaseEntity
{
}
