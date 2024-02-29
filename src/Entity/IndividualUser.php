<?php

declare(strict_types=1);

namespace Self\UserApp\Entity;

use Self\UserApp\Enum\UserTypeEnum;

final class IndividualUser implements IndividualInterface
{
    public function __construct(
        private readonly User $user,
        // UserTypeEnum::INDIVIDUAL
        private readonly UserTypeEnum $type
    )
    {
    }

    private ?string $firstName = null;

    private ?string $secondName = null;

    public function getUser(): User
    {
        return $this->user;
    }

    public function getType(): UserTypeEnum
    {
        return $this->type;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName = null): void
    {
        $this->firstName = $firstName;
    }

    public function getSecondName(): ?string
    {
        return $this->secondName;
    }

    public function setSecondName(?string $secondName = null): void
    {
        $this->secondName = $secondName;
    }
}