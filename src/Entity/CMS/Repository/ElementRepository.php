<?php

namespace App\Entity\CMS\Repository;

use App\Entity\CMS\Hierarchy\HierarchyType;

class ElementRepository extends \App\Repository\CMS\Hierarchy\ElementRepository
{
    public function getRoots()
    {
        $qb = $this->createQueryBuilder('e')
            ->join(HierarchyType::class, 'type')
            ->where('t.guid = :guid')
            ->andWhere('e.parentId IS NULL')
            ->setParameter('guid', 'catalog-category');

        return $qb->getQuery()->getResult();
    }
}