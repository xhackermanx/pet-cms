<?php

namespace App\Repository\Guide\Item;

use App\Entity\Guide\Item\ImageNamedItem;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ImageNamedItem>
 *
 * @method ImageNamedItem|null find($id, $lockMode = null, $lockVersion = null)
 * @method ImageNamedItem|null findOneBy(array $criteria, array $orderBy = null)
 * @method ImageNamedItem[]    findAll()
 * @method ImageNamedItem[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImageNamedItemRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ImageNamedItem::class);
    }

//    /**
//     * @return ImageNamedItem[] Returns an array of ImageNamedItem objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ImageNamedItem
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
