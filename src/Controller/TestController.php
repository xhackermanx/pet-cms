<?php

namespace App\Controller;

use App\Entity\Catalog\Product\Product;
use App\Entity\Catalog\Product\ProductPart;
use App\Entity\Catalog\Product\ProductPartRelation;
use App\Entity\Catalog\Product\ProductType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Uuid;

class TestController extends AbstractController
{
    #[Route('/test', name: 'app_test')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $t = new ProductType();
        $t->setName('Тип');
        $p = new Product();
        $pp = new ProductPart();
        $pp->setType($t);
        $pp2 = new ProductPartRelation($pp);
        $p->addPart($pp);
        $p->addPart($pp2);
        $entityManager->persist($p);
        $entityManager->flush();
        return $this->json($pp->getId());
    }
}
