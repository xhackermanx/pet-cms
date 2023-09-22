<?php

namespace App\Repository\Guide;

use App\Entity\Guide\NamedGuide;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<NamedGuide>
 *
 * @method NamedGuide|null find($id, $lockMode = null, $lockVersion = null)
 * @method NamedGuide|null findOneBy(array $criteria, array $orderBy = null)
 * @method NamedGuide[]    findAll()
 * @method NamedGuide[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NamedGuideRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NamedGuide::class);
    }

//    /**
//     * @return NamedGuide[] Returns an array of NamedGuide objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('n.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?NamedGuide
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
