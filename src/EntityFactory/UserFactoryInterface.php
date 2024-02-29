<?php

declare(strict_types=1);

namespace Self\UserApp\EntityFactory;

use Self\UserApp\Entity\UserableInterface;
use Self\UserApp\Enum\IdentifierTypeEnum;
use Self\UserApp\Enum\UserTypeEnum;

interface UserFactoryInterface
{
    public function new(UserTypeEnum $type, IdentifierTypeEnum $identifierType, string $identifier): UserableInterface;
}