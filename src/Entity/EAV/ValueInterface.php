<?php

namespace App\Entity\EAV;

interface ValueInterface
{
    /**
     * @return int|null
     */
    public function getId(): ?int;

    /**
     * @return string|null
     */
    public function getValue(): ?string;
}