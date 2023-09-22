<?php

namespace App\Repository\Guide\Item;

use App\Entity\Guide\Item\NamedItem;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<NamedItem>
 *
 * @method NamedItem|null find($id, $lockMode = null, $lockVersion = null)
 * @method NamedItem|null findOneBy(array $criteria, array $orderBy = null)
 * @method NamedItem[]    findAll()
 * @method NamedItem[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NamedItemRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NamedItem::class);
    }

//    /**
//     * @return NamedItem[] Returns an array of NamedItem objects
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

//    public function findOneBySomeField($value): ?NamedItem
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
