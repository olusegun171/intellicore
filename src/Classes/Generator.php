<?php

namespace Intellicore\PinGenerator\Classes;

use Intellicore\PinGenerator\Classes\Rules\Consecutive;
use Intellicore\PinGenerator\Classes\Rules\Palindrome;
use Intellicore\PinGenerator\Classes\Rules\Sequential;

class Generator
{
    /**
     * Create an array list of all the rules
     *
     * @return array
     */
    private function rules(): array
    {
        $palindome = new Palindrome();
        $sequential = new Sequential();
        $consecutive = new Consecutive();

        $allRules = array($palindome, $sequential, $consecutive);

        return $allRules;
    }

    /**
     *  Pin validity based on defined rules
     * @param int $random
     * @return bool
     */
    private function pinValidity(int $random): bool
    {
        // we Assume number is valid
        $isValid = true;

        //get the list of rules to validate the number
        $rules = $this->rules();

        //confirm if number is sequential, palindrome or has repeating numbers

        foreach ($rules as $rule) {
            $isConfirmed =  $rule->check($random);

            if ($isConfirmed) {
                $isValid = false;
                break;
            }
        }

        return $isValid;
    }

    /**
     * @param int $totalNumberOfPin default value 1
     *
     * @return array
     */
    public function emit(int $totalNumberOfPin = 1, int $pinLength = null): array
    {
        $generatedPins = array();

        $shouldGenerate = true;

        while ($shouldGenerate) {
            $random = random_int(1000, 9999);

            $isInvalid = $this->pinValidity($random);

            if ($isInvalid) {
                array_push($generatedPins, (string)$random);
                if (count($generatedPins) == $totalNumberOfPin) {
                    $shouldGenerate = false;
                }
            }
        }

        return $generatedPins;
    }
}
