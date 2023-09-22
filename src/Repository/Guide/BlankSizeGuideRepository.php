<?php

namespace App\Repository\Guide;

use App\Entity\Guide\BlankSizeGuide;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BlankSizeGuide>
 *
 * @method BlankSizeGuide|null find($id, $lockMode = null, $lockVersion = null)
 * @method BlankSizeGuide|null findOneBy(array $criteria, array $orderBy = null)
 * @method BlankSizeGuide[]    findAll()
 * @method BlankSizeGuide[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BlankSizeGuideRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BlankSizeGuide::class);
    }

//    /**
//     * @return BlankSizeGuide[] Returns an array of BlankSizeGuide objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('b.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?BlankSizeGuide
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
