<?php

namespace App\Entity\CMS\Field;

use App\Entity\EAV\Attribute\AttributeType;
use App\Repository\CMS\Field\FieldTypeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FieldTypeRepository::class)]
class FieldType extends AttributeType
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}
