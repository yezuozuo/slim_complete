<?php

namespace App\Validation\Exceptions;

use Respect\Validation\Exceptions\ValidationException;

/**
 * Class MatchesPasswordException
 *
 * @package App\Validation\Exceptions
 */
class MatchesPasswordException extends ValidationException {

    public static $defaultTemplates = [
        self::MODE_DEFAULT  => [
            self::STANDARD => '{{name}} does not macth',
        ],
        self::MODE_NEGATIVE => [
            self::STANDARD => '{{name}} does not macth negative',
        ]
    ];
}