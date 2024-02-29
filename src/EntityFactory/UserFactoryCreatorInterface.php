<?php

declare(strict_types=1);

namespace Self\UserApp\EntityFactory;

interface UserFactoryCreatorInterface
{
    public function factory(string $name): UserFactoryInterface;
}