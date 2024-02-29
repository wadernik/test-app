<?php

declare(strict_types=1);

namespace Self\UserApp\Command;

use Self\UserApp\Entity\EntrepreneurInterface;
use Self\UserApp\Entity\IndividualInterface;
use Self\UserApp\Entity\JuridicalInterface;
use Self\UserApp\EntityFactory\UserFactoryCreatorInterface;
use Self\UserApp\Enum\IdentifierTypeEnum;
use Self\UserApp\Enum\UserTypeEnum;

final class CreateUserCommand implements CreateUserCommandInterface
{
    public function __construct(private readonly UserFactoryCreatorInterface $creator)
    {
    }

    public function execute(): void
    {
        // $userType = UserTypeEnum::INDIVIDUAL;

        // if (isset($argv[1])) {
        //     $userType = UserTypeEnum::tryFrom($argv[1]);
        // }

        /** @var IndividualInterface $individual */
        $individual = $this->creator
            ->factory(UserTypeEnum::INDIVIDUAL->value)
            ->new(UserTypeEnum::INDIVIDUAL, IdentifierTypeEnum::PHONE, '+71111111111');

        $individual->setFirstName('some name');
        $individual->setSecondName('some other name');

        /** @var EntrepreneurInterface $entrepreneur */
        $entrepreneur = $this->creator
            ->factory(UserTypeEnum::ENTREPRENEUR->value)
            ->new(UserTypeEnum::ENTREPRENEUR, IdentifierTypeEnum::EMAIL, 'some-email@e.mail');

        $entrepreneur->setTaxPayerId('213');

        /** @var JuridicalInterface $juridical */
        $juridical = $this->creator
            ->factory(UserTypeEnum::JURIDICAL->value)
            ->new(UserTypeEnum::JURIDICAL, IdentifierTypeEnum::EMAIL, 'some-other-email@e.mail');

        $juridical->setAccountId('123213');
    }
}