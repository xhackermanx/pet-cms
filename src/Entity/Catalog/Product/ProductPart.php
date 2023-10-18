<?php

namespace App\Entity\Catalog\Product;

use App\Repository\Catalog\Product\ProductPartRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Exception\ValidatorException;
use Symfony\Component\Validator\Validation;

#[ORM\Entity(repositoryClass: ProductPartRepository::class)]
#[ORM\HasLifecycleCallbacks]
class ProductPart extends Product
{
    /**
     * Ограничение. Должен быть ProductType
     * @return void
     */
    #[ORM\PrePersist]
    public function validateTypeNotNull()
    {
        $validator = Validation::createValidator();
        $violations = $validator->validate($this->type, [
            new Assert\NotNull([
                'message' => 'Type must not be null for ProductPart'
            ]),
        ]);

        if (count($violations) > 0) {
            // выбросить исключение или выполнить другое действие
            throw new ValidatorException('Type must not be null for ProductPart');
        }
    }
}
