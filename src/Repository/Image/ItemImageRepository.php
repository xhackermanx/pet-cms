<?php

namespace App\Repository\Image;

use App\Entity\Image\ItemImage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ItemImage>
 *
 * @method ItemImage|null find($id, $lockMode = null, $lockVersion = null)
 * @method ItemImage|null findOneBy(array $criteria, array $orderBy = null)
 * @method ItemImage[]    findAll()
 * @method ItemImage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ItemImageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ItemImage::class);
    }

//    /**
//     * @return ItemImage[] Returns an array of ItemImage objects
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

//    public function findOneBySomeField($value): ?ItemImage
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
