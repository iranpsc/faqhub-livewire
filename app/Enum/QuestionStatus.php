<?php

namespace App\Enum;

enum QuestionStatus :int
{
    case PUBLISHED = 1;

    case UNPUBLISHED = 0;
}
