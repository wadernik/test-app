<?php

declare(strict_types=1);

namespace Self\UserApp\EntityFactory;

use Self\UserApp\Entity\EntrepreneurInterface;
use Self\UserApp\Entity\EntrepreneurUser;
use Self\UserApp\Entity\User;
use Self\UserApp\Enum\IdentifierTypeEnum;
use Self\UserApp\Enum\UserTypeEnum;

final class EntrepreneurUserFactory implements UserFactoryInterface
{
    public function new(
        UserTypeEnum $type,
        IdentifierTypeEnum $identifierType,
        string $identifier
    ): EntrepreneurInterface
    {
        return new EntrepreneurUser(
            new User($identifierType, $identifier),
            UserTypeEnum::ENTREPRENEUR
        );
    }
}