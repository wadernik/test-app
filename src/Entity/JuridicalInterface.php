<?php

declare(strict_types=1);

namespace Self\UserApp\Entity;

interface JuridicalInterface extends UserableInterface
{
    public function getAccountId(): ?string;

    public function setAccountId(?string $accountId): void;
}