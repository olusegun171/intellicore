<?php

namespace Intellicore\PinGenerator\Classes\Rules;

use Intellicore\PinGenerator\Classes\RulesInterface;

/**
 * class  to check Sequential numbers
 */
class Sequential implements RulesInterface
{
    public function check(int $randomNumber)
    {
        $numbers = str_split((string)$randomNumber);
        $isSequential = true;
        for ($i = 0; $i < count($numbers) - 1; $i++) {
            if ($numbers[$i] + 1 != $numbers[$i + 1]) {
                $isSequential = false;
                break;
            }
        }

        return $isSequential;
    }
}
