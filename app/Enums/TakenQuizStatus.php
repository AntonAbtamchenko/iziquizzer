<?php

namespace App\Enums;

/**
 * TakenQuizStatus
 *
 * @package App\Enums
 */
class TakenQuizStatus extends AbstractEnum
{
    const OPEN = 1;
    const IN_PROGRESS = 2;
    const DONE = 3;

    protected static $labels = [
        self::OPEN => 'enum/taken_quiz_status.open',
        self::IN_PROGRESS => 'enum/taken_quiz_status.in_progress',
        self::DONE => 'enum/taken_quiz_status.done',
    ];
}
