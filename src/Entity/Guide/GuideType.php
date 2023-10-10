<?php

namespace App\Entity\Guide;

use App\Entity\Type\BaseType;
use App\Repository\Guide\GuideTypeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GuideTypeRepository::class)]
class GuideType extends BaseType
{
}
