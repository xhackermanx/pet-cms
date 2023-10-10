<?php

namespace App\Repository\Guide;

use App\Entity\Guide\GuideType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<GuideType>
 *
 * @method GuideType|null find($id, $lockMode = null, $lockVersion = null)
 * @method GuideType|null findOneBy(array $criteria, array $orderBy = null)
 * @method GuideType[]    findAll()
 * @method GuideType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GuideTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GuideType::class);
    }

//    /**
//     * @return GuideType[] Returns an array of GuideType objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('g.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?GuideType
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
