<?php

namespace App\Enum;

enum CommentableEnums: string
{
    case QUESTION = 'question';
    case ANSWER = 'answer';
    case COMMENT = 'comment';
}
