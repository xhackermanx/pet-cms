<?php

namespace App\Repository\Catalog\Product;

use App\Entity\Catalog\Product\ProductPart;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductPart>
 *
 * @method ProductPart|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductPart|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductPart[]    findAll()
 * @method ProductPart[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductPartRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductPart::class);
    }

//    /**
//     * @return ProductPart[] Returns an array of ProductPart objects
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

//    public function findOneBySomeField($value): ?ProductPart
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
