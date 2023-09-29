<?php

namespace App\Repository\CMS\Hierarchy;

use App\Entity\CMS\Hierarchy\HierarchyType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<HierarchyType>
 *
 * @method HierarchyType|null find($id, $lockMode = null, $lockVersion = null)
 * @method HierarchyType|null findOneBy(array $criteria, array $orderBy = null)
 * @method \App\Entity\CMS\Hierarchy\HierarchyType[]    findAll()
 * @method HierarchyType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HierarchyTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HierarchyType::class);
    }

//    /**
//     * @return HierarchyType[] Returns an array of HierarchyType objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('h.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?HierarchyType
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
