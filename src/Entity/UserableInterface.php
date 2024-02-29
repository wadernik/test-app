<?php

declare(strict_types=1);

namespace Self\UserApp\Entity;

use Self\UserApp\Enum\UserTypeEnum;

interface UserableInterface
{
    public function getUser(): User;

    public function getType(): UserTypeEnum;
}