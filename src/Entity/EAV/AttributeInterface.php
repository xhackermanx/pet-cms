<?php

namespace App\Entity\EAV;

interface AttributeInterface
{
    public function setType(AttributeTypeInterface $type): static;
}