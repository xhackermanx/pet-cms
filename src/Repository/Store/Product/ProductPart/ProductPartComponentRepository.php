<?php

namespace App\Repository\Store\Product\ProductPart;

use App\Entity\Store\Product\ProductPart\ProductPartComponent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductPartComponent>
 *
 * @method ProductPartComponent|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductPartComponent|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductPartComponent[]    findAll()
 * @method ProductPartComponent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductPartComponentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductPartComponent::class);
    }

//    /**
//     * @return ProductPartComponent[] Returns an array of ProductPartComponent objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ProductPartComponent
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
