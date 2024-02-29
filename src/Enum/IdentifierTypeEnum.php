<?php

declare(strict_types=1);

namespace Self\UserApp\Enum;

enum IdentifierTypeEnum: string
{
    case EMAIL = 'email';
    case PHONE = 'phone';
}