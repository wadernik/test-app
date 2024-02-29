<?php

declare(strict_types=1);

namespace Self\UserApp\Entity;

interface IndividualInterface extends UserableInterface
{
    public function getFirstName(): ?string;

    public function setFirstName(?string $firstName = null): void;

    public function getSecondName(): ?string;

    public function setSecondName(?string $secondName): void;
}