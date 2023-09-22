<?php

namespace App\Repository\Guide;

use App\Entity\Guide\ImageNamedGuide;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ImageNamedGuide>
 *
 * @method ImageNamedGuide|null find($id, $lockMode = null, $lockVersion = null)
 * @method ImageNamedGuide|null findOneBy(array $criteria, array $orderBy = null)
 * @method ImageNamedGuide[]    findAll()
 * @method ImageNamedGuide[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImageNamedGuideRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ImageNamedGuide::class);
    }

//    /**
//     * @return ImageNamedGuide[] Returns an array of ImageNamedGuide objects
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

//    public function findOneBySomeField($value): ?ImageNamedGuide
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
