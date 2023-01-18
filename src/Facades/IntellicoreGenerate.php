<?php

namespace Intellicore\PinGenerator\Facades;

use Illuminate\Support\Facades\Facade;

class IntellicoreGenerate extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'intellicore-generator';
    }
}
