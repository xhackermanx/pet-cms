<?php

namespace App\Service\Catalog\Product;

use App\Entity\Catalog\Product\ProductType;
use Doctrine\ORM\EntityManagerInterface;

class ProductTypeService
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager
    )
    {
    }

    public function createProductType(string $name): ProductType
    {
//        $productType = new ProductType();
//        $productType->setName($name);
//
//        $productTypeTreeNode = new ProductTypeTreeNode();
//        $productTypeTreeNode->setParent($parentProductTypeTreeNode);
//        $productTypeTreeNode->setChild($productType);
//
//        $this->entityManager->persist($productType);
//        $this->entityManager->persist($productTypeTreeNode);
//        $this->entityManager->flush();
//
//        return $productType;
    }
}