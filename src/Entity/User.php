<?php

declare(strict_types=1);

namespace Self\UserApp\Entity;

use Self\UserApp\Enum\IdentifierTypeEnum;

class User
{
    private ?int $id = null;

    private readonly IdentifierTypeEnum $identifierType;

    private readonly string $identifier;

    private ?string $password = null;

    public function __construct(
        IdentifierTypeEnum $identifierType,
        string $identifier,
    )
    {
        $this->identifierType = $identifierType;
        $this->identifier = $identifier;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id = null): void
    {
        $this->id = $id;
    }

    public function getIdentifierType(): IdentifierTypeEnum
    {
        return $this->identifierType;
    }

    public function getIdentifier(): string
    {
        return $this->identifier;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }
}