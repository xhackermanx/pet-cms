<?php

namespace App\Repository\Store\Product\ProductPart;

use App\Entity\Store\Product\ProductPart\SimpleProductPart;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SimpleProductPart>
 *
 * @method SimpleProductPart|null find($id, $lockMode = null, $lockVersion = null)
 * @method SimpleProductPart|null findOneBy(array $criteria, array $orderBy = null)
 * @method SimpleProductPart[]    findAll()
 * @method SimpleProductPart[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SimpleProductPartRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SimpleProductPart::class);
    }

//    /**
//     * @return SimpleProductPart[] Returns an array of SimpleProductPart objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?SimpleProductPart
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
