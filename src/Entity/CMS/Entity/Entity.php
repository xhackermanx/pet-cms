<?php

namespace App\Entity\CMS\Entity;

use App\Entity\CMS\BaseEntity;
use App\Repository\CMS\Entity\EntityRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EntityRepository::class)]
class Entity extends BaseEntity
{
}
