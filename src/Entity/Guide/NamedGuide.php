<?php

namespace App\Entity\Guide;

use App\Repository\Guide\NamedGuideRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NamedGuideRepository::class)]
class NamedGuide extends Guide
{
}
