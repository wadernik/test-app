<?php

declare(strict_types=1);

namespace Self\UserApp\EntityFactory;

use Self\UserApp\Enum\UserTypeEnum;

final class UserFactoryCreator implements UserFactoryCreatorInterface
{
    public function factory(string $name): UserFactoryInterface
    {
        return match (UserTypeEnum::tryFrom($name)) {
            UserTypeEnum::ENTREPRENEUR => new EntrepreneurUserFactory(),
            UserTypeEnum::JURIDICAL => new JuridicalUserFactory(),
            default => new IndividualUserFactory(),
        };
    }
}