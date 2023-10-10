<?php

namespace App\Repository\Type;

use App\Entity\Type\BaseType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BaseType>
 *
 * @method BaseType|null find($id, $lockMode = null, $lockVersion = null)
 * @method BaseType|null findOneBy(array $criteria, array $orderBy = null)
 * @method BaseType[]    findAll()
 * @method BaseType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BaseTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BaseType::class);
    }

//    /**
//     * @return BaseType[] Returns an array of BaseType objects
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

//    public function findOneBySomeField($value): ?BaseType
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
