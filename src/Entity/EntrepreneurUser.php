<?php

declare(strict_types=1);

namespace Self\UserApp\Entity;

use Self\UserApp\Enum\UserTypeEnum;

final class EntrepreneurUser implements EntrepreneurInterface
{
    // UserTypeEnum::ENTREPRENEUR
    public function __construct(
        private readonly User $user,
        private readonly UserTypeEnum $type
    )
    {
    }

    private ?string $taxPayerId = null;

    public function getUser(): User
    {
        return $this->user;
    }

    public function getType(): UserTypeEnum
    {
        return $this->type;
    }

    public function getTaxPayerId(): ?string
    {
        return $this->taxPayerId;
    }

    public function setTaxPayerId(?string $taxPayerId = null): void
    {
        $this->taxPayerId = $taxPayerId;
    }
}