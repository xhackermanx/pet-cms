<?php

namespace App\Entity\CMS\Entity;

use App\Entity\CMS\BaseEntityType;
use App\Repository\CMS\Entity\EntityTypeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EntityTypeRepository::class)]
class EntityType extends BaseEntityType
{
}
