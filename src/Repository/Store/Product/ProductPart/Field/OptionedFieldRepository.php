<?php

namespace App\Repository\Store\Product\ProductPart\Field;

use App\Entity\Store\Product\ProductPart\Field\OptionedField;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OptionedField>
 *
 * @method OptionedField|null find($id, $lockMode = null, $lockVersion = null)
 * @method OptionedField|null findOneBy(array $criteria, array $orderBy = null)
 * @method OptionedField[]    findAll()
 * @method OptionedField[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OptionedFieldRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OptionedField::class);
    }

//    /**
//     * @return OptionedField[] Returns an array of OptionedField objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('o.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?OptionedField
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
