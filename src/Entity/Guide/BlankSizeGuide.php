<?php

namespace App\Entity\Guide;

use App\Repository\Guide\BlankSizeGuideRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BlankSizeGuideRepository::class)]
class BlankSizeGuide extends Guide
{
}
