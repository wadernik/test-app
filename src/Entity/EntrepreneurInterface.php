<?php

declare(strict_types=1);

namespace Self\UserApp\Entity;

interface EntrepreneurInterface extends UserableInterface
{
    public function getTaxPayerId(): ?string;

    public function setTaxPayerId(?string $taxPayerId = null): void;
}