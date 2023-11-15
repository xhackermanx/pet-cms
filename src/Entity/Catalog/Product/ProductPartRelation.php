<?php

namespace App\Entity\Catalog\Product;

use App\Repository\Catalog\Product\ProductPartRelationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Exception\ValidatorException;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ProductPartRelationRepository::class)]
#[ORM\HasLifecycleCallbacks]
class ProductPartRelation extends ProductPart
{
    #[ORM\ManyToOne(inversedBy: 'productPartRelations')]
    #[Assert\NotNull]
    private ProductPart $target;

    public function __construct(ProductPart $target)
    {
        parent::__construct();
        $this->target = $target;
    }

    public function getTarget(): ProductPart
    {
        return $this->target;
    }

    public function setTarget(ProductPart $target): static
    {
        $this->target = $target;

        return $this;
    }

    #[ORM\PrePersist]
    public function prePersist()
    {
        $this->validateTypeIsNull();
        $this->validateTargetNotNull();
    }

    #[ORM\PreUpdate]
    public function preUpdate()
    {
        $this->validateTypeIsNull();
        $this->validateTargetNotNull();
    }

    /**
     * Ограничение. Тип должен быть пустым
     * @return void
     */
    private function validateTypeIsNull() {
        $validator = Validation::createValidator();
        $violations = $validator->validate($this->type, [
            new Assert\IsNull([
                'message' => 'Type must be null for ProductPartRelation'
            ]),
        ]);

        if (count($violations) > 0) {
            throw new ValidatorException('Type must be null for ProductPartRelation');
        }
    }

    /**
     * Ограничение. Ссылка не должна быть пустой
     * @return void
     */
    private function validateTargetNotNull() {
        $validator = Validation::createValidator();
        $violations = $validator->validate($this->target, [
            new Assert\NotNull([
                'message' => 'Target must be not null for ProductPartRelation'
            ]),
        ]);

        if (count($violations) > 0) {
            throw new ValidatorException('Target must be not null for ProductPartRelation');
        }
    }
}
