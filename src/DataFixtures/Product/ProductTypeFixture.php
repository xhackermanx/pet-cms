<?php

namespace App\DataFixtures\Product;

use App\Entity\Store\Product\ProductType;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ProductTypeFixture extends Fixture implements DependentFixtureInterface
{
    public const PRODUCT_TYPE_REFERENCE = 'object-type-';
    public const PRODUCT_TYPES = [
        [
            'name' => 'Тип товара "Футболки"',
            'fields' => [
                'Цвет',
                'Размер футболки',
            ]
        ],
        [
            'name' => 'Тип товара "Автомобили"',
            'fields' => [
                'Цвет',
                'Класс автомобиля',
            ]
        ],
        [
            'name' => 'Тип товара "Космические корабли"',
            'fields' => [
                'Цвет',
                'Вместимомсть экипажа корабля',
            ]
        ],
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::PRODUCT_TYPES as $PRODUCT_TYPE) {
            $productType = new ProductType();
            $productType->setName($PRODUCT_TYPE['name']);
            foreach ($PRODUCT_TYPE['fields'] as $field) {
                $productType->addField($this->getReference(FieldFixture::PRODUCT_FIELD_REFERENCE . $field));
            }
            $manager->persist($productType);

            $this->addReference(self::PRODUCT_TYPE_REFERENCE . $PRODUCT_TYPE['name'], $productType);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            FieldFixture::class
        ];
    }
}
