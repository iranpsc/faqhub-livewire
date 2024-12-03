<?php

namespace App\Enum;

enum QuestionPinStatus :int
{
    case PINNED = 1;
    case UNPINNED = 0;
}
