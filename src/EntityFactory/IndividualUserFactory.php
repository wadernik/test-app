<?php

declare(strict_types=1);

namespace Self\UserApp\EntityFactory;

use Self\UserApp\Entity\IndividualInterface;
use Self\UserApp\Entity\IndividualUser;
use Self\UserApp\Entity\User;
use Self\UserApp\Enum\IdentifierTypeEnum;
use Self\UserApp\Enum\UserTypeEnum;

final class IndividualUserFactory implements UserFactoryInterface
{
    public function new(UserTypeEnum $type, IdentifierTypeEnum $identifierType, string $identifier): IndividualInterface
    {
        return new IndividualUser(
            new User($identifierType, $identifier),
            UserTypeEnum::INDIVIDUAL
        );
    }
}