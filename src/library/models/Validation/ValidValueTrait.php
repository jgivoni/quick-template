<?php

namespace App\library\models\Validation;

/**
 * Trait that can be used by entities and value objects to ensure that the object is valid after instantiation
 * The class must implements ValidatableInterface and is recommended to also implement ValidInterface.
 */
trait ValidValueTrait
{
    public function __construct(mixed ...$args)
    {
        $this instanceof ValidatableInterface
            || throw new \ErrorException('Class ' . \get_class($this) . ' must implement ' . ValidatableInterface::class);

        /** @phpstan-ignore-next-line Unknown type will not match */
        parent::__construct(...$args);

        $this->validate();
    }
}
