<?php

declare(strict_types=1);

namespace Self\UserApp\Enum;

enum UserTypeEnum: string
{
    case INDIVIDUAL = 'individual';
    case ENTREPRENEUR = 'entrepreneur';
    case JURIDICAL = 'juridical';
}