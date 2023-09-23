<?php

namespace App\Entity\EAV;

interface EntityInterface
{
    /**
     * @return int|null
     */
    public function getId(): ?int;

    /**
     * @return EntityTypeInterface
     */
    public function getObjectType(): EntityTypeInterface;
}