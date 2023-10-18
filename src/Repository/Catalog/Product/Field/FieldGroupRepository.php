<?php

namespace App\Repository\Catalog\Product\Field;

use App\Entity\Catalog\Product\Field\FieldGroup;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FieldGroup>
 *
 * @method FieldGroup|null find($id, $lockMode = null, $lockVersion = null)
 * @method FieldGroup|null findOneBy(array $criteria, array $orderBy = null)
 * @method FieldGroup[]    findAll()
 * @method FieldGroup[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FieldGroupRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FieldGroup::class);
    }

//    /**
//     * @return FieldGroup[] Returns an array of FieldGroup objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('f.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?FieldGroup
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
