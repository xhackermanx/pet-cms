<?php

namespace App\Entity\Catalog\Product;

use App\Entity\Type\BaseType;
use App\Repository\Catalog\Product\ProductTypeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductTypeRepository::class)]
class ProductType extends BaseType
{
}
