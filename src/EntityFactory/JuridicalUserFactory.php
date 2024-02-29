<?php

declare(strict_types=1);

namespace Self\UserApp\EntityFactory;

use Self\UserApp\Entity\JuridicalUser;
use Self\UserApp\Entity\User;
use Self\UserApp\Enum\IdentifierTypeEnum;
use Self\UserApp\Enum\UserTypeEnum;

final class JuridicalUserFactory implements UserFactoryInterface
{
    public function new(UserTypeEnum $type, IdentifierTypeEnum $identifierType, string $identifier): JuridicalUser
    {
        return new JuridicalUser(
            new User($identifierType, $identifier),
            UserTypeEnum::JURIDICAL
        );
    }
}