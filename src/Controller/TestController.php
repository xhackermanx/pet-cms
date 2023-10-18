<?php

namespace App\Controller;

use App\Entity\Catalog\Product\Product;
use App\Entity\Catalog\Product\ProductPart;
use App\Entity\Catalog\Product\ProductType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/test', name: 'app_test')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $pp = new ProductPart();
        $entityManager->persist($pp);
        $entityManager->flush();
        return $this->json($pp->getId());
    }
}
