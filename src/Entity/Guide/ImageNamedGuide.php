<?php

namespace App\Entity\Guide;

use App\Repository\Guide\ImageNamedGuideRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImageNamedGuideRepository::class)]
class ImageNamedGuide extends Guide
{
}
