<?php

namespace App\Entity\Store\Product\ProductPart\Field;

interface FieldInterface
{
    public function getValue(): mixed;

    public function setValue(mixed $value): self;
}