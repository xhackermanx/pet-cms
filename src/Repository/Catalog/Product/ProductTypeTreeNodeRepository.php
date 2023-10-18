<?php

namespace App\Repository\Catalog\Product;

use App\Entity\Catalog\Product\ProductTypeTreeNode;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductTypeTreeNode>
 *
 * @method ProductTypeTreeNode|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductTypeTreeNode|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductTypeTreeNode[]    findAll()
 * @method ProductTypeTreeNode[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductTypeTreeNodeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductTypeTreeNode::class);
    }

//    /**
//     * @return ProductTypeTreeNode[] Returns an array of ProductTypeTreeNode objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ProductTypeTreeNode
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
