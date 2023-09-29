<?php

namespace App\Repository\CMS;

use App\Entity\CMS\BaseEntityType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BaseEntityType>
 *
 * @method BaseEntityType|null find($id, $lockMode = null, $lockVersion = null)
 * @method BaseEntityType|null findOneBy(array $criteria, array $orderBy = null)
 * @method BaseEntityType[]    findAll()
 * @method BaseEntityType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EntityTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BaseEntityType::class);
    }

//    /**
//     * @return EntityType[] Returns an array of EntityType objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?EntityType
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
