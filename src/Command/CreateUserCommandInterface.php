<?php

declare(strict_types=1);

namespace Self\UserApp\Command;

interface CreateUserCommandInterface
{
    public function execute(): void;
}