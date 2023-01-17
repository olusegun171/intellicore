<?php

namespace Intellicore\PinGenerator\Classes\Rules;

use Intellicore\PinGenerator\Classes\RulesInterface;

/**
 * Class to check Palindrome
 */
class Palindrome implements RulesInterface
{
    public function check(int $randomNumber)
    {
        $number = $randomNumber;
        $sum = 0;
        $isPalindrome = true;

        while (floor($number)) {
            $rem = $number % 10;
            $sum = $sum * 10 + $rem;
            $number = $number/10;
        }

        $isPalindrome = $sum == $randomNumber ? true : false;
        return $isPalindrome;
    }
}
