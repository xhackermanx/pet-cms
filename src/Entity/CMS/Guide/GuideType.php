<?php

namespace App\Entity\CMS\Guide;

use App\Entity\CMS\BaseEntityType;
use App\Repository\CMS\Guide\GuideTypeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GuideTypeRepository::class)]
class GuideType extends BaseEntityType
{
}
