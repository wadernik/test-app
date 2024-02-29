<?php

declare(strict_types=1);

namespace Self\UserApp\Entity;

use Self\UserApp\Enum\UserTypeEnum;

final class JuridicalUser implements JuridicalInterface
{
    // UserTypeEnum::JURIDICAL
    public function __construct(
        private readonly User $user,
        private readonly UserTypeEnum $type
    )
    {
    }

    private ?string $accountId = null;

    public function getUser(): User
    {
        return $this->user;
    }

    public function getType(): UserTypeEnum
    {
        return $this->type;
    }

    public function getAccountId(): ?string
    {
        return $this->accountId;
    }

    public function setAccountId(?string $accountId): void
    {
        $this->accountId = $accountId;
    }
}