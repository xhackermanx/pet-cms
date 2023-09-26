<?php

namespace App\Entity\CMS\Hierarchy;

use App\Entity\CMS\BaseEntityType;
use App\Repository\CMS\Hierarchy\HierarchyTypeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HierarchyTypeRepository::class)]
class HierarchyType extends BaseEntityType
{
    const SYSTEM_TYPES = [
        'page-base' => [
            'name' => 'Базовый тип стринцы'
        ],
        'page-category' => [
            'name' => 'Категория страницы'
        ],
        'page-element' => [
            'name' => 'Страница'
        ],
        'catalog-category' => [
            'name' => 'Категория каталога'
        ],
        'catalog-product' => [
            'name' => 'Продукт'
        ],
    ];
}
