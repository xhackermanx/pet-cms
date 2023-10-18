<?php

namespace App\DataFixtures\Product;

use App\Entity\CMS\Field\Field;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class FieldFixture extends Fixture implements DependentFixtureInterface
{
    public const PRODUCT_FIELD_REFERENCE = 'fields-';
    public const PRODUCT_FIELD_NAMES = [
        'Цвет',
        'Размер футболки',
        'Вместимомсть экипажа корабля',
        'Класс автомобиля',
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::PRODUCT_FIELD_NAMES as $i => $FIELD_NAME) {
            $field = new Field();
            $field->setAttributeType($this->getReference(FieldTypeFixture::FIELD_TYPE_REFERENCE . 'Строка'));
            $field->setName($FIELD_NAME);

            $manager->persist($field);

            $this->addReference(self::PRODUCT_FIELD_REFERENCE . $FIELD_NAME, $field);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            FieldTypeFixture::class
        ];
    }
}
