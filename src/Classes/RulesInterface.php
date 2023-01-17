<?php

namespace Intellicore\PinGenerator\Classes;

interface RulesInterface
{
    public function check(int $randomNumber);
}
