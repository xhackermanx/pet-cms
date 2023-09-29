<?php

namespace App\Repository\CMS\Guide;

use App\Entity\CMS\Guide\GuideItem;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<GuideItem>
 *
 * @method GuideItem|null find($id, $lockMode = null, $lockVersion = null)
 * @method GuideItem|null findOneBy(array $criteria, array $orderBy = null)
 * @method GuideItem[]    findAll()
 * @method GuideItem[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GuideItemRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GuideItem::class);
    }

//    /**
//     * @return GuideItem[] Returns an array of GuideItem objects
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

//    public function findOneBySomeField($value): ?GuideItem
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
