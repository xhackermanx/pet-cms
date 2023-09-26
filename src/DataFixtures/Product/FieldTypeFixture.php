<?php

namespace App\DataFixtures\Product;

use App\Entity\CMS\Field\FieldType;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

;

class FieldTypeFixture extends Fixture
{
    public const FIELD_TYPE_REFERENCE = 'field-type-';
    public const FIELD_TYPE_NAMES = [
        'Строка',
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::FIELD_TYPE_NAMES as $i => $FIELD_TYPE_NAME) {
            $fieldType = new FieldType();
            $fieldType->setName($FIELD_TYPE_NAME);

            $manager->persist($fieldType);

            $this->addReference(self::FIELD_TYPE_REFERENCE . $FIELD_TYPE_NAME, $fieldType);
        }

        $manager->flush();
    }
}
