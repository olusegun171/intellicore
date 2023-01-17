<?php

namespace Intellicore\PinGenerator\Classes\Rules;

use Intellicore\PinGenerator\Classes\RulesInterface;

/**
 * Class to check for consective repeated numbers
 */
class Consecutive implements RulesInterface
{
    public function check(int $randomNumber)
    {
        $numbers = str_split((string)$randomNumber);
        $isConsective = true;
        $unique = array_unique($numbers);
        $consecutive = array_diff_assoc($numbers, $unique);
        if (!$consecutive) {
            $isConsective = false;
        }

        return $isConsective;
    }
}
