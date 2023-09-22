<?php

namespace App\Repository\Store\Product\ProductPart;

use App\Entity\Store\Product\ProductPart\CompositeProductPart;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CompositeProductPart>
 *
 * @method CompositeProductPart|null find($id, $lockMode = null, $lockVersion = null)
 * @method CompositeProductPart|null findOneBy(array $criteria, array $orderBy = null)
 * @method CompositeProductPart[]    findAll()
 * @method CompositeProductPart[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CompositeProductPartRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CompositeProductPart::class);
    }

//    /**
//     * @return CompositeProductPart[] Returns an array of CompositeProductPart objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?CompositeProductPart
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
